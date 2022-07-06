<?php 

function my_enqueue() {

    wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/js/main.js', array('jquery') );

    wp_localize_script( 'ajax-script', 'my_ajax_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}
add_action( 'wp_enqueue_scripts', 'my_enqueue' );



add_action('wp_ajax_nopriv_save_post_details_form','save_vehicle_form_action');
add_action('wp_ajax_save_post_details_form','save_vehicle_form_action');

function save_vehicle_form_action() {

    $response = array(
        'error'             => '',
        'success'           => '',
        'post_id'           => '',
        'post_url'          => '',
      );

    $post_plate = $_POST['post_details']['post_plate'];
    $post_description = $_POST['post_details']['post_description'];

    $args = [
        'cat_name' => $post_plate,
        'category_parent' => 2,
        'post_content'=> $post_description,
    ];
     
    $is_cat_inserted = wp_insert_category($args);

    if($is_post_inserted) {
        return "success";
    } else {
        return "failed";
    }
     
 }