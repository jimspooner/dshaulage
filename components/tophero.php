<!-- GET HERO ARRAY -->
<?php $main_image = get_field( 'main_image' );  ?>
<!-- IF ENABLED -->
<?php if ($main_image) : ?>
<?php  $display_height = 'uk-height-small'; ?> 
<!-- CHECK IF GOOGLE MAP EMBED OR IMAGE -->
<?php if ($main_image['map'] || $main_image['image']) : ?>
<!-- SET VARIABLES FOR HEIGHT -->
<?php if ($main_image['size'] == 'Small') : $display_height = 'uk-height-small'; endif; if ($main_image['size'] == 'Medium') : $display_height = 'uk-height-medium'; endif; if ($main_image['size'] == 'Large') : $display_height = 'uk-height-large'; endif; ?>

<!-- START MAIN HERO SECTION -->
        <section class="<?php echo $display_height; ?> uk-background-cover uk-light uk-flex" <?php if ($main_image['parallax']) : ?>uk-parallax="bgy: -200"<?php endif; ?> style="background-image: url('<?php echo $main_image['image']; ?>');">
            <?php if ($main_image['map']) : ?><iframe width="100%" src="<?php echo $main_image['map']; ?>" style="border:0;" allowfullscreen="" loading="lazy"></iframe><?php endif; ?>
        </section>
<!-- END MAIN HERO SECTION -->

<?php endif; ?>
<?php endif; ?>