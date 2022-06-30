(function ($, root, undefined) {
	
	$(function () {

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
		
var wheight = jQuery (window).height();
var qid = 1;
var defects = "";
var answer = "";
var qa = "";
var today = new Date();
var date = today.getDate()+'-'+(today.getMonth())+'-'+today.getFullYear();
$('#defectsq').height(wheight);
$.each(data, function (key, value) {
    quid = value.id;
    defects += '<div id="'+value.id+'" class="uk-text-left" style="display:none;width:100vw;">';
    defects += '<div class="uk-position-top" style="margin-top:57px;">';
    defects += '<div class="uk-text-center uk-text-white" style="width:100%;background-color:#aaa;padding:5px 0;">'+date+'</div>'
    defects += '<div class="uk-bgc-lightgrey uk-button uk-text-xxlarge uk-text-center uk-padding uk-width-1-1" style="border-bottom:1px solid #ccc;" data-id="'+value.id+'"><strong class="uk-text-darkgrey">'+value.a+'</strong></div>';
    defects += '<div class="uk-padding uk-text-center uk-margin-top-large uk-text-xlarge">'+value.q+'</div>';
    defects += '</div>';
    defects += '<div class="uk-position-bottom uk-child-width-1-2 uk-grid-collapse" uk-grid>';
    defects += '<div class="nodefect uk-padding uk-text-center uk-button uk-bgc-spot2 uk-text-white" id="nodefect-'+value.id+'" data-q="'+value.q+'" data-a="No Defects">No Defects <span uk-icon="icon: check; ratio: 2"></span></div>';
    defects += '<div class="defect uk-padding uk-text-center uk-button uk-bgc-spot1 uk-text-white" id="defect-'+value.id+'" data-q="'+value.q+'"  data-a="Defects">Defects <span uk-icon="icon: close; ratio: 2"></span></div>';
    defects += '</div></div>';
});

var numberOfElements = data.length;
$('.last-event').attr('id', numberOfElements+1);
$('#defectsq').append(defects);
$('#'+qid).show();
$('.nodefect').on("click", function() {
    qa = $(this).attr('data-a');
    dq = $(this).attr('data-q');
    answer += dq+'| '+qa+';';
    $('#'+qid).hide();
    qid = qid + 1;
    $('#'+qid).show();
    //console.log(answer);
});
$('.defect').on("click", function() {
    qa = $(this).attr('data-a');
    dq = $(this).attr('data-q');
    answer += dq+'| '+qa+';';  
    $('#'+qid).hide();
    qid = qid + 1;
    $('#'+qid).show();
    //console.log(answer);
});

$("#walkaround_form").on("submit", function (event) {
            event.preventDefault();
            $(".waiting").show();
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const catID = urlParams.get('id');
            const reg = urlParams.get('reg');
            var form= $(this);
            var ajaxurl = my_ajax_object.ajax_url;
            var detail_info = {
                post_report: answer,
                post_vehicle: catID,
                post_reg: reg,
                post_month: today.toLocaleString('default', { month: 'long' }),
                post_year: today.getFullYear(),
                post_description: form.find("#post_description").val()
            }

            $.ajax({
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
	
})(jQuery, this);