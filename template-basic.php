<?php /* Template Name: Basic Template */ get_header(); ?>

	<main role="main">
    
            <?php include( locate_template( 'components/tophero.php', false, false ) ); ?>
        
            <?php include( locate_template( 'components/main.php', false, false ) ); ?>
        
            <?php include( locate_template( 'components/people.php', false, false ) ); ?>
      
            <?php include( locate_template( 'components/slider-gallery.php', false, false ) ); ?>

            <?php include( locate_template( 'components/section-1blockfull-gallery.php', false, false ) ); ?>

            <?php include( locate_template( 'components/section-2blockfull-gallery.php', false, false ) ); ?>

            <?php include( locate_template( 'components/section-3blockfull-gallery.php', false, false ) ); ?>

	</main>

<?php //get_footer(); ?>
