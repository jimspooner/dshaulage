<?php $startmonth = ''; if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- article -->


<?php endwhile; ?>
<?php 	$current_user = wp_get_current_user(); ?>
<p>Select your vehicle to see service records.</p>
<?php $categories = get_terms( 'category', array('parent' => 23, 'hide_empty' => false));  ?>
<div class="uk-child-width-1-2 uk-child-width-1-4@s" uk-grid>
<?php foreach ($categories as $key => $category) {
				echo '<div><a href="'.home_url().'/category/services/'.$category->name.'-services" class="uk-text-darkgrey uk-text-lead uk-padding-small uk-bgc-spot4 uk-text-center" style="border-radius:8px;border:2px solid #333;color:#333;margin:2px!important;font-size:1.4rem;font-weight:700;width:100%!important;display:block;text-align:center;"><strong>'.$category->name.'</strong></a></div>';
} ?>
</div>
<?php else: ?>

	<!-- article -->
	<article>
		<p><?php _e( 'No Logs have been added.', 'html5blank' ); ?></p>
	</article>
	<!-- /article -->

<?php endif; ?>
