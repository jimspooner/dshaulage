<?php /* Template Name: Add Inspection Template */ get_header(); ?>

	<main role="main">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							
            <?php include( locate_template( 'components/walkaround/walkaround.php', false, false ) ); ?>

			<?php endwhile; endif; ?>

	</main>

<?php get_footer(); ?>
