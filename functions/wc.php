<?php 

// WC BREADCRUMB CHNAGES

add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => '',
            'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
            'wrap_after'  => '</nav>',
            'before'      => '<span>',
            'after'       => '</span>',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}

// WC BEFORE SHOP LOOP ITEM

function js_uk_card_start () {  ?>
            <div class="uk-card product-card">
        <?php }
add_action( 'woocommerce_before_shop_loop_item', 'js_uk_card_start', 5);

function js_uk_card_after () { ?>
    </div>
<?php }
add_action( 'woocommerce_after_shop_loop_item', 'js_uk_card_after', 99);

// WC BEFORE SHOP LOOP ITEM TITLE

function js_archive_thumbnail_before () {  
    echo '<div class="uk-height-medium uk-cover-container js-product--thumb">';
 }
add_action( 'woocommerce_before_shop_loop_item_title', 'js_archive_thumbnail_before', 5);

function js_archive_thumbnail_after () {  
    echo '</div>';
 }
add_action( 'woocommerce_before_shop_loop_item_title', 'js_archive_thumbnail_after', 99);

// WC AFTER SHOP LOOP ITEM TITLE

function js_uk_card_excerpt ($product) {  
    global $product;
    if (get_the_excerpt()) : $short_description = strtolower(get_the_excerpt()); else : $short_description = strtolower(get_the_content()); endif; 
    $short_description = substr($short_description, 0, 200);
    echo '<div>'.ucfirst($short_description).'&hellip; <a href="'.get_permalink( $product->get_id() ).'" class="button-text button-text--small button-text--lightblue"><strong>Read more</strong></a></div>';
    echo '<div class=" uk-margin-small-top uk-margin-medium-bottom text-reg"><strong class="uk-display-inline" style="font-weight:800;">REF: </strong>'.$product->get_sku().'</div>';
    echo '<a href="'.home_url().'/contact-us/?product_ref='.$product->get_sku().'" class="button-white uk-position-bottom-right" style="bottom:14px;right:14px;">ENQUIRE</a>';
 }
add_action( 'woocommerce_after_shop_loop_item_title', 'js_uk_card_excerpt', 5);

// WC BEFORE MAIN SHOP LOOP

function js_before_shop_loop() { 
    global $woocommerce;
    echo '<section class=" uk-padding-large uk-padding-remove-right uk-padding-remove-right uk-position-relative">';
    echo '<div class="background-white uk-padding uk-position-relative" style="z-index:20">';
}
add_action( 'woocommerce_before_shop_loop', 'js_before_shop_loop', 10 );

// WC BEFORE MAIN CONTENT

function js_woocommerce_wrapper_before () {  ?>
    <?php $term = get_queried_object(); ?>
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

<section class="uk-text-left uk-visible@s breadcrumb-wrapper" style="z-index:100;" uk-sticky="offset:119"><div class="wrapper"><?php woocommerce_breadcrumb(); ?></div></section>

    <?php $thumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
            $image = wp_get_attachment_url( $thumbnail_id );?>
            <?php if(1 == $paged) : ?>
    <header class="woocommerce-products-header background-navy uk-position-relative">
        <div class="uk-position-bottom-right background-top--triangle"></div>
            <div class="wrapper uk-padding-large uk-padding-remove-left uk-padding-remove-right">
                <div class="uk-child-width-1-1 <?php if ($image) : ?>uk-child-width-1-2@m<?php endif; ?> uk-flex uk-grid-large" uk-grid>
                        <div class="uk-flex-last">
                            <div class="image-hero uk-cover-container uk-margin-large-bottom">
                                <?php if ($image) : ?>
                                    <img src="<?php echo $image; ?>" alt="<?php woocommerce_page_title(false) ?>" uk-cover>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div style="z-index:1;">
                            <div class="uk-width-1-1 <?php if ($image) : ?>uk-width-4-5@m<?php endif; ?>">

                            </div>
                        </div>
                </div>
            </div>
    </header><?php endif; ?>

                
<?php }
add_action( 'woocommerce_before_main_content', 'js_woocommerce_wrapper_before', 5);

// WC AFTER MAIN SHOP LOOP

function js_afer_shop_loop() { 
  echo '</div></div></section>';
}
add_action( 'woocommerce_after_shop_loop', 'js_after_shop_loop', 10 );

