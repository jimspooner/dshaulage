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
	<div class="uk-to-small" ><div class="uk-position-center uk-text-center uk-padding-small"><p>Your screen is to small to display this content.</p></div></div>
<?php $js_header_background = 'uk-bgc-white'; ?>
		<!-- wrapper -->

			<!-- header -->
	<header class="uk-bgc-spot3 uk-padding-small main-header uk-padding-remove-left uk-padding-remove-right" style="min-height:57px;max-height:57px;overflow:hidden;height:40px;" role="banner" uk-sticky>
		 <div class="uk-position-top" style="width:100%;">
		 	<div class="uk-width-1-1 uk-grid-collapse" style="width:100%;" uk-grid>
			 	<div class="uk-width-auto"><a href="<?php echo home_url(); ?>" style="max-height:57px;background-color:#8DBAD8" class="uk-button uk-bgc-spot3 uk-text-white uk-text-lead uk-padding-small"><span class="uk-icon" uk-icon="icon:home;ratio:1.5;"></span></a></div>
			 	<div class="uk-width-expand">
					 <div style="width:100%;" class="uk-grid-collapse" uk-grid>
						<div class="uk-width-auto"><a href="<?php echo home_url(); ?>/category/inspections/dk17kre/" class="uk-button uk-bgc-spot3 uk-text-white uk-text-lead uk-padding-small" style="width:100%;border-left:1px solid rgba(255,255,255,.3);"><strong><span class="uk-margin-small-right uk-icon" uk-icon="icon:history"></span>DK17 KRE</span></strong></a></div>
						<div class="uk-width-auto"><a href="<?php echo home_url(); ?>/category/inspections/dsh1/" class="uk-button uk-bgc-spot3 uk-text-white uk-text-lead uk-padding-small" style="width:100%;border-left:1px solid rgba(255,255,255,.3);"><strong><span class="uk-margin-small-right uk-icon" uk-icon="icon:history"></span>DSH 1</span></strong></a></div>
					</div>
				</div> 
			</div>
		 </div>
		
</header>
<?php if (isset($_GET['report'])) : if ($_GET['report'] ==  'saved') : ?><div class="uk-bgc-spot2 saved uk-text-center uk-text-white uk-padding-small" style="width:100%;">YOUR REPORT HAS BEEN SAVED</div><?php endif; endif; ?>
			<!-- /header -->

