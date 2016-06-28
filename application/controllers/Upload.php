<?php

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index() {
        $this->load->view('upload_form', array('error' => ' ' ));
    }

    function do_upload() {
	$error = false;
	$files = array();
	$uploaddir = './uploads/';
	foreach($_FILES as $file) {
		if(move_uploaded_file($file['tmp_name'], $uploaddir .basename($file['name']))) {
			$upload_data['file_name'] = $file['name'];
                        $img_id = rand(100,1000);
                        $file_name = $upload_data['file_name'];
                        $upload_data['img_id'] = $img_id;
                        $img = $this->load->view('upload_success', $upload_data,true);
		} else {
		    $error = true;
		}
	}
	$data = ($error) ? array('error' => 'There was an error uploading your files') : array('msg' => 'success','img'=>$img,'img_id'=>$img_id,'file_name'=>$file_name);
        echo json_encode($data);
    }
}
