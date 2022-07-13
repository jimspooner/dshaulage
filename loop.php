<?php $category = get_queried_object();  ?>
<?php  $parent_slug = $category->slug; $parent_name = $category->name; ?>

<!-- START IF IS INSPECTION -->
<?php if( is_category('inspections')) : ?>

		<?php $category = get_queried_object();  ?>
		<?php $categories = get_terms( 'category', array('parent' => $category->term_id, 'hide_empty' => false));  ?>
		<p class="uk-text-center"><?php echo $parent_name; ?> history below.</p>
		<div class="uk-child-width-1-2 uk-child-width-1-4@s uk-grid-small uk-flex uk-flex-center" uk-grid>
			<?php foreach ($categories as $key => $category) {
							echo '<div><a href="'.home_url().'/category/'.$parent_slug.'/'.$category->slug.'/" class="uk-text-darkgrey uk-text-lead uk-padding-small uk-bgc-spot4 uk-text-center" style="border-radius:8px;border:2px solid #333;color:#333;margin:2px!important;font-size:1.4rem;font-weight:700;width:100%!important;display:block;text-align:center;"><strong>'.$category->name.'</strong></a></div>';
			} ?>
		</div> 

<?php else : ?>

		<?php $startmonth = ''; ?>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- START IF IN INSPECTION -->
			<?php if (in_category('inspections') ) : ?>

				<?php  $month = get_post_meta(get_the_ID(), 'walkaround_month', true); $year = get_post_meta(get_the_ID(), 'walkaround_year', true); ?>
					<?php if ( $startmonth <> '' && $startmonth <> $month) : ?></div></div></div><?php endif; ?>
					<?php if ( $startmonth <> $month) : ?><div><div class="uk-card uk-card-default uk-margin-small-top">
						<div class="uk-card-header uk-position-relative" style="background-color:white;" uk-toggle="target: #<?php echo $month; ?>;">
							<h3 class="uk-margin-small-bottom"><strong><?php echo $month.' - '.$year; ?></strong></h3>
							<span class="uk-position-right uk-icon uk-folder-icon" style="top: 19px;right: 35px;" uk-icon="folder"></span>
						</div>
					<div class="uk-card-body" id="<?php echo $month; ?>" <?php if ($startmonth <> '') : ?>hidden<?php endif; ?>><?php endif; ?>
					<?php $startmonth = $month; ?>
						<div class="uk-height-match uk-flex uk-flex-middle uk-margin-remove-top" uk-grid>
							<div class="uk-width-auto"><p class="uk-text-reg"><?php the_title(); ?></p></div>
							<div class="uk-width-expand uk-text-right" style="border-bottom:1px solid #fff;"><a class="uk-button uk-bgc-spot3 uk-text-white" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">VIEW</a></div>
						</div>

			<!-- END IF IN INSPECTION -->
			<?php endif; ?>

		<?php endwhile; ?>
		<?php else: ?>
			<article>
				<p><?php _e( 'No Logs have been added.', 'html5blank' ); ?></p>
			</article>
		<?php endif; ?>
	
<!-- END IF IS INSPECTION -->
<?php endif; ?>
