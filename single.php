<?php get_header(); ?>
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
            "id" : 22,
            "q":"ABS/EBS warning lights off.",
            "a":"On the road"
        }
]
console.log(data)
</script>
	<main role="main">
	<!-- section -->
	<section>
			<div class="wrapper uk-padding-large uk-padding-remove-left uk-padding-remove-right" style="margin-top:2vh;">
				<div class="uk-flex" uk-grid>
					<div class="" style="width:100%;">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


			<!-- post title -->
			<h2 style="line-height:1.2;">Daily Inspection<br><span style="font-weight:400;color:"><?php the_title(); ?></span></h2>
			<!-- /post title -->
			<?php $report = get_post_meta(get_the_ID(), 'walkaround_report'); $report_array = explode(';', $report[0]); //print_r($report_array); ?>
			<!-- post details -->
			<?php //echo $JSON_report; ?>
				<div class="uk-grid-small uk-grid-match" style="margin-left:0;" uk-grid>
			<?php foreach ($report_array as $value) { 
				$report_value = explode('|', $value); if ($report_value[0]) : ?>
					<div class="uk-width-2-3" style="border-bottom:1px solid #ecebeb;padding:.6em .3em;margin-top:0;"><span class="uk-text-meta"><?php echo $report_value[0]; ?></span></div>
					<div class="uk-width-1-3 uk-flex uk-flex-middle uk-flex-center uk-bgc-spot2 uk-text-white <?php if ($report_value[1] === ' Defects') {echo 'uk-bgc-spot1';} ?>" style="border-bottom:1px solid #ecebeb;padding:.6em .3em;border-left:1px solid #ecebeb;margin-top:0;"><?php echo $report_value[1]; ?></div>
			<?php endif; } ?>
				</div>
			<!-- /post details -->
			<div id="defectsq" class="results"></div>

			<?php the_content(); // Dynamic Content ?>

			

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
</div></div></div>
	</section>
	<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php //get_footer(); ?>
