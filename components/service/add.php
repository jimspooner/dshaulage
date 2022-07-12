<div class="waiting uk-text-center uk-position-absolute uk-bgc-white" style="z-index:100;height:100%;width:100%;padding-top:55%;display:none;"><img src="<?php echo get_template_directory_uri(); ?>/img/waiting-icon-gif-1.gif" alt="waiting" style="max-width:80px;"><br><span class="uk-text-center">SAVING</span></div>
<section class="walkaround" style="top:0;width:100vw;height:100%;">
<div class="uk-position-top" >
<form id="addservice_form" action="#" method="POST" data-url="<?php echo admin_url('admin-ajax.php'); ?>" enctype="multipart/form-data">
    <div id='addservice'>
        <div id="0" class="first-event uk-text-left" style="display:none;width:100vw;">
            <div class="uk-position-top" style="margin-top:57px;">
                <div class="uk-bgc-lightgrey uk-button uk-text-xxlarge uk-text-center uk-padding uk-width-1-1" style="border-bottom:1px solid #ccc;" data-id="'+value.id+'"><strong class="uk-text-darkgrey">Service Record</strong></div>
                <div class="maxwidth-400">
                <div class="uk-padding uk-padding-remove-bottom uk-text-center uk-margin-top-large uk-text-xlarge">Add</div>

                <div class="uk-padding uk-padding-remove-top">
                <p class="uk-text-center uk-margin-small-bottom">Select your vehicle and upload/photograph your service record below.</p>
                    <div class="uk-padding uk-padding-remove-bottom  uk-padding-remove-top uk-margin-bottom" ><select id="vehicle" class="uk-text-darkgrey uk-text-lead uk-padding-small uk-bgc-spot4" style="border-radius:8px;border:2px solid #333;color:#333;margin:2px!important;font-size:1.4rem;font-weight:700;width:100%;text-align:center;">
                                    <?php $categories = get_terms( 

                                        'category', 
                                        array('parent' => 23, 'hide_empty' => false,)
                                    ); ?>
                                    <?php foreach ($categories as $key => $category) {
                                        echo '<option value="'.$category->term_id.'">'.$category->name.'</option>';
                                    } ?>
                    </select></div>
                    

                </div>
                </div>
            </div>

            <div class="uk-position-bottom uk-child-width-1-1 uk-grid-collapse" uk-grid><div class="js-upload uk-width-1-1 uk-text-center" uk-form-custom>
                        <input type="file" id="post_files" name="post_files" class="files-data" multiple>
                        <button class="uk-button uk-button-default uk-padding uk-text-center uk-bgc-spot2 uk-text-white uk-text-lead" style="width:100%;" type="button" tabindex="-1">Upload a record  <span class="uk-margin-small-right uk-icon" uk-icon="icon:plus-circle; ratio: 1.25"></span></button>
                    </div></div>
            

            
    </div>
</form>
</div>
<script>
jQuery( document ).ready(function() {

    var wheight = jQuery (window).height();
    jQuery('#addservice').height(wheight);
});
    </script>