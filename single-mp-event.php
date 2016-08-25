<?php
do_action('mptt-single-mp-event-before-wrapper');
do_action('mptt_before_main_wrapper');
while (have_posts()) : the_post();
?>
<div class="row mptt-main-wrapper">
	<div class="columns large-8 mptt-content">
		<h1 class="event__title"><?php the_title() ?></h1>
		<h2 class="event__subtitle"><?= get_post_meta($post->ID, 'sub_title', TRUE); ?></h2>
		<div class="thumbnail-wrapper">
			<?php if (has_post_thumbnail()) {
				the_post_thumbnail(apply_filters('mptt_event_template_content_thumbnail_size', 'large'), array('class' => "event-thumbnail"));
			} ?>
		</div>
		<div class="event-content"><?php the_content(); ?></div>
	</div>
	<div class="columns-large-4">
		<?php	$count = count(mptt_get_event_data());
		if (!empty($count)) {
		?>
		<h3 class="timeslots-title"><?php printf(__('Event Timeslots (%s)', 'mp-timetable'), $count); ?></h3>
		<?php
				$events = mptt_get_event_data();
		do_action('mptt-before-timeslots', $events);
		?>
		<ul class="mptt-event <?php echo apply_filters('mptt_events_list_class', 'events-list') ?>">
			<?php foreach ($events as $event): ?>
			<li class="event mptt-colorized" id="event_hours_<?php echo $event->event_id ?>">
				<h4 class="event-title">
				<a class="event-link" href="<?php echo get_permalink($event->column_id); ?>" title="<?php the_title_attribute( array('post' => $event->event_id) ); ?>"><?php echo get_the_title($event->column_id); ?>
					<small><?= get_post_meta( $event->column_id, 'option_day', TRUE ); ?></small>
				</a>
				</h4>
				<?php //print_r($event); ?>
				<p class="timeslot">
					<time datetime="<?php echo $event->event_start; ?>" class="timeslot-start"><?php
					echo date(get_option('time_format'), strtotime($event->event_start)); ?></time><?php
					echo apply_filters('mptt_timeslot_delimiter', ' - '); ?><time datetime="<?php echo $event->event_end; ?>" class="timeslot-end"><?php
					echo date(get_option('time_format'), strtotime($event->event_end)); ?></time>
				</p>
				<?php if (!empty($event->description)) { ?>
				<p class="event-description"><?php echo $event->description; ?></p>
				<?php } ?>
				<?php if (!empty($event->user)) { ?>
				<p class="event-user"><a href="<?php echo get_author_posts_url($event->user->ID); ?>"  title="<?php echo $event->user->display_name; ?>"><?php echo get_avatar($event->user->ID, apply_filters('mptt-column-user-avatar-size', 32), '', $event->user->display_name) . ' ';
				echo $event->user->display_name ?></a></p>
				<?php } ?>
			</li>
			<?php endforeach; ?>
		</ul>
		<?php
		do_action('mptt-after-timeslots', $events);
		}
		?>
	</div>
</div>
<?php
endwhile;
do_action('mptt_after_main_wrapper');
do_action('mptt-single-mp-event-after-wrapper');
?>