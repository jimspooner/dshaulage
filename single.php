<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>
			<div class="wrapper uk-padding-large uk-padding-remove-left uk-padding-remove-right" style="margin-top:2vh;">
				<div class="uk-flex" uk-grid>
					<div class="" style="width:100%;">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


			<!-- post title -->
			<h2 style="line-height:1.2;margin-top:0;">Daily Inspection<br><span style="font-weight:400;color:"><?php the_title(); ?></span></h2>
			<!-- /post title -->
			<?php $report = get_post_meta(get_the_ID(), 'walkaround_report'); $report_array = explode(';', $report[0]); //print_r($report_array); ?>
			<!-- post details -->
			<?php //echo $JSON_report; ?>
				<div class="uk-grid-small uk-grid-match" style="margin-left:0;" uk-grid>
			<?php foreach ($report_array as $value) { 
				$report_value = explode('|', $value); if ($report_value[0]) : ?>
					<div class="uk-width-2-3" style="border-bottom:1px solid #ecebeb;padding:.6em .3em;margin-top:0;"><span class="uk-text-meta"><?php echo $report_value[0]; ?></span></div>
					<div class="uk-width-1-3 uk-flex uk-flex-middle uk-flex-center uk-bgc-spot2 uk-text-white <?php if ($report_value[1] === ' Defects') {echo 'uk-bgc-spot1';} ?>" style="border-bottom:1px solid #ecebeb;padding:.6em .3em;border-left:1px solid #ecebeb;margin-top:0;"><?php echo $report_value[1]; ?></div>
			<?php endif; } ?>
				</div>
			<!-- /post details -->
			<div id="defectsq" class="results"></div>

			<?php the_content(); // Dynamic Content ?>

			

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
</div></div></div>
	</section>
	<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php //get_footer(); ?>
