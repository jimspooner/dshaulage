<?php 

// add_action('wp_ajax_nopriv_save_postservice_form','save_service_form_action');
// add_action('wp_ajax_save_postservice_form','save_service_form_action');


// function save_service_form_action() {

    

//     $response = array(
//         'error'             => '',
//         'success'           => '',
//         'post_id'           => '',
//         'post_url'          => '',
//       );

//     $post_vehicle = $_POST['post_details']['post_vehicle'];
//     $post_title = date('d M Y - g:ia');
//     $post_description = 'Service Record';

//     $args = [
//         'post_title' => $post_title,
//         'post_content'=> $post_description,
//         'post_category'=>array(24),
//         'post_status'=> 'publish',
//         'post_date'=> get_the_date()
//     ];
     
//     $is_post_inserted = wp_insert_post($args);
    

//     if($is_post_inserted) {
//         return "success";
//     } else {
//         return "failed";
//     }
     
//     }


add_action('wp_ajax_file_upload', 'file_upload_callback');
add_action('wp_ajax_nopriv_file_upload', 'file_upload_callback');

    function file_upload_callback() {

        $args = [
            'post_title' => date('d M Y - g:ia'),
            'post_content'=> 'new service record upload',
            'post_category'=>array(23, $_POST['vehicle']),
            'post_status'=> 'publish',
            'post_date'=> get_the_date()
        ];
         
        $is_post_inserted = wp_insert_post($args);

        $arr_img_ext = array('image/png', 'image/jpeg', 'image/jpg', 'image/gif', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/pdf');
        for($i = 0; $i < count($_FILES['file']['name']); $i++) {
            if (in_array($_FILES['file']['type'][$i], $arr_img_ext)) {
                $upload = wp_upload_bits($_FILES['file']['name'][$i], null, file_get_contents($_FILES['file']['tmp_name'][$i]));
                update_post_meta( $is_post_inserted, 'doc_'.$i, $upload['url'] );
                //$upload['url'] will gives you uploaded file path
            }
        }
        
        if($is_post_inserted) {
            return "success";
        } else {
            return "failed";
        }
    }