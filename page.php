<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="wrapper uk-padding-large uk-padding-remove-left uk-padding-remove-right" style="margin-top:2vh">
			<div class="uk-flex" uk-grid>
					<div>
							<h2><?php the_title(); ?></h2>
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div><?php the_content(); ?></div>
							</article>
						<?php endwhile; ?>
						<?php else: ?>
							<article>
								<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
							</article>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php //get_footer(); ?>
