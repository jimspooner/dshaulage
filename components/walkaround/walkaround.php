
<div class="waiting uk-text-center uk-position-absolute uk-bgc-white" style="z-index:100;height:100%;width:100%;padding-top:55%;display:none;"><img src="<?php echo get_template_directory_uri(); ?>/img/waiting-icon-gif-1.gif" alt="waiting" style="max-width:80px;"><br><span class="uk-text-center">SAVING</span></div>
<section class="walkaround" style="top:0;width:100vw;height:100%;">
<div class="uk-position-top" >
<form id="walkaround_form" action="#" method="POST" data-url="<?php echo admin_url('admin-ajax.php'); ?>" enctype="multipart/form-data">
<div id='defectsq'>
    <div id="0" class="first-event uk-text-left" style="display:none;width:100vw;">
        <div class="uk-position-top" style="margin-top:57px;">
            <div class="uk-bgc-lightgrey uk-button uk-text-xxlarge uk-text-center uk-padding uk-width-1-1" style="border-bottom:1px solid #ccc;" data-id="'+value.id+'"><strong class="uk-text-darkgrey">Details</strong></div>
            <div class="maxwidth-400">
            <div class="uk-padding uk-padding-remove-bottom uk-text-center uk-margin-top-large uk-text-xlarge">Mileage & Vehicle</div>
            <p class="uk-text-center">Select your vehicle from the list below.</p>
            <div class="uk-padding uk-padding-remove-bottom uk-margin-bottom" ><select id="vehicle" class="uk-text-darkgrey uk-text-lead uk-padding-small uk-bgc-spot4" style="border-radius:8px;border:2px solid #333;color:#333;margin:2px!important;font-size:1.4rem;font-weight:700;width:100%;text-align:center;">
                            <?php $categories = get_terms( 

                                'category', 
                                array('parent' => 2, 'hide_empty' => false,)
                            ); ?>
                            <?php foreach ($categories as $key => $category) {
                                echo '<option value="'.$category->term_id.'">'.$category->name.'</option>';
                            } ?>
            </select></div>
            <div class="uk-padding uk-padding-remove-top"><input type="number" class="uk-input" style="padding:1.4rem!important;font-size:1.4rem!important;" name="post_mileage" id="post_mileage" value="" placeholder="Type in your mileage here" style="font-size:1.5rem;width:100%;padding:10px;"></input></div>
            </div>
        </div>
        <div class="uk-position-bottom uk-child-width-1-1 uk-grid-collapse" uk-grid>
            <div class="nodefect uk-padding uk-text-center uk-button uk-bgc-spot2 uk-text-white" id="mileage" data-q="0" data-a="Mileage" style="font-size:1.2rem;">Next </div>
        </div>
</div>

    <div id="" class="last-event uk-text-left" style="display:none;">
        <div class="uk-position-top" style="margin-top:57px;">
            <div class="uk-bgc-lightgrey uk-button uk-text-xxlarge uk-text-center uk-padding uk-width-1-1" style="border-bottom:1px solid #ccc;" data-id="'+value.id+'"><strong class="uk-text-darkgrey">Details</strong></div>
            <div class="maxwidth-400">
            <div class="uk-padding uk-text-center uk-margin-top-large uk-text-xlarge">Defects details</div>
            <div class="uk-padding"><textarea type="textarea" class="uk-textarea" col="20" name="post_description" id="post_description" value="" style="font-size:1.5rem;width:100%;height:250px;padding:10px;"></textarea></div>
                        </div>
        </div>
        <button type="submit" class="uk-padding uk-text-center uk-button uk-bgc-spot2 uk-text-white uk-position-bottom-center uk-text-lead" style="width:100%;">Save <span class="uk-margin-small-right uk-icon" uk-icon="icon:plus-circle; ratio: 1.25"></span></button>
    </div>

</div>
</form>
</div>
