<?php /* Template Name: Services Template */ get_header();  ?>
	<main role="main">
		<!-- section -->
		<section>
			<div class="wrapper uk-padding-large uk-padding-remove-left uk-padding-remove-right" style="margin-top:2vh;">
				<div class="uk-child-width-1-1 uk-flex" uk-grid>
					<div class=""></div>
					<div class="" style="width:100%;">
					<div class="uk-card uk-card-default uk-margin-medium-bottom">
									<div class="uk-card-header"><a onclick="history.back()"><h2 class="uk-margin-remove-top uk-margin-remove-bottom" style="font-size:1.4rem;"><span class="uk-margin-small-right uk-icon" uk-icon="reply"></span> <strong><?php _e( 'Your services'.$cat_title, 'html5blank' ); ?></strong></h2></a></div>
								</div>

						<?php get_template_part('loop-allservices'); ?>

						
					</div>
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php //get_footer(); ?>
