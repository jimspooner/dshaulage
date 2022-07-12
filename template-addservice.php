<?php /* Template Name: Add service Template */ get_header(); ?>

	<main role="main">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							
            <?php include( locate_template( 'components/service/add.php', false, false ) ); ?>

			<?php endwhile; endif; ?>

	</main>

<?php get_footer(); ?>
