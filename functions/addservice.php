<?php 

function my_enqueue_2() {

    wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/js/main.js', array('jquery') );

    wp_localize_script( 'ajax-script', 'my_ajax_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}
add_action( 'wp_enqueue_scripts', 'my_enqueue_2' );



add_action('wp_ajax_nopriv_save_service_form','save_service_form_action');
add_action('wp_ajax_save_service_form','save_service_form_action');

function save_service_form_action() {

    $post_frequency = $_POST['post_details']['post_frequency'];
    $post_date = $_POST['post_details']['post_date'];
    $post_nextdate = $_POST['post_details']['post_nextdate'];
    $post_mileage = $_POST['post_details']['post_mileage'];
    $post_description = $_POST['post_details']['post_description'];
    $post_vehicle = $_POST['post_details']['post_vehicle'];
    $post_title = $_POST['post_details']['post_title'];
    $args = [
        'post_title' => $post_title,
        'post_content'=>$post_description,
        'post_category'=>array($post_vehicle),
        'post_status'=> 'publish',
        'post_date'=> get_the_date()
    ];

    $is_post_inserted = wp_insert_post($args);
    update_post_meta( $is_post_inserted, 'service_fequency', $_POST['post_details']['post_frequency'] );
    update_post_meta( $is_post_inserted, 'service_mileage', $_POST['post_details']['post_mileage'] );
    update_post_meta( $is_post_inserted, 'service_date', $_POST['post_details']['post_date'] );
    update_post_meta( $is_post_inserted, 'service_nextdate', $_POST['post_details']['post_nextdate'] );
     
    $is_cat_inserted = wp_insert_category($args);

    if($is_post_inserted) {
        return "success";
    } else {
        return "failed";
    }
     
 }