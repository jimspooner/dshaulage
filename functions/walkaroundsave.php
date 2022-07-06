<?php 

function my_enqueue() {

    wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/js/main.js', array('jquery') );

    wp_localize_script( 'ajax-script', 'my_ajax_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}
add_action( 'wp_enqueue_scripts', 'my_enqueue' );



add_action('wp_ajax_nopriv_save_post_details_form','save_walkaround_form_action');
add_action('wp_ajax_save_post_details_form','save_walkaround_form_action');

function save_walkaround_form_action() {

    $response = array(
        'error'             => '',
        'success'           => '',
        'post_id'           => '',
        'post_url'          => '',
      );

    $post_report = $_POST['post_details']['post_report'];
    $post_mileage = $_POST['post_details']['post_mileage'];
    $post_description = $_POST['post_details']['post_description'];
    $post_vehicle = $_POST['post_details']['post_vehicle'];
    $post_reg = $_POST['post_details']['post_reg'];
    $post_title = date('d M Y - g:ia');
    $args = [
        'post_title' => $post_title,
        'post_mileage' => $post_mileage,
        'post_content'=>$post_description,
        'post_category'=>array($post_vehicle),
        'tags_input'=>array($post_reg),
        'post_status'=> 'publish',
        'post_date'=> get_the_date()
    ];
     
    $is_post_inserted = wp_insert_post($args);
    wp_set_object_terms($is_post_inserted, 16, 'vehicles');
    update_post_meta( $is_post_inserted, 'walkaround_report', $_POST['post_details']['post_report'] );
    update_post_meta( $is_post_inserted, 'walkaround_mileage', $_POST['post_details']['post_mileage'] );
    update_post_meta( $is_post_inserted, 'walkaround_month', $_POST['post_details']['post_month'] );
    update_post_meta( $is_post_inserted, 'walkaround_year', $_POST['post_details']['post_year'] );

    if($is_post_inserted) {
        return "success";
    } else {
        return "failed";
    }
     
    }