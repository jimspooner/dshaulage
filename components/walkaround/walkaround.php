<
<div class="waiting uk-text-center uk-position-absolute uk-bgc-white" style="z-index:100;height:100%;width:100%;padding-top:55%;display:none;"><img src="<?php echo get_template_directory_uri(); ?>/img/waiting-icon-gif-1.gif" alt="waiting" style="max-width:80px;"><br><span class="uk-text-center">SAVING</span></div>
<section class="walkaround" style="top:0;width:100vw;height:100%;">
<div class="uk-position-top" >
<form id="walkaround_form" action="#" method="POST" data-url="<?php echo admin_url('admin-ajax.php'); ?>" enctype="multipart/form-data">
<div id='defectsq'>

<div id="" class="last-event uk-text-left" style="display:none;">
    <div class="uk-position-top" style="margin-top:57px;">
        <div class="uk-bgc-lightgrey uk-button uk-text-xxlarge uk-text-center uk-padding uk-width-1-1" style="border-bottom:1px solid #ccc;" data-id="'+value.id+'"><strong class="uk-text-darkgrey">Details</strong></div>
        <div class="uk-padding uk-text-center uk-margin-top-large uk-text-xlarge">Defects details</div>
        <div class="uk-padding"><textarea type="textarea" class="uk-textarea" col="20" name="post_description" id="post_description" value="" style="font-size:1.5rem;width:100%;height:250px;padding:10px;"></textarea></div>
    </div>
    <button type="submit" class="uk-padding uk-text-center uk-button uk-bgc-spot2 uk-text-white uk-position-bottom-center uk-text-lead" style="width:100%;">Save <span class="uk-margin-small-right uk-icon" uk-icon="icon:plus-circle; ratio: 1.25"></span></button>
</div>

</div>
</form>
</div>
