<!-- strapline block -->
<section class="uk-bgc-white uk-padding-large uk-padding-remove-top uk-padding-remove-right uk-padding-remove-left uk-text-center uk-width-1-1 uk-position-relative uk-text-center <?php if ($js_background_image) :?>uk-background-fixed uk-background-center-center<?php endif; ?>" <?php if ($js_background_image) :?>style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/<?php echo $js_background_image; ?>');background-size:cover;"<?php endif; ?>>
    <div class="uk-bgc-spot1 uk-position-top uk-width-1-1" style="height:50%;"></div>
	<div class="wrapper wrapper-small">
            <?php js_ukcard(); ?>
	</div>
</section>