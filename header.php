<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
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
	<body <?php body_class(); ?>>
	<div class="uk-to-small" ><div class="uk-position-center uk-text-center uk-padding-small"><p>Your screen is to small to display this content.</p></div></div>
<?php $js_header_background = 'uk-bgc-white'; ?>
		<!-- wrapper -->

			<!-- header -->
	<header class="uk-bgc-spot3 uk-padding-small main-header uk-padding-remove-left uk-padding-remove-right" style="min-height:57px;height:40px;" role="banner" uk-sticky>
		 <div class="uk-position-top">
		 	<div class="uk-grid-collapse uk-child-width-1-2" uk-grid>
			 	<div class="uk-width-expand"><a href="<?php echo home_url(); ?>" style="max-height:57px;" class="uk-button uk-bgc-spot4 uk-text-white uk-text-lead uk-padding-small"><span class="uk-icon" uk-icon="icon:home;ratio:1.5;"></span></a></div>
			 	<div class="uk-width-auto"><a href="<?php echo home_url(); ?>/walkaround-inspection" class="uk-button uk-bgc-spot3 uk-text-white uk-text-lead uk-padding-small" style="width:100%;border-left:1px solid rgba(255,255,255,.3)"><strong><span class="uk-margin-small-right uk-icon" uk-icon="icon:plus-circle"></span>QUIZ</strong></a></div>
				<div class="uk-width-auto"><a href="<?php echo home_url(); ?>/walkaround-history" class="uk-button uk-bgc-spot3 uk-text-white uk-text-lead uk-padding-small" style="width:100%;border-left:1px solid rgba(255,255,255,.3)"><strong><span class="uk-margin-small-right uk-icon" uk-icon="icon:history"></span> HISTORY</a></div>
			 </div>
		 </div>
</header>
			<!-- /header -->

