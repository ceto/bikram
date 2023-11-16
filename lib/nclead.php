<?php
    define( 'WP_USE_THEMES', FALSE );
    require( '../../../../wp-load.php' );
?>


<?php
    // $to_email = get_field('r_email', 'option');
    // $bcc_email = get_field('bcc_email', 'option');

    $to_email = "falkayk@gmail.com";
    $bcc_email = "szabogabor@hydrogene.hu";

    $incomingsubject = __('BIKRAM.HU | Próbabérlet regisztráció', 'bikram');
    $respsubject = __('Próbabérlet regisztrációdat rögzítettük. | BIKRAM.HU', 'bikram');
    $data = array(
        'name' => array (
            'label' => __('Név', 'bikram'),
            'value' => '',
        ),
        'email' => array (
            'label' => __('E-mail cím', 'bikram'),
            'value' => '',
        ),
        'landingid' => array (
            'label' => __('Jelentkezési oldal ID', 'sc'),
            'value' => '',
        ),
        'landingpage' => array (
            'label' => __('Jelentkezési oldal', 'gls'),
            'value' => '',
        ),
        'acceptgdpr' => array (
            'label' => __('Adatkezelés elfogadva', 'bikram'),
            'value' => '',
        ),
        'acceptmarketing' => array (
            'label' => __('Marketing célú felhasználás elfogadva', 'bikram'),
            'value' => '',
        )
    );
?>

<?php if($_POST) : ?>
<?php
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        $output = json_encode(array('type'=>'error', 'text' => 'Request must come from Ajax'));
        die($output);
    }

    if( (strlen($_POST["name"]) < 2) || (strlen($_POST["email"]) < 2)  ) {
        $output = json_encode(array('type'=>'error', 'text' => __('Hiányzó kötelező mező. Ellenőrizze a megadott adatokat!','bikram') ));
        die($output);
    }

    $data['name']['value'] = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $data['email']['value'] = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    $data['landingid']['value'] = filter_var($_POST["landingid"], FILTER_SANITIZE_STRING);
    $data['landingpage']['value'] = '<a href="'.get_permalink($data['landingid']['value']).'">'.get_the_title($data['landingid']['value']).'</a>';

    $data['acceptgdpr']['value'] = filter_var($_POST["acceptgdpr"], FILTER_SANITIZE_STRING);
    $data['acceptmarketing']['value'] = filter_var($_POST["acceptmarketing"], FILTER_SANITIZE_STRING);

    if(strlen($data['name']['value'])<4) {
        $output = json_encode(array('type'=>'error', 'text' => __('Teljes név megadása kötelező!','bikram') ));
        die($output);
    }

    if(!filter_var($data['email']['value'], FILTER_VALIDATE_EMAIL)) {
        $output = json_encode(array('type'=>'error', 'text' => __('Érvénytelen e-mail cím!','bikram') ));
        die($output);
    }

    if(!filter_var($data['acceptgdpr']['value'], FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) {
        $output = json_encode(array('type'=>'error', 'text' => __('Az adatkezelés elfogadása kötelező','bikram') ));
        die($output);
    }

    $metas = array();
    foreach ($data as $key => $dataitem) {
        if ($dataitem['value']!=='') {
            $metas[$key] = $dataitem['value'];
        }
    }

?>

<?php ob_start(); ?>
<table width="100%" cellpadding="0" cellspacing="5">
<?php foreach ($metas as $key => $datavalue) : ?>
    <tr>
        <td><strong><?= $data[$key]['label'] ?></strong></td>
        <td><?= $data[$key]['value'] ?></td>
    </tr>
<?php endforeach; ?>
</table>
<br><hr><br>
<?php $incominghtmlcontent = ob_get_clean(); ?>

<?php
    $thelead = array(
        'post_title'    => $data['name']['value'],
        'post_status'   => 'publish',
        'post_type'     => 'lead',
        'meta_input'    => $metas,
        'post_content'  => $incominghtmlcontent
    );

    if( $leadid = wp_insert_post( $thelead ) ) {
        wp_update_post( array(
            'ID' => $leadid,
            'post_title' => __('Próbabérlet', 'bikram').' / '.$data['name']['value'].' #'.$leadid
        ));
    }
?>

<?php

    $incomingheaders = array(
        'From: '.$to_email,
        'Reply-To: '.$data['email']['value'],
        'BCC: '.$bcc_email,
        'X-Mailer: PHP/' . phpversion(),
        'Content-Type: text/html; charset=UTF-8'
    );

    $respincomingheaders = array(
        'From: '.$to_email,
        'Reply-To: '.$to_email,
        // 'BCC: '.$bcc_email,
        'X-Mailer: PHP/' . phpversion(),
        'Content-Type: text/html; charset=UTF-8'
    );

    $sentMail = @wp_mail($to_email, $incomingsubject, $incominghtmlcontent, $incomingheaders);

    if(!$sentMail) {
        $output = json_encode(array('type'=>'error', 'text' => __('Hiba történt küldés során, próbálkozz újra!','bikram')));
        die($output);
    } else {
        $incominghtmlcontent = '<h3>'.__('Regisztráltuk a bérleted, várunk szerettel az óránkon','bikram').'</h3>'.$incominghtmlcontent;
        $respsentMail = @wp_mail($data['email']['value'], $respsubject, $incominghtmlcontent, $respincomingheaders);
        $output = json_encode(array('type'=>'success', 'text' => __('Regisztráltuk a bérleted, várunk szerettel az óránkon','bikram')));
        die($output);
    }
?>
<?php endif; ?>