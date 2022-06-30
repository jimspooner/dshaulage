<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="wrapper uk-padding-large uk-padding-remove-left uk-padding-remove-right" style="margin-top:2vh;">
				<div class="uk-flex" uk-grid>
					<div class="" style="width:100%;">
					<div class="uk-card uk-card-default uk-margin-medium-bottom">
									<div class="uk-card-header"><h2 class="uk-margin-remove-top" style="font-size:1.4rem;"><span class="uk-margin-small-right uk-icon" uk-icon="history"></span> <strong><?php _e( 'Daily Inspections - '.$cat_title, 'html5blank' ); ?></strong></h2></div>
								</div>


						<?php get_template_part('loop'); ?>

						<?php get_template_part('pagination'); ?>
					</div>
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php //get_footer(); ?>
