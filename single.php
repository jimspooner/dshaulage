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

		<?php if (in_category('inspections')) : ?>
			<!-- post title -->
			<div class="uk-card uk-card-default uk-margin-medium-bottom">
									<div class="uk-card-header"><a onclick="history.back()"><h2 class="uk-margin-remove-top uk-margin-remove-bottom" style="font-size:1.4rem;"><span class="uk-margin-small-right uk-icon" uk-icon="reply"></span> <strong>Daily Inspection</strong></h2></a></div>
								</div>
			<h2 style="line-height:1.2;margin-top:0;"><span style="font-weight:400;color:"><?php the_title(); ?></span></h2>
			<!-- /post title -->
			<?php $report = get_post_meta(get_the_ID(), 'walkaround_report'); $report_array = explode(';', $report[0]); $mileage = get_post_meta(get_the_ID(), 'walkaround_mileage');//print_r($report_array); ?>
			<!-- post details -->
			<?php //echo $JSON_report; ?>
				<div class="uk-grid-small uk-grid-match" style="margin-left:0;" uk-grid>
				<div class="uk-width-1-1 uk-padding-remove-left"><div class="uk-bgc-darkgrey uk-padding-small uk-margin-bottom"><span class="uk-text-white">Mileage: <strong><?php echo $mileage[0]; ?></strong></span></div></div>
			<?php foreach ($report_array as $value) { 
				$report_value = explode('|', $value); if ($report_value[0]) : ?>
					<div class="uk-width-2-3" style="border-bottom:1px solid #ecebeb;padding:.6em .3em;margin-top:0;"><span class="uk-text-meta"><?php echo $report_value[0]; ?></span></div>
					<div class="uk-width-1-3 uk-flex uk-flex-middle uk-flex-center uk-bgc-spot2 uk-text-white <?php if ($report_value[1] === ' Defects') {echo 'uk-bgc-spot1';} ?>" style="border-bottom:1px solid #ecebeb;padding:.6em .3em;border-left:1px solid #ecebeb;margin-top:0;"><?php echo $report_value[1]; ?></div>
			<?php endif; } ?>
				</div>
			<!-- /post details -->
			<!-- <div id="defectsq" class="results"></div> -->

			<?php the_content(); // Dynamic Content ?>

		<?php endif; ?>

		<?php if (in_category('defects') || in_category('services')) : ?>
			<?php if (in_category('services')) : $title = 'Service'; endif; if (in_category('defects')) : $title = 'Defects'; endif; ?>
			<?php $meta = get_post_meta( $post->ID, '', true ); //print_r($meta); ?>

			
			<!-- post title -->
			<div class="uk-card uk-card-default uk-margin-medium-bottom">
									<div class="uk-card-header"><a onclick="history.back()"><h2 class="uk-margin-remove-top uk-margin-remove-bottom" style="font-size:1.4rem;"><span class="uk-margin-small-right uk-icon" uk-icon="reply"></span> <strong><?php echo $title; ?></strong></h2></a></div>
								</div>
			<h2 style="line-height:1.2;margin-top:0;"><span style="font-weight:400;color:"><?php the_title(); ?></span></h2>
			<!-- /post title -->
			
			<?php foreach ($meta as $key => $value) {
					if (strpos($key, 'doc_') !== false) {
						echo '<img src="'.$value[0].'" alt="Defect image" style="margin-bottom:5px;max-width:100%;">';
					}
					
				} ?>
			<!-- <div id="defectsq" class="results"></div> -->

			<?php the_content(); // Dynamic Content ?>

		<?php endif; ?>
			

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
