<?php /* Template Name: Add defect Template */ get_header(); ?>

	<main role="main">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							
            <?php include( locate_template( 'components/defects/add.php', false, false ) ); ?>

			<?php endwhile; endif; ?>

	</main>

<?php get_footer(); ?>