function woocommerce_taxonomy_archive_description() {
    if ( is_tax( array( 'product_cat', 'product_tag' ) ) && get_query_var( 'paged' ) == 0 ) {
      $description = wpautop( do_shortcode( term_description() ) );
      $term = get_queried_object();
      if ( $description ) {
          
        echo ' <section class="uk-padding-large uk-padding-remove-right uk-padding-remove-right " id="more"><div class="wrapper"><h3><strong>';
        echo get_field('sub_information_title',  'product_cat_'.$term->term_id);
        echo '</strong></h3><div class="term-description uk-column-1-1 uk-column-1-2@m">' . $description . '</div><div class="uk-text-center uk-margin-top uk-margin-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" width="64.432" height="11.475" viewBox="0 0 64.432 11.475">
            <path id="Path_1429" data-name="Path 1429" d="M124.048,145.761s-.518-1.037,1.217-2.6c1.425-1.3,8.18-7.765,16.022-8.025,4.861-.648,18.534,4.147,18.534,4.147s15.035,6.352,26.052-2.463c3.189-2.429,2.464,1.037,2.464,1.037s-4.019,11.795-24.368,7.907c-12.832-2.592-15.4-7.195-24.755-7.129-5.962-.194-12.661,6.712-12.661,6.712S124.956,146.926,124.048,145.761Z" transform="translate(-123.976 -135.072)" fill="#203248"/>
        </svg>
        </div>';
      }
    }
  }
add_action( 'woocommerce_after_main_content', 'woocommerce_taxonomy_archive_description', 10 );

function js_woocommerce_wrapper_after () {  
    echo '</div></section>';
 }
add_action( 'woocommerce_after_main_content', 'js_woocommerce_wrapper_after', 99);


// WC BEFORE SINGLE PRODUCT SUMMARY 

function js_single_wrapper_before() {  
    echo '<div class="wrapper uk-margin-large-top uk-margin-large-bottom"><div class="uk-child-width-1-1 uk-child-width-1-2@m" uk-grid><div>';
 }
add_action( 'woocommerce_before_single_product_summary', 'js_single_wrapper_before', 1);

function js_single_wrapper_before_last() {  
    echo '</div><div>';
 }
add_action( 'woocommerce_before_single_product_summary', 'js_single_wrapper_before_last', 99);

// WC SINGLE PRODUCT SUMMARY 

function js_single_summary() {  
    global $product;
    $sku = $product->get_sku();
    echo ucfirst(strtolower($product->get_description()));
    echo '<div class="uk-margin-medium-bottom uk-margin-large-top"><a href="'.home_url().'/contact-us/" class="button-white" >CONTACT US</a></div>';
 }
add_action( 'woocommerce_single_product_summary', 'js_single_summary', 10);

function js_single_wrapper_after_title() {  
    echo '<hr class="uk-divider-small">';
 }
add_action( 'woocommerce_single_product_summary', 'js_single_wrapper_after_title', 6);

// WC AFTER SINGLE PRODUCT SUMMARY 

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs');

function js_single_wrapper_after() {  
    echo '</div></div></div>
    <section class="uk-padding-large uk-padding-remove-right uk-padding-remove-right "><div class="wrapper uk-padding-large uk-padding-remove-left uk-padding-remove-right"><div class="background-white"><div class="uk-width-1-1 uk-padding">';
 }
add_action( 'woocommerce_after_single_product_summary', 'js_single_wrapper_after', 1);

function js_single_wrapper_after_last() {  
    echo '</div></div></div></section>';
 }
add_action( 'woocommerce_after_single_product_summary', 'js_single_wrapper_after_last', 30);

// UIKIT SINGLE PRODUCT IMAGE GALLERY
function remove_gallery_and_product_images() {
    if ( is_product() ) {
        remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
        
        }
     }
add_action('loop_start', 'remove_gallery_and_product_images');


add_action('woocommerce_before_single_product_summary', 'js_thumbnail_product_images', 20);

function js_thumbnail_product_images() {
    global $product;
    $post_thumbnail_id = $product->get_image_id();
    $attachment_ids = $product->get_gallery_image_ids();
    if ( $post_thumbnail_id ) {
        echo '<div id="uk-main-image">';
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );                          
        echo '<img src="'.$image[0].'" data-id="'.$loop->post->ID.'">';
        echo '</div>';
        echo $mainimage;
        echo '<div class="" uk-slider>';
        echo '<ul class="uk-slider-items uk-child-width-auto">';
        if ( $attachment_ids && $product->get_image_id() ) {
            foreach ( $attachment_ids as $attachment_id ) {
                echo '<li>';
                echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', wc_get_gallery_image_html( $attachment_id ), $attachment_id ); 
                echo '</li>';
            }
        }
        echo '</ul></div>';
    } else {
         $mainimage = sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
         echo $mainimage;
    }
}