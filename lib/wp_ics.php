<?php

// Add a custom endpoint "calendar"
function add_calendar_feed(){
	add_feed('calendar', 'export_events');
    // Only uncomment these 2 lines the first time you load this script, to update WP rewrite rules
    /*global $wp_rewrite;
    $wp_rewrite->flush_rules( false );*/
}
add_action('init', 'add_calendar_feed');

function export_ics(){

    /*  For a better understanding of ics requirements and time formats
        please check https://gist.github.com/jakebellacera/635416   */

    // Query the event
    $the_event = new WP_Query(array(
        'p' => $_REQUEST['id'],
        'post_type' => 'any',
    ));

    if($the_event->have_posts()) :

        // Escapes a string of characters
        function escapeString($string) {
              return preg_replace('/([\,;])/','\\\$1', $string);
        }
        // Cut it
        function shorter_version($string, $lenght) {
        	if (strlen($string) >= $lenght) {
        	    return substr($string, 0, $lenght);
        	} else {
        	    return $string;
        	}
        }

        while($the_event->have_posts()) : $the_event->the_post();

        /*  The correct date format, for ALL dates is date_i18n('Ymd\THis\Z',time(), true)
            So if your date is not in this format, use that function    */

        $timestamp = date_i18n('Ymd\THis\Z',time(), true);
        $uid = get_the_ID();
        $created_date = get_post_time('Ymd\THis\Z', true, $uid );
        $start_date = date_i18n("Ymd\THis\Z", get_post_meta( get_the_ID(), 'custom-field-of-start-date', true )); // EDIT THIS WITH YOUR OWN VALUE
        $end_date = date_i18n("Ymd\THis\Z", get_post_meta( get_the_ID(), 'custom-field-of-end-date', true )); // EDIT THIS WITH YOUR OWN VALUE
        $deadline = date_i18n("Ymd\THis\Z", get_post_meta( get_the_ID(), 'custom-field-of-deadline-date', true )); // EDIT THIS WITH YOUR OWN VALUE
        $organiser = get_bloginfo('name'); // EDIT THIS WITH YOUR OWN VALUE
        $address = ''; // EDIT THIS WITH YOUR OWN VALUE
        $url = get_the_permalink();
        $summary = get_the_excerpt();
        $content = trim(preg_replace('/\s\s+/', ' ', get_the_content())); // removes newlines and double spaces

        //Give the iCal export a filename
        $filename = urlencode( get_the_title().'-ical-' . date('Y-m-d') . '.ics' );
        $eol = "\r\n";

        //Collect output
        ob_start();

        // Set the correct headers for this file
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=".$filename);
        header('Content-type: text/calendar; charset=utf-8');
        header("Pragma: 0");
        header("Expires: 0");

// The below ics structure MUST NOT have spaces before each line
// Credit for the .ics structure goes to https://gist.github.com/jakebellacera/635416
?>
BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//<?php echo get_bloginfo('name').$eol; ?> //NONSGML Events //EN
CALSCALE:GREGORIAN
X-WR-CALNAME:<?php echo get_bloginfo('name').$eol;?>
BEGIN:VEVENT
CREATED:<?php echo $created_date.$eol;?>
UID:<?php echo $uid.$eol;?>
DTEND;VALUE=DATE:<?php echo $end_date.$eol; ?>
DTSTART;VALUE=DATE:<?php echo $start_date.$eol; ?>
DTSTAMP:<?php echo $timestamp.$eol; ?>
LOCATION:<?php echo escapeString($address).$eol; ?>
DESCRIPTION:<?php echo shorter_version($content,70).$eol; ?>
SUMMARY:<?php echo escapeString(get_the_title()).$eol; ?>
ORGANIZER:<?php echo escapeString($organiser).$eol;?>
URL;VALUE=URI:<?php echo escapeString($url).$eol; ?>
TRANSP:OPAQUE
BEGIN:VALARM
ACTION:DISPLAY
TRIGGER;VALUE=DATE-TIME:<?php echo $deadline.$eol; ?>
DESCRIPTION:Reminder for <?php echo escapeString(get_the_title()); echo $eol; ?>
END:VALARM
END:VEVENT
<?php
        endwhile;
?>
END:VCALENDAR
<?php
        //Collect output and echo
        $eventsical = ob_get_contents();
        ob_end_clean();
        echo $eventsical;
        exit();

    endif;

}
?>