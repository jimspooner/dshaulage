<?php /* Template Name: HP basic Template */ get_header();   ?>
	<main role="main">

    <section>
			<div class="wrapper uk-padding-large uk-padding-remove-left uk-padding-remove-right" >
			<div class="uk-flex" uk-grid>
					<div class="uk-width-1-1" style="width:100%;">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<!-- <div class="uk-card uk-card-default"> -->
									
									<div id="dailyInspections" class="uk-card-body">
										<div class="uk-child-width-1-2 uk-child-width-1-4@s uk-grid-small" uk-grid>
											<div><a class="uk-button uk-button-spot4 uk-textbutton-light-spot4 uk-text-lead uk-margin-remove uk-text-center" style="width:100%;color:#333;border-radius:8px;margin:2px!important;font-size:1.2rem;padding:20px!important;line-height:1;" href="<?php echo home_url(); ?>/walkaround-inspection/"><div class="uk-text-center uk-icon uk-margin-small-bottom" uk-icon="icon:plus-circle;ratio:2;"></div><br><strong>Daily<br>Inspection</strong></a></div>
											<div><a class="uk-button uk-button-spot3 uk-textbutton-light-spot3 uk-text-lead uk-margin-remove uk-text-center" style="width:100%;border-radius:8px;margin:2px!important;font-size:1.2rem;padding:20px!important;line-height:1;" href="<?php echo home_url(); ?>/inspections/"><div class="uk-text-centeruk-icon uk-margin-small-bottom" uk-icon="icon:history;ratio:2;"></div><br><strong>Inspection<br>History</strong></a></div>

											<div><a class="uk-button uk-button-spot4 uk-textbutton-light-spot4  uk-text-lead uk-margin-remove uk-text-center" style="width:100%;border-radius:8px;color:#333;margin:2px!important;font-size:1.2rem;padding:20px!important;line-height:1;" href="<?php echo home_url(); ?>/add-defect/"><div class="uk-text-center uk-icon uk-margin-small-bottom" uk-icon="icon:plus-circle;ratio:2;"></div><br><strong>Defect<br>Report</strong></a></div>
											<div style="opacity:0.3"><a class="uk-button uk-button-spot3 uk-textbutton-light-spot3 uk-text-lead uk-margin-remove uk-text-center" style="width:100%;border-radius:8px;margin:2px!important;font-size:1.2rem;padding:20px!important;line-height:1;" href="<?php echo home_url(); ?>"><div class="uk-text-center uk-icon uk-margin-small-bottom" uk-icon="icon:history;ratio:2;"></div><br><strong>Defect<br>History</strong></a></div>

											<div><a class="uk-button uk-button-spot4 uk-textbutton-light-spot4  uk-text-lead uk-margin-remove uk-text-center" style="width:100%;border-radius:8px;color:#333;margin:2px!important;font-size:1.2rem;padding:20px!important;line-height:1;" href="<?php echo home_url(); ?>/add-service/"><div class="uk-text-center uk-icon uk-margin-small-bottom" uk-icon="icon:plus-circle;ratio:2;"></div><br><strong>Service<br>Record</strong></a></div>
											<div style="opacity:0.3"><a class="uk-button uk-button-spot3 uk-textbutton-light-spot3 uk-text-lead uk-margin-remove uk-text-center" style="width:100%;border-radius:8px;margin:2px!important;font-size:1.2rem;padding:20px!important;line-height:1;" href="<?php echo home_url(); ?>"><div class="uk-text-centeruk-icon uk-margin-small-bottom" uk-icon="icon:history;ratio:2;"></div><br><strong>Service<br>History</strong></a></div>

											<div><a class="uk-button uk-button-spot4 uk-textbutton-light-spot4 uk-text-lead uk-margin-remove uk-text-center" style="width:100%;border-radius:8px;color:#333;margin:2px!important;font-size:1.2rem;padding:20px!important;line-height:1;" href="<?php echo home_url(); ?>/add-vehicle/"><div class="uk-text-center uk-icon uk-margin-small-bottom" uk-icon="icon:plus-circle;ratio:2;"></div><br><strong>Add<br>Vehicle</strong></a></div>
											<div><a class="uk-button uk-button-spot3 uk-textbutton-light-spot3 uk-text-lead uk-margin-remove uk-text-center" style="width:100%;border-radius:8px;margin:2px!important;font-size:1.2rem;padding:20px!important;line-height:1;" href="<?php echo home_url(); ?>/vehicles/"><div class="uk-text-centeruk-icon uk-margin-small-bottom" uk-icon="icon:history;ratio:2;"></div><br><strong>Your<br>Vehicles</strong></a></div>

											
										</div>
									</div>
								<!-- </div> -->

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
  

	</main>
<script>
jQuery(document).ready(function(){ 
	jQuery('.saved').delay(5000).fadeOut('slow');
});
</script>

<?php get_footer(); ?>
