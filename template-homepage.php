<?php /* Template Name: Home Page Template */ get_header(); ?>
<!-- wrapper -->

<main role="main">
<!-- top section -->
<section class="background-navy uk-position-relative section-top uk-width-1-1">
<div class="uk-position-center-right background-top--hero"></div>
	<div class="wrapper  uk-margin-large-top">
		<div class="uk-child-width-1-1 uk-child-width-1-2@m uk-flex" uk-grid>
			<div class="uk-flex-last">
				<div class="image-hero uk-cover-container uk-margin-large-bottom uk-position-relative">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" uk-cover>
				</div>
			</div>
			<div style="z-index:1;">
				<h1 class="uk-text-white"><span class="uk-text-lead uk-text-white" style="font-weight:600;">Suppliers of:</span><br>Graded Limestone<br> Aggregates and<br> Recycled Materials</h1>

		
				<a href="<?php home_url(); ?>/about-us/" class="uk-button-spot3"><strong>ENQUIRE HERE</strong></a>
			</div>
		</div>
	</div>
</section>
<!-- Red Bar -->
<section class="background-red uk-padding uk-text-center uk-width-1-1">
	<div class="wrapper">
		<h2 class="text-white"><strong><?php echo get_field('strapline'); ?></strong></h2>
	</div>
</section>
<!-- Blue main section with video -->
<section class="uk-bgc-spot1 uk-width-1-1 uk-padding-large uk-text-center background-field">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<div class="wrapper">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="uk-text-white"><strong><?php the_title(); ?></strong></h1>
					<div class="uk-text-white uk-width-1-1 uk-width-2-3@m uk-width-2-3@l uk-margin-auto text text-large uk-margin-bottom"><?php the_content(); ?>
					<a href="<?php home_url(); ?>/contact-us/" class="uk-textbutton-dark-spot2"><strong>CONTACT US HERE FOR FURTHER INFO</strong></a></div>
			</article>
		</div>
	<?php endwhile; ?>
	<?php else: ?><article><h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2></article><?php endif; ?>
</section>
<!-- recently added product -->
<section class="uk-width-1-1" style="margin-top:-100px;">
	<div class="wrapper">
		<div class="uk-padding-large uk-padding-remove-top">
			
		</div>
	</div>
</section>
<section class="background-lightblue uk-position-relative">
	<div class="wrapper">
		
	</div>
</section>
</main>
<?php get_footer(); ?>
