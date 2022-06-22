<?php 
add_action('wp_ajax_nopriv_save_post_details_form','save_walkaround_form_action');
add_action('wp_ajax_save_post_details_form','save_walkaround_form_action');

function save_walkaround_form_action() {

    $post_report = $_POST['post_details']['post_report'];
    $post_description = $_POST['post_details']['post_description'];
    $post_vehicle = $_POST['post_details']['post_vehicle'];
    $post_title = date('d M Y / G:i');
    $args = [
        'post_title' => $post_title,
        'post_content'=>$post_description,
        'post_category'=>array($post_vehicle),
        'post_status'=> 'publish',
        'post_type'=>post,
        'post_date'=> get_the_date()
    ];
     
    $is_post_inserted = wp_insert_post($args);
    update_post_meta( $is_post_inserted, 'walkaround_report', $_POST['post_details']['post_report'] );

    if($is_post_inserted) {
        return "success";
    } else {
        return "failed";
    }
     
    }