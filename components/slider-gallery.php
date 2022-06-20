<!-- GET GALLERY ARRAY -->
<?php $gallery_images = get_field('gallery_images');  ?>
<!-- IF ENABLED -->
<?php if ($gallery_images['image_1']) : ?>
<!-- BACKGROUND COLOR -->
<?php $js_gallery_background = 'uk-bgc-spot1'; ?>
<!-- START MAIN GALLERY SECTION -->
    <section class="<?php echo $js_gallery_background; ?> uk-padding-large uk-padding-remove-left uk-padding-remove-right"> 
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider uk-scrollspy="cls: uk-animation-slide-bottom; target: li; delay: 300; repeat: true">
                        <ul class="uk-slider-items uk-child-width-1-1 <?php if ($gallery_images['image_2']) :?>uk-child-width-1-2@s<?php endif; ?> <?php if ($gallery_images['image_3']) :?>uk-child-width-1-3@l<?php endif; ?>">
                            <?php if ($gallery_images['image_1']) :?><li>
                                <img src="<?php echo $gallery_images['image_1']; ?>" alt="<?php echo get_the_title(); ?> 1">
                            </li><?php endif; ?>
                            <?php if ($gallery_images['image_2']) :?><li>
                                <img src="<?php echo $gallery_images['image_2']; ?>" alt="<?php echo get_the_title(); ?> 2">
                            </li><?php endif; ?>
                            <?php if ($gallery_images['image_3']) :?><li>
                                <img src="<?php echo $gallery_images['image_3']; ?>" alt="<?php echo get_the_title(); ?> 3">
                            </li><?php endif; ?>
                            <?php if ($gallery_images['image_4']) :?><li>
                                <img src="<?php echo $gallery_images['image_4']; ?>" alt="<?php echo get_the_title(); ?> 4">
                            </li><?php endif; ?>
                            <?php if ($gallery_images['image_5']) :?><li>
                                <img src="<?php echo $gallery_images['image_5']; ?>" alt="<?php echo get_the_title(); ?> 5">
                            </li><?php endif; ?>
                            <?php if ($gallery_images['image_6']) :?><li>
                                <img src="/<?php echo $gallery_images['image_6']; ?>" alt="<?php echo get_the_title(); ?> 6">
                            </li><?php endif; ?>
                        </ul>
                    </div>
    </section>
<!-- END MAIN GALLERY SECTION -->
<?php endif; ?>