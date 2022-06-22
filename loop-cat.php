<?php $startmonth = ''; if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php  $month = get_post_meta(get_the_ID(), 'walkaround_month', true); $year = get_post_meta(get_the_ID(), 'walkaround_year', true); ?>
		<?php if ($startmonth <> $month) { ?><h3 class="uk-margin-small-bottom"><strong><?php echo $month.' - '.$year; ?></strong></h3><?php } ?>
		<div class="uk-height-match uk-flex uk-flex-middle uk-list-view" uk-grid>
			<div class="uk-width-auto"><p><?php the_title(); ?></p></div>
			<div class="uk-width-expand uk-text-right"><a class="uk-button uk-bgc-spot3 uk-text-white" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">VIEW</a></div>
		</div>
		<?php $startmonth = $month; ?>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<p><?php _e( 'No Logs have been added.', 'html5blank' ); ?></p>
	</article>
	<!-- /article -->

<?php endif; ?>
