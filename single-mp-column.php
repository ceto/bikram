<?php

do_action('mptt-single-mp-column-before-wrapper');

do_action('mptt-single-before-wrapper');

while (have_posts()) : the_post();
	?>
	<div class="row mptt-main-wrapper">
		<div class="columns large-8">
		<h1 class="column-title"><?php the_title(); ?><small><?= get_post_meta( $post->ID, 'option_day', TRUE ); ?></small></h1>
		<?php //print_r(get_post_meta( $post->ID )); ?>
		<div class="column-content">
			<?php the_content(); ?>
		</div>
		<?php
			$events = mptt_get_column_events();
	do_action('mptt-before-column-events', $events);
	?>
	<ul class="mptt-column <?php echo apply_filters('mptt_events_list_class', 'events-list') ?>">
		<?php foreach ($events as $event): ?>
			<li class="event" id="event_columns_<?php echo $event->event_id ?>">

				<?php if (has_post_thumbnail($event->event_id)) {

					echo wp_get_attachment_image(
							get_post_thumbnail_id($event->event_id),
							apply_filters('mptt_event_thumbnail_size', 'thumbnail'),
							false,
							array('class' => "alignleft event-thumbnail", 'alt' => get_the_title($event->event_id))
					);
				} else { ?>
					<img class="event-thumbnail event-thumbnail-default"
					     src="<?php echo Mp_Time_Table::get_plugin_url() . 'media/css/images/column_icon.png' ?>"
					     alt="<?php echo get_the_title($event->event_id); ?>">
				<?php } ?>

				<h4 class="event-title">
					<a href="<?php echo $event->post->timetable_disable_url == '1' ? '#' : ($event->post->timetable_custom_url != "" ? $event->post->timetable_custom_url : get_permalink($event->event_id)) ?>"
					   class="event-link">
						<?php echo get_the_title($event->event_id); ?>
					</a>
				</h4>

				<p class="timeslot">
					<time datetime="<?php echo $event->event_start; ?>"
						class="timeslot-start"><?php echo date(get_option('time_format'), strtotime($event->event_start)); ?></time><?php echo apply_filters('mptt_timeslot_delimiter', ' - '); ?>
					<time datetime="<?php echo $event->event_end; ?>"
						class="timeslot-end"><?php echo date(get_option('time_format'), strtotime($event->event_end)); ?></time>
				</p>

				<?php if (!empty($event->post->sub_title)) { ?>
					<p class="event-subtitle"><?php echo $event->post->sub_title ?></p>
				<?php } ?>

				<?php if (!empty($event->description)) { ?>
					<p class="event-description"><?php echo $event->description; ?></p>
				<?php } ?>

				<?php if (!empty($event->user)) { ?>
					<p class="event-user"><a href="<?php echo get_author_posts_url($event->user->ID); ?>"
					                         title="<?php the_title_attribute(array('post' => $event->event_id)); ?>"><?php echo get_avatar($event->user->ID, apply_filters('mptt-column-user-avatar-size', 32), '', $event->user->display_name  ); ?>
							<?php echo $event->user->display_name ?></a></p>
				<?php } ?>
				<div class="mptt-clearfix"></div>
			</li>
		<?php endforeach; ?>
	</ul>
	<?php
	do_action('mptt-after-column-events', $events);
		?>
		</div>
		<div class="columns large-4">
			<h3>sidebar helye</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur fuga aut, obcaecati magni incidunt ex maxime tempore suscipit molestias illum voluptate, consequuntur saepe in amet eaque corporis, rem necessitatibus aliquid!</p>
		</div>

	</div>

	<?php
endwhile;

do_action('mptt_after_main_wrapper'); ?>
	<div class="mptt-clearfix"></div>
<?php
do_action('mptt-single-mp-column-after-wrapper');
?>