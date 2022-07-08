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
	<body style="width:100%;">

<?php $js_header_background = 'uk-bgc-white'; ?>
		<!-- wrapper -->

			<!-- header -->
	<header class="uk-bgc-spot3 uk-padding-small main-header uk-padding-remove-left uk-padding-remove-right" role="banner" uk-sticky>
		 <div class="uk-position-top" style="width:100%;">
		 	<div class="uk-width-1-1 uk-grid-collapse" style="width:100%;" uk-grid>
			 	<div class="uk-width-auto"><a href="<?php echo home_url(); ?>" style="line-height:1;background-color:#8DBAD8" class="uk-button uk-bgc-spot3 uk-text-white uk-padding-small"><span class="uk-icon" uk-icon="icon:home;ratio:1.5;"></span></a></div>
			 	<div class="uk-width-expand">
				<div style="top:20px;left:80px" class="uk-text-white uk-position-absolute"><?php if ( is_user_logged_in() ) { $current_user = wp_get_current_user(); echo 'Hi, '.$current_user->user_firstname; } ?></div>
				 <div style="position:absolute;right:60px;color:#fff;top:20px;">MENU </div><button class="" id="menuToggle" type="button" uk-toggle="target: #offcanvas-flip"><span></span><span></span><span></span></button>

						<div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true;">
							<div class="uk-offcanvas-bar">

								<button class="uk-offcanvas-close" type="button" uk-close></button>
								<div class="uk-width-1-1 uk-margin-small-top">
									<ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
										<li class="uk-active"><a href="<?php echo home_url(); ?>"><strong style="font-weight:600;">DASHBOARD</strong></a></li>
										<li class="uk-nav-divider"></li>
										<li class="uk-parent uk-open"><a href="#">DAILY INSPECTIONS</a>
											<ul class="uk-nav-sub uk-open" >
											<li><a href="<?php echo home_url(); ?>/walkaround-inspection/" style="color:rgba(255,255,255,.5);"><span class="uk-margin-small-right uk-icon" uk-icon="plus-circle"></span> Add Daily</a></li>
												<li class="uk-nav-divider"></li>
												<li><a href="<?php echo home_url(); ?>/category/inspections/" style="color:rgba(255,255,255,.5);"><span class="uk-margin-small-right uk-icon" uk-icon="icon:history"></span> History</a></li>
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
										<li class="uk-nav-divider"></li>
										<li class="uk-parent">
											<a href="#">VEHICLES</a>
											<ul class="uk-nav-sub">
												<li><a href="<?php echo home_url(); ?>" ><strong><span class="uk-margin-small-right uk-icon" uk-icon="icon:cog"></span>DK17 KRE</strong></a></li>
												<li><a href="<?php echo home_url(); ?>" ><strong><span class="uk-margin-small-right uk-icon" uk-icon="icon:cog"></span>DSH</strong></a></li>
											</ul>
										</li>
										<li class="uk-nav-divider"></li>
										<li class="uk-parent">
											<a href="#">DEFECTS</a>
											<ul class="uk-nav-sub">
												<li><a href="<?php echo home_url(); ?>" ><strong><span class="uk-margin-small-right uk-icon" uk-icon="icon:cog"></span>DK17 KRE</strong></a></li>
												<li><a href="<?php echo home_url(); ?>" ><strong><span class="uk-margin-small-right uk-icon" uk-icon="icon:cog"></span>DSH</strong></a></li>
											</ul>
										</li>
										<li><a href="<?php echo home_url(); ?>/wp-login.php?action=logout">LOG OUT</a><li>
									</ul>
								

							</div>
						</div>

				</div> 
			</div>
		 </div>
		
</header>
<?php if (isset($_GET['report'])) : if ($_GET['report'] ==  'saved') : ?><div class="uk-bgc-spot2 saved uk-text-center uk-text-white uk-padding-small" style="width:100%;">YOUR REPORT HAS BEEN SAVED</div><?php endif; endif; ?>
<?php if (isset($_GET['vehicle'])) : if ($_GET['report'] ==  'saved') : ?><div class="uk-bgc-spot2 saved uk-text-center uk-text-white uk-padding-small" style="width:100%;">YOUR VEHICLE HAS BEEN ADDED</div><?php endif; endif; ?>
			<!-- /header -->

