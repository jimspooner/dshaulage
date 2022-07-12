<?php 

add_action('wp_ajax_nopriv_save_vehicle_form','save_vehicle_form_action');
add_action('wp_ajax_save_vehicle_form','save_vehicle_form_action');

function save_vehicle_form_action() {

    $response = array(
        'error'             => '',
        'success'           => '',
        'post_id'           => '',
        'post_url'          => '',
      );

    $post_plate = $_POST['post_details']['post_plate'];
    $post_description = $_POST['post_details']['post_description'];

    //inspection cat
    $args = [
        'cat_name' => $post_plate,
        'category_parent' => 2,
        'category_description'=> $post_description,
    ];
     
    $is_cat_inserted = wp_insert_category($args);

    //defects cat
    $args1 = [
        'cat_name' => $post_plate,
        'category_parent' => 26,
        'category_description'=> $post_description,
    ];
     
    $is_cat_inserted1 = wp_insert_category($args1);

    //services cat
    $args2 = [
        'cat_name' => $post_plate,
        'category_parent' => 23,
        'category_description'=> $post_description,
    ];
     
    $is_cat_inserted2 = wp_insert_category($args2);

    //vehicle cat
    $args3 = [
        'cat_name' => $post_plate,
        'category_parent' => 30,
        'category_description'=> $post_description,
    ];
     
    $is_cat_inserted3 = wp_insert_category($args3);


    if($is_cat_inserted) {
        return "success";
    } else {
        return "failed";
    }
     
 }