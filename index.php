<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="wrapper uk-padding-large uk-padding-remove-left uk-padding-remove-right" style="margin-top:2vh;">
			<div class="uk-flex" uk-grid>

					<div class="uk-width-1-1" style="width:100%;">
						<h2><?php _e( 'Daily Inspection', 'html5blank' ); ?></h2>

						<?php get_template_part('loop'); ?>

						<?php get_template_part('pagination'); ?>
					</div>
				</div>
		</section>
		<!-- /section -->
	</main>

<?php //get_footer(); ?>
