<?php $startmonth = ''; if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- article -->
	

		<?php  $month = get_post_meta(get_the_ID(), 'walkaround_month', true); $year = get_post_meta(get_the_ID(), 'walkaround_year', true); ?>

		<?php if ( $startmonth <> '' && $startmonth <> $month) : ?></div></div><?php endif; ?>
			<?php if ( $startmonth <> $month) : ?><div class="uk-card uk-card-default uk-margin-small-top">
				<div class="uk-card-header uk-position-relative" style="background-color:white;" uk-toggle="target: #<?php echo $month; ?>;">
					<h3 class="uk-margin-small-bottom"><strong><?php echo $month.' - '.$year; ?></strong></h3>
					<span class="uk-position-right uk-icon uk-folder-icon" style="top: 19px;right: 35px;" uk-icon="folder"></span>
				</div>
			<div class="uk-card-body" id="<?php echo $month; ?>" <?php if ($startmonth <> '') : ?>hidden<?php endif; ?>><?php endif; ?>
				<?php $startmonth = $month; ?>

				<div class="uk-height-match uk-flex uk-flex-middle uk-margin-remove-top" uk-grid>
					<div class="uk-width-auto"><p class=""><?php the_title(); ?></p></div>
					<div class="uk-width-expand uk-text-right" style="border-bottom:1px solid #fff;"><a class="uk-button uk-bgc-spot3 uk-text-white" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">VIEW</a></div>
				</div>


			<!-- </div>
		</div> -->
		
		

	<!-- /article -->

<?php endwhile; ?>

<div></div>

<?php else: ?>

	<!-- article -->
	<article>
		<p><?php _e( 'No Logs have been added.', 'html5blank' ); ?></p>
	</article>
	<!-- /article -->

<?php endif; ?>
