<!-- BACKGROUND COLOR -->
<?php $js_main_background = 'uk-bgc-white'; ?>
<!-- START MAIN CONTENT SECTION -->
<section class="<?php echo $js_main_background; ?> uk-padding-large uk-padding-remove-left uk-padding-remove-right">
			<div class="wrapper">
                <div class="uk-position-top-right" style="top:-30px;z-index:-1;max-width:180px;opacity:.5;"><img src="<?php echo get_template_directory_uri(); ?>/img/lightblue-arrows.svg" alt="Lightblue arrows"></div>
					<h1 class="uk-margin-remove-top" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true"><?php the_title(); ?></h1>
                    <hr class="uk-divider-small">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> uk-scrollspy="cls: uk-animation-slide-bottom; target: > div; delay: 300; repeat: true">

                        <div><?php the_content(); ?>
                        <?php $button = get_field('button'); if ($button['label']) : ?><br><a href="<?php echo $button['url']; ?>" class="button-white"><?php echo $button['label']; ?></a><?php endif; ?>
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
			</div>
</section>
<!-- END MAIN CONTENT SECTION -->