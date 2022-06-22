<?php get_header(); ?>
<?php $category = get_queried_object(); $cat_title = get_cat_name($category->term_id); ?>
	<main role="main">
		<!-- section -->
		<section>
			<div class="wrapper uk-padding-large uk-padding-remove-left uk-padding-remove-right" style="margin-top:2vh;">
				<div class="uk-child-width-1-1 uk-flex" uk-grid>
					<div class=""></div>
					<div class="" style="width:100%;">
						<h2><?php _e( 'Daily Inspections - '.$cat_title, 'html5blank' ); ?></h2>

						<?php get_template_part('loop-cat'); ?>

						<?php get_template_part('pagination'); ?>
					</div>
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php //get_footer(); ?>
