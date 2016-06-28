<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Facebook extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('post','',TRUE);
    }

    function index(){
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $fb_posts_list_html=$this->posts_lists();
            $data['username'] = $session_data['username'];
            $data['fb_posts_list_html'] = $fb_posts_list_html;
            $this->load->view('facebook_view', $data);
        }else{
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    // function listing all the posts
    private function posts_lists(){
        //$comments=$this->comments_lists();
        $social='1';
        $fb_posts=$this->post->getAll($social);
        return $this->load->view('posts/fb_posts_list',array(
            'fb_posts'=>$fb_posts
        ), true);
    }

    function logout(){
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('login', 'refresh');
    }
}
