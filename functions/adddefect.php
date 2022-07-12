<?php 

add_action('wp_ajax_defect_file_upload', 'defect_upload_callback');
add_action('wp_ajax_nopriv_defect_file_upload', 'defect_upload_callback');

    function defect_upload_callback() {

        $args = [
            'post_title' => date('d M Y - g:ia'),
            'post_content'=> $_POST['description'],
            'post_category'=>array(26, $_POST['vehicle']),
            'post_status'=> 'publish',
            'post_date'=> get_the_date()
        ];
         
        $is_post_inserted = wp_insert_post($args);

        $arr_img_ext = array('image/png', 'image/jpeg', 'image/jpg', 'image/gif');
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