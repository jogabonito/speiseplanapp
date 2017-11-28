<?php
/**
 * Day View Content
 * The content template for the day view. This template is also used for
 * the response that is returned on day view ajax requests.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/day/content.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<div id="tribe-events-content" class="tribe-events-list tribe-events-day">

	<!-- List Title -->
	<?php do_action( 'tribe_events_before_the_title' ); ?>
	<h1 class="test" style="font-family: georgia">Restaurant Music Store</h1>
	<p class="oeffnungszeiten">Geöffnet: Mo.-Fr. 12.00-17.00 & Sa.12.00-17.00 im 1.Obergeschoss </p>
	<div class="datetime">
	<?php //echo tribe_events_event_schedule_details(); ?>
	</div>

	<?php do_action( 'tribe_events_after_the_title' ); ?>

	<!-- Notices -->
	<?php tribe_the_notices() ?>

	<!-- List Header -->
	<?php do_action( 'tribe_events_before_header' ); ?>
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>

		<!-- Header Navigation -->
		<?php do_action( 'tribe_events_before_header_nav' ); ?>
		<?php tribe_get_template_part( 'day/nav' ); ?>
		<?php do_action( 'tribe_events_after_header_nav' ); ?>

	</div>
	<!-- #tribe-events-header -->
	<?php do_action( 'tribe_events_after_header' ); ?>


	<!-- Events Loop -->
	<?php if ( have_posts() ) : ?>
		<?php do_action( 'tribe_events_before_loop' ); ?>
		<?php tribe_get_template_part( 'day/loop' ) ?>
		<?php do_action( 'tribe_events_after_loop' ); ?>
	<?php endif; ?>

	<!-- List Footer -->
	<?php do_action( 'tribe_events_before_footer' ); ?>
	<div id="tribe-events-footer">

		<!-- Footer Navigation -->
		<?php do_action( 'tribe_events_before_footer_nav' ); ?>
		<?php tribe_get_template_part( 'day/nav' ); ?>
		<?php do_action( 'tribe_events_after_footer_nav' ); ?>
	
	</div>
	<!-- #tribe-events-footer -->
	<?php do_action( 'tribe_events_after_footer' ) ?>
	<hr>

	<div class="widget-column footer-widget-1">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
					
	</div>
</div><!-- #tribe-events-content -->
