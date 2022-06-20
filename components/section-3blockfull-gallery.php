<!-- GET GALLERY ARRAY -->
<?php $gallery_images3 = get_field('2_block_gallery');  ?>
<!-- IF ENABLED -->
<?php if ($gallery_images3['image_1']) : ?>
<!-- BACKGROUND COLOR -->
<?php $js_gallery_background = 'uk-bgc-spot1'; ?>
<!-- START MAIN GALLERY SECTION -->
<section class="<?php echo $js_gallery_background; ?>"> 
<!-- <div class="uk-position-top uk-background-cover uk-height-small uk-width-1-1" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/section-top.svg);"></div>     -->
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider uk-scrollspy="cls: uk-animation-slide-bottom; target: li; delay: 300; repeat: true">
            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@m uk-grid-collapse uk-height-large">
                <li>
                    <img src="<?php echo $gallery_images3['image_1']; ?>" alt="<?php echo get_the_title(); ?> 1" uk-cover>
                </li>
                <li>
                    <img src="<?php echo $gallery_images3['image_2']; ?>" alt="<?php echo get_the_title(); ?> 2" uk-cover>
                </li>
                <li>
                    <img src="<?php echo $gallery_images3['image_3']; ?>" alt="<?php echo get_the_title(); ?> 3" uk-cover>
                </li>
            </ul>
        </div>
        <div class="uk-position-bottom uk-background-cover uk-height-small uk-width-1-1" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/section-bottom.svg);"></div>
</section>
<!-- END MAIN GALLERY SECTION -->
<?php endif; ?>