<?php /* Template Name: HP basic Template */ get_header(); ?>

	<main role="main">

    <section>
			<div class="wrapper uk-padding-large uk-padding-remove-left uk-padding-remove-right" >
			<div class="uk-flex" uk-grid>
					<div class="uk-width-1-1" style="width:100%;">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="uk-card uk-card-default">
									<div class="uk-card-header"><h2 class="uk-margin-remove-top"><span class="uk-margin-small-right uk-icon" uk-icon="future"></span> <strong>Inspections</strong></h2></div>
									<div class="uk-card-body"><p>Click below to start a Daily Inspection for the vehicle registration below.</p>
										<a class="uk-button uk-button-spot4 uk-text-darkgrey uk-text-lead uk-padding-small" style="border-radius:8px;border:2px solid #333;color:#333" href="<?php echo home_url(); ?>/walkaround-inspection/?id=3&reg=DK17KRE"><strong>DK17 KRE</strong></a>
										<a class="uk-button uk-button-spot4 uk-text-darkgrey uk-text-lead uk-padding-small" style="border-radius:8px;border:2px solid #333;color:#333" href="<?php echo home_url(); ?>/walkaround-inspection/?id=4&reg=DSH1"><strong>DSH 1</strong></a>
									</div>
								</div>

								<div class="uk-card uk-card-default uk-margin-small-top">
									<div class="uk-card-header"><h2 class="uk-margin-remove-top"><span class="uk-margin-small-right uk-icon" uk-icon="cog"></span> <strong>Services</strong></h2></div>
									<div class="uk-card-body"><p>Your Next services</p>


									</div>
								</div>
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
