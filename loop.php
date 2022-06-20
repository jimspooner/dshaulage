<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="uk-height-match uk-flex uk-flex-middle uk-list-view" uk-grid>
			<div class="uk-width-auto"><p><?php the_title(); ?></p></div>
			<div class="uk-width-expand uk-text-right"><a class="uk-button uk-bgc-spot3 uk-text-white" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">VIEW</a></div>
		</div>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
