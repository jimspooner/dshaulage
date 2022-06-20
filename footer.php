			<!-- footer -->
			<!-- LOGO CAROUSEL -->
		<footer class="footer" role="contentinfo">

			<?php $js_footer_background = 'uk-bgc-spot2'; ?>
				<!-- FOOTER SECTION -->
				<section class="<?php echo $js_footer_background; ?> uk-padding-large uk-padding-remove-right uk-padding-remove-left">
					<div class="wrapper">
						<div class="uk-grid-small" uk-grid>
							<!-- FOOTER NAV LEFT -->
							<div class="uk-width-1-1 uk-width-expand@s uk-text-center uk-text-left@s">
								<nav><?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'nav',  ) ); ?></nav>
								<hr class="uk-divider-small">
								<span class="tel"><?php echo get_option('business_tel'); ?></span>
							</div>
							<!-- FOOTER COMPANY DETAILS RIGHT -->
							<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
							$image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
							<div class="uk-width-1-1 uk-width-auto@s uk-text-center">
								<div class="uk-width-1-1 uk-text-center"><?php if ($image[0]) : ?><img src="<?php echo $image[0]; ?>" alt="<?php echo get_option('business_name'); ?> Logo" class="logo" style="max-width:180px;-webkit-filter:brightness(0) invert(1); filter: brightness(0) invert(1);"><?php endif; ?></div>
								<div class="uk-width-1-1 uk-text-center uk-margin-top"><span class="uk-text-meta text-white"><?php echo get_option('business_address'); ?></span></div>
							</div>
							<div class="uk-width-1-1">
							<!-- FOOTER COPYRIGHT AND WEBSITE BUILD -->
							<p class="copyright uk-text-meta text-white uk-text-center uk-text-left@s">
							&copy; <?php echo date('Y'); ?> Copyright <?php echo get_option('business_name'); ?>. <?php _e('Site Designed and built by ', 'html5blank'); ?>
							<a href="//finedesign.co.uk" title="Fine Design"><?php echo get_option('business_name'); ?></a>
						</p>
							</div>
						</div>
					</div> 
				</section>
		</footer>
			<!-- /footer -->


		<?php wp_footer(); ?>

		<!-- analytics -->

		<script>
			jQuery( document ).ready(function() {
				
				// WOOCOMMERCE THMNAIL EXPAND INTO CARD MEDIA HEADER
				var dh_thumb_width = jQuery( ".js-product--thumb" ).width();
				var dh_thumb_height = jQuery( ".js-product--thumb" ).height();
				jQuery('.js-product--thumb img').attr('width', dh_thumb_width);
				jQuery('.js-product--thumb img').attr('height', 'auto');
				jQuery(window).on('resize', function(){
					var dh_thumb_width = jQuery( ".js-product--thumb" ).width();
					jQuery('.js-product--thumb img').attr('width', dh_thumb_width);
					jQuery('.js-product--thumb img').attr('height', 'auto');
				});

				// SEARCH FORM MODAL 
				jQuery(".search-button").click(function(){
					UIkit.modal('#modal-center--search').show();
					jQuery( ".search-input" ).focus();
				});
				
				
			});
		</script>
		</div>
	</body>
</html>
