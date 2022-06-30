<!doctype html>
<html style="height:100vh;width:100%;position:absolute;" <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body style="width:100%;" <?php body_class(); ?>>

<?php $js_header_background = 'uk-bgc-white'; ?>
		<!-- wrapper -->

			<!-- header -->
	<header class="uk-bgc-spot3 uk-padding-small main-header uk-padding-remove-left uk-padding-remove-right" style="min-height:57px;max-height:57px;overflow:hidden;height:40px;" role="banner" uk-sticky>
		 <div class="uk-position-top" style="width:100%;">
		 	<div class="uk-width-1-1 uk-grid-collapse" style="width:100%;" uk-grid>
			 	<div class="uk-width-auto"><a href="<?php echo home_url(); ?>" style="max-height:57px;background-color:#8DBAD8" class="uk-button uk-bgc-spot3 uk-text-white uk-text-lead uk-padding-small"><span class="uk-icon" uk-icon="icon:home;ratio:1.5;"></span></a></div>
			 	<div class="uk-width-expand">

				 <div style="position:absolute;right:60px;color:#fff;top:17px;">MENU </div><button class="" id="menuToggle" type="button" uk-toggle="target: #offcanvas-flip"><span></span><span></span><span></span></button>

						<div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
							<div class="uk-offcanvas-bar">
								<div style="margin-left:-6px;"><img src="https://davidshaulage.co.uk/wp-content/uploads/2022/06/dsh-icon-100.png" alt="ds haulage logo" style="max-height:80px;"></div>
								<button class="uk-offcanvas-close" type="button" uk-close></button>
								<div class="uk-width-1-2@s uk-width-2-5@m uk-margin-small-top">
									<ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
										<li class="uk-active"><a href="<?php echo home_url(); ?>"><strong style="font-weight:600;">DASHBOARD</strong></a></li>
										<li class="uk-nav-divider"></li>
										<li class="uk-parent uk-open"><a href="#">DAILY INSPECTIONS</a>
											<ul class="uk-nav-sub uk-open" >
											<li><a href="#" style="color:white;">Add inspection</a>
													<ul>
														<li><a href="<?php echo home_url(); ?>/walkaround-inspection/?id=3&reg=DK17KRE"><span class="uk-margin-small-right uk-icon" uk-icon="icon:future"></span><strong>DK17 KRE</strong></a></li>
														<li class="uk-nav-divider"></li>
														<li><a  href="<?php echo home_url(); ?>/walkaround-inspection/?id=4&reg=DSH1"><span class="uk-margin-small-right uk-icon" uk-icon="icon:future"></span><strong>DSH 1</strong></a></li>
													</ul>
												</li>
												<li class="uk-nav-divider"></li>
												<li><a href="#" style="color:white;">History</a>
													<ul>
														<li><a href="<?php echo home_url(); ?>/category/inspections/dk17kre/" ><strong><span class="uk-margin-small-right uk-icon" uk-icon="icon:history"></span>DK17 KRE</strong></a></li>
														<li class="uk-nav-divider"></li>
														<li><a href="<?php echo home_url(); ?>/category/inspections/dsh1/" ><strong><span class="uk-margin-small-right uk-icon" uk-icon="icon:history"></span>DSH</strong></a></li>
													</ul>
	</li>
											</ul>
										</li>
										<li class="uk-nav-divider"></li>
										<li class="uk-parent">
											<a href="#">SERVICES</a>
											<ul class="uk-nav-sub">
												<li><a href="<?php echo home_url(); ?>" ><strong><span class="uk-margin-small-right uk-icon" uk-icon="icon:cog"></span>DK17 KRE</strong></a></li>
												<li><a href="<?php echo home_url(); ?>" ><strong><span class="uk-margin-small-right uk-icon" uk-icon="icon:cog"></span>DSH</strong></a></li>
											</ul>
										</li>
									</ul>
								

							</div>
						</div>

				</div> 
			</div>
		 </div>
		
</header>
<?php if (isset($_GET['report'])) : if ($_GET['report'] ==  'saved') : ?><div class="uk-bgc-spot2 saved uk-text-center uk-text-white uk-padding-small" style="width:100%;">YOUR REPORT HAS BEEN SAVED</div><?php endif; endif; ?>
			<!-- /header -->

