<?php /* Template Name: SPA Template */ get_header('spa');  ?>

<main role="main">

<section class="dashboard">
    <?php include( locate_template( 'components/dashboard/index.php', false, false ) ); ?>
</section>

<section class="inspections" style="display:none">
    <?php //include( locate_template( 'components/inspections/index.php', false, false ) ); ?>
</section>

<section class="vehicle" style="display:none">
    <?php //include( locate_template( 'components/vehicle/index.php', false, false ) ); ?>
</section>

<section class="service" style="display:none">
    <?php //include( locate_template( 'components/service/index.php', false, false ) ); ?>
</section>

<section class="defects" style="display:none">
    <?php //include( locate_template( 'components/defects/index.php', false, false ) ); ?>
</section>

</main>

<?php get_footer(); ?>