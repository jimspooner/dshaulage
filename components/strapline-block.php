<!-- GET GALLERY ARRAY -->
<?php $js_strapline = get_option('strapline');  ?>
<!-- IF ENABLED -->
<?php if ($gallery_images) : ?>
<!-- BACKGROUND COLOR -->
<?php $js_strapline_background = 'uk-bgc-spot1'; ?>
<!-- IF ENABLED -->
<?php if ($js_strapline) : ?>
<!-- START MAIN STRAPLINE SECTION -->
<section class="<?php echo $js_strapline_background; ?> uk-padding uk-text-center uk-width-1-1">
	<div class="wrapper">
		<h2 class="text-white"><strong><?php echo $js_strapline; ?></strong></h2>
	</div>
</section>
<!-- END MAIN STRAPLINE SECTION -->
<?php endif; ?>