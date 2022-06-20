<!-- GET PEOPLE ARRAY -->
<?php $people = get_field('people');?>
<!-- IF ENABLED -->
<?php if ($people['person_1']['name']) : ?>
<!-- BACKGROUND COLOR -->
<?php $js_people_background = 'uk-bgc-spot1'; ?>
<!-- START MAIN PEOPLE SECTION -->
<section class="<?php echo $js_people_background; ?> uk-padding-large uk-padding-remove-left uk-padding-remove-right">
            <div class="wrapper uk-padding-large uk-padding-remove-right uk-padding-remove-left">
                <h2 class="text-white">Get in touch</h2>
                <hr class="uk-divider-small">
                <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-5@l uk-grid-small people uk-grid-match uk-flex uk-flex-center" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true" uk-height-match=".uk-card">
                    <?php foreach ($people as $person) { ?>
                        <?php if ($person['name']) : ?>
                                <div>
                                    <div class="uk-card uk-card-default person">
                                        <div class="uk-card-body uk-text-center">
                                            <img src="<?php echo $person['profile_image']; ?>" alt="<?php echo $person['name']; ?>" class="uk-border-circle" style="max-width:180px;">
                                            <h3 class="text-large uk-margin-remove-bottom"><?php echo $person['name']; ?></h3>
                                            <p class="position uk-margin-remove-top uk-text-meta"><?php echo $person['position']; ?></p>
                                            <!-- <p class="profile"><?php echo $person['profile']; ?></p> -->
                                            <p class="telephone"><strong><?php echo $person['telephone']; ?></strong></p>
                                            <a href="mailto:<?php echo $person['email']; ?>?subject=Website enquiry" class="button-white">EMAIL ME</a>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>
                    <?php } ?>
                </div>
            </div>
</section>
<!-- END MAIN PEOPLE SECTION -->
<?php endif; ?>