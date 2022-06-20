<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
		<div class="wrapper uk-padding-large uk-padding-remove-left uk-padding-remove-right">
			<div class="uk-flex" uk-grid>
						<div class="">
							<?php get_sidebar(); ?>
						</div>
						<div class="">
							<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

							<?php get_template_part('loop'); ?>

							<?php get_template_part('pagination'); ?>
						</div>
					</div>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
