<?php get_header(); ?>
<?php $category = get_queried_object(); $cat_title = get_cat_name($category->term_id); ?>
<?php if ($cat_title == 'inspections') {$cat_title = 'All';} ?>
	<main role="main">
		<!-- section -->
		<section>
			<div class="wrapper uk-padding-large uk-padding-remove-left uk-padding-remove-right" style="margin-top:2vh;">
				<div class="uk-child-width-1-1 uk-flex" uk-grid>
					<div class=""></div>
					<div class="" style="width:100%;">
					<div class="uk-card uk-card-default uk-margin-medium-bottom">
									<div class="uk-card-header"><a onclick="history.back()"><h2 class="uk-margin-remove-top uk-margin-remove-bottom" style="font-size:1.4rem;"><span class="uk-margin-small-right uk-icon" uk-icon="reply"></span> <strong><?php _e( 'Inspections History - '.$cat_title, 'html5blank' ); ?></strong></h2></a></div>
								</div>

						<?php get_template_part('loop-all'); ?>

						<?php get_template_part('pagination'); ?>
						
					</div>
				</div>
			</div>
			<!-- <button id="test" class="uk-position-bottom-center">T</button> -->
		</section>
		<!-- /section -->
	</main>

<?php //get_footer(); ?>
