<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller{

    public function  __construct() {
        parent::__construct();
        $this->load->model('post','',TRUE);
    }
    function index(){
       
        $datafb_posts['status']="My status";
        $this->load->view('facebook/status-update', $data);
    }
   
    public function post_update(){
        $status = $_POST['status_update'];
        $attachment = $_POST['attachment'];
        $sku = $_POST['sku'];
        
        $post = array(
            'post_sku' => $sku,
            'user_id' => '1',
            'social_type' => '1',
            'post_content' => $status,
            'post_date' => date('d-m-Y'),
            'update_date' => date('d-m-Y'),
            'post_status' => '1',
            'post_likes_count'=>'0',
            'post_comments_count'=>'0'
        );
        $result = $this->post->insert($post);
        if($result){
            $post_attch = array(
                'post_sku' => $sku,
                'user_id' => '1',
                'file_name' => $attachment,
                'file_path' => 'uploads/'
             );
            $this->post->postAttachment($post_attch);
        }
        $this->load->view('posts/current_post',array('cur_status'=>$status, 'filename'=>$attachment));
    }

    public function comment_submit(){
        $comment = $_POST['comment'];
        $post_id = $_POST['post_id'];
        $post_comment = array(
            'user_id' => '1',
            'post_id' => $post_id,
            'comment_time' => date('d-m-Y'),
            'comment_level' => '1',
            'social_type' => '1',
            'attachment' => '0',
            'status' => '1',
            'comment_text'=>$comment
        );
        $save_comment_value = $this->post->save_comment($post_comment);
        if($save_comment_value){
            $this->load->view('posts/current_comment', array('comment_posted'=>$comment));
        }else{
            return false;
        }
    }
    public function post_like(){
        $post_id = $_POST['post_id'];
        echo $this->post->getLikes($post_id);
    }
    // function listing all the posts
    public function comments_lists(){
        $post_id = $_POST['post_id'];
        $posts_comments=$this->post->getAllComments($post_id);
        $this->load->view('posts/comments_posted_by_postid',array(
            'post_comments'=>$posts_comments
        ));
    }

    // Delete post
    public function delete_post(){
        $post_id = $_POST['post_id'];
    }
}
