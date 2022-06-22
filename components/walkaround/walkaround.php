<script>
var data = [
        {
            "id" : 1,
            "q":"Good visibility for driver through cab windows and mirrors. All required mirrors fitted and adjusted correctly.",
            "a":"In-Cab"
        },
        {
            "id" : 2,
            "q":"Driving controls, seat and driver saftey belt adjusted correctly.",
            "a":"In-Cab"
        },
        {
            "id" : 3,
            "q":"Windscreen washer, wiper, demister and horn perating correctly",
            "a":"In-Cab"
        },
        {
            "id" : 4,
            "q":"Tachograph calibrated with correct hours, speed limiter plaque displayed",
            "a":"In-Cab"
        },
        {
            "id" : 5,
            "q":"All instruments, gauges and other warning devices operating corectly(including ABS/EBS in cab warninglights)",
            "a":"In-Cab"
        },
        {
            "id" : 6,
            "q":"No air leaks or pressure drop",
            "a":"In-Cab"
        },
        {
            "id" : 7,
            "q":"Vehicle sitting square and not leaning to one side",
            "a":"External Vehicle"
        },
        {
            "id" : 8,
            "q":"Tax, insurance and transport discs (if applicable) present and valis. Number plates clearly visible.",
            "a":"External Vehicle"
        },
        {
            "id" : 9,
            "q":"Wheels in good condition and secure, tyres undamaged with correct inflation and tread depth.",
            "a":"External Vehicle"
        },
        {
            "id" : 10,
            "q":"All lights, reflector and markings fitted, clean and in good condition.",
            "a":"External Vehicle"
        },
        {
            "id" : 11,
            "q":"exhaust secure with no excess noise or smoke",
            "a":"External Vehicle"
        },
        {
            "id" : 12,
            "q":"Air and electrical suzies and conectors fitted correctly (inc ABS/EBS cable).",
            "a":"External Vehicle"
        },
        {
            "id" : 13,
            "q":"Vehcile access, steps, catwalk or drawbar coupling in good condition.",
            "a":"External Vehicle"
        },
        {
            "id" : 14,
            "q":"Vehicle body/wings/guards, side and rear/curtains and straps/doors/tail lift in good condition.",
            "a":"External Vehicle"
        },
        {
            "id" : 15,
            "q":"Fith wheel located and locked correctly, landing legs and handle in correct position",
            "a":"External Vehicle"
        },
        {
            "id" : 16,
            "q":"Trainler park brake operating correctly.",
            "a":"External Vehicle"
        },
        {
            "id" : 17,
            "q":"Air suspension correctly set.",
            "a":"External Vehicle"
        },
        {
            "id" : 18,
            "q":"Engine Oil, water, windscxreen washer resiviour and feul levels checked and no leaks.",
            "a":"External Vehicle"
        },
        {
            "id" : 19,
            "q":"Steering and brakes operating correctly.",
            "a":"Prior to leaving"
        },
        {
            "id" : 20,
            "q":"Loads secured and weight distributed correctly.",
            "a":"Prior to leaving"
        },
        {
            "id" : 21,
            "q":"Tachograph, speedometer and speed limiter operating correctly.",
            "a":"On the road"
        },
        {
            "id" :22,
            "q":"ABS/EBS warning lights off.",
            "a":"On the road"
        }
]
</script>
<div class="waiting uk-text-center uk-position-absolute uk-bgc-white" style="z-index:100;height:100%;width:100%;padding-top:55%;display:none;"><img src="<?php echo get_template_directory_uri(); ?>/img/waiting-icon-gif-1.gif" alt="waiting" style="max-width:80px;"><br><span class="uk-text-center">SAVING</span></div>
<section class="walkaround" style="top:0;width:100vw;height:100%;">
<div class="uk-position-top" >
<form id="walkaround_form" action="#" method="POST" data-url="<?php echo admin_url('admin-ajax.php'); ?>" enctype="multipart/form-data">
<div id='defectsq'>
<script>
jQuery(document).ready(function(){
var wheight = jQuery (window).height();
var qid = 1;
var defects = "";
var answer = "";
var qa = "";
jQuery('#defectsq').height(wheight);
jQuery.each(data, function (key, value) {
    quid = value.id;
    defects += '<div id="'+value.id+'" class="uk-text-left" style="display:none;width:100vw;">';
    defects += '<div class="uk-position-top" style="margin-top:57px;">';
    defects += '<div class="uk-text-center uk-text-white" style="width:100%;background-color:#aaa;padding:5px 0;"><?php echo date('d M Y'); ?></div>'
    defects += '<div class="uk-bgc-lightgrey uk-button uk-text-xxlarge uk-text-center uk-padding uk-width-1-1" style="border-bottom:1px solid #ccc;" data-id="'+value.id+'"><strong class="uk-text-darkgrey">'+value.a+'</strong></div>';
    defects += '<div class="uk-padding uk-text-center uk-margin-top-large uk-text-xlarge">'+value.q+'</div>';
    defects += '</div>';
    defects += '<div class="uk-position-bottom uk-child-width-1-2 uk-grid-collapse" uk-grid>';
    defects += '<div class="nodefect uk-padding uk-text-center uk-button uk-bgc-spot2 uk-text-white" id="nodefect-'+value.id+'" data-q="'+value.q+'" data-a="No Defects">No Defects <span uk-icon="icon: check; ratio: 2"></span></div>';
    defects += '<div class="defect uk-padding uk-text-center uk-button uk-bgc-spot1 uk-text-white" id="defect-'+value.id+'" data-q="'+value.q+'"  data-a="Defects">Defects <span uk-icon="icon: close; ratio: 2"></span></div>';
    defects += '</div></div>';
});

var numberOfElements = data.length;
jQuery('.last-event').attr('id', numberOfElements+1);
jQuery('#defectsq').append(defects);
jQuery('#'+qid).show();
jQuery('.nodefect').on("click", function() {
    qa = jQuery(this).attr('data-a');
    dq = jQuery(this).attr('data-q');
    answer += dq+'| '+qa+';';
    jQuery('#'+qid).hide();
    qid = qid + 1;
    jQuery('#'+qid).show();
    console.log(answer);
});
jQuery('.defect').on("click", function() {
    qa = jQuery(this).attr('data-a');
    dq = jQuery(this).attr('data-q');
    answer += dq+'| '+qa+';';
    jQuery('#'+qid).hide();
    qid = qid + 1;
    jQuery('#'+qid).show();
    console.log(answer);
});

jQuery("#walkaround_form").on("submit", function (event) {
            event.preventDefault();
            jQuery(".waiting").show();

            var form= jQuery(this);
            var ajaxurl = form.data("url");
            var detail_info = {
                post_report: answer,
                post_vehicle: <?php echo $_GET['id']; ?>,
                post_reg: '<?php echo $_GET['reg']; ?>',
                post_month: '<?php echo date('F'); ?>',
                post_year: '<?php echo date('Y'); ?>',
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
