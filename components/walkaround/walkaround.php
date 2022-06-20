<script>
var data = [
        {
            "id" : 1,
            "q":"has a spider got 10 legs",
            "a":""
        },
        {
            "id" : 2,
            "q":"has a snooker table got 6 pockets",
            "a":""
        },
        {
            "id" : 3,
            "q":"has a snooker table got 6 pockets",
            "a":""
        },
        {
            "id" : 4,
            "q":"has a snooker table got 6 pockets",
            "a":""
        }
]
</script>

<section class="walkaround uk-position-relative">
<div class="uk-position-absolute uk-position-top" style="top:0;width:100vw;height:93.25vh;">
<form id="walkaround_form" action="#" method="POST" data-url="<?php echo admin_url('admin-ajax.php'); ?>" enctype="multipart/form-data">
<div id='defectsq'>
<script>
jQuery(document).ready(function(){

var qid = 1;
var defects = "";
var answer = "";
var qa = "";

jQuery.each(data, function (key, value) {
    quid = value.id;
    defects += '<div id="'+value.id+'" class="uk-text-left" style="display:none;">';
    defects += '<div class="uk-position-top">';
    defects += '<div class="uk-bgc-lightgrey uk-button uk-text-xxlarge uk-text-center uk-padding uk-width-1-1" style="border-bottom:1px solid #ccc;" data-id="'+value.id+'"><strong class="uk-text-darkgrey">Q'+value.id+'</strong></div>';
    defects += '<div class="uk-padding uk-text-center uk-margin-top-large uk-text-xlarge">'+value.q+'</div>';
    defects += '</div>';
    defects += '<div class="uk-position-bottom uk-child-width-1-2 uk-grid-collapse" uk-grid>';
    defects += '<div class="nodefect uk-padding uk-text-center uk-button uk-bgc-spot2 uk-text-white" id="nodefect-'+value.id+'" data-a="No Defects">Correct <span uk-icon="icon: check; ratio: 2"></span></div>';
    defects += '<div class="defect uk-padding uk-text-center uk-button uk-bgc-spot1 uk-text-white" id="defect-'+value.id+'" data-a="Defects">Incorrect <span uk-icon="icon: close; ratio: 2"></span></div>';
    defects += '</div></div>';
});

var numberOfElements = data.length;
jQuery('.last-event').attr('id', numberOfElements+1);
jQuery('#defectsq').append(defects);
jQuery('#'+qid).show();
jQuery('.nodefect').on("click", function() {
    qa = jQuery(this).attr('data-a');
    answer += 'q'+qid+':'+qa+',';
    jQuery('#'+qid).hide();
    qid = qid + 1;
    jQuery('#'+qid).show();
    console.log(answer);
});
jQuery('.defect').on("click", function() {
    qa = jQuery(this).attr('data-a');
    answer += 'q'+qid+':'+qa+',';
    jQuery('#'+qid).hide();
    qid = qid + 1;
    jQuery('#'+qid).show();
    console.log(answer);
});

jQuery("#walkaround_form").on("submit", function (event) {
            event.preventDefault();

            var form= jQuery(this);
            var ajaxurl = form.data("url");
            var detail_info = {
                post_report: answer,
                post_description: form.find("#post_description").val()
            }

            jQuery.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    post_details : detail_info,
                    action: 'save_post_details_form' // this is going to be used inside wordpress functions.php
                },
                error: function(error) {
                    alert("Insert Failed" + error);
                },
                success: function(response) {
                    window.location.href = "/?report=saved";
                }
            });
});

});
</script>
<div id="" class="last-event uk-text-left" style="display:none;">
    <div class="uk-position-top">
        <div class="uk-bgc-lightgrey uk-button uk-text-xxlarge uk-text-center uk-padding uk-width-1-1" style="border-bottom:1px solid #ccc;" data-id="'+value.id+'"><strong class="uk-text-darkgrey">Details</strong></div>
        <div class="uk-padding uk-text-center uk-margin-top-large uk-text-xlarge">Defects descriptions</div>
        <div class="uk-padding"><textarea type="textarea" class="uk-textarea" col="20" name="post_description" id="post_description" value="" style="width:100%;height:50vh;"></textarea></div>
    </div>
    <button type="submit" class="uk-padding uk-text-center uk-button uk-bgc-spot2 uk-text-white uk-position-bottom-center uk-text-lead" style="width:100%;">Save <span class="uk-margin-small-right uk-icon" uk-icon="icon:plus-circle; ratio: 1.25"></span></button>
</div>

</div>
</form>
</div>
