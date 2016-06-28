<?php

class Post extends CI_Model{

    public function getAll($social_type='1'){ // 1=facebook
        $query = $this -> db
            -> select('users.username, files.file_name, files.file_path, post.*')
            -> from('post')
            -> where('social_type', $social_type)
            -> where('post_status', 1) // 1= published
            -> order_by('id', 'desc')
            -> join('users', 'post.user_id = users.id')
            -> join('files', 'post.post_sku = files.post_sku')
            -> get();
        return $query->result();
    }
    public function getById($id){
        $query=$this->db->get_where('post', array('id'=>$id));
        return $query->row();
    }
    public function insert($post){
        return $this->db->insert('post', $post);
    }
    public function update($post){
        $this->db->set('title', $this->title);
        $this->db->set('content', $this->content);
        $this->db->set('id', $this->id);
        return $this->db->update('post');
    }
    public function delete(){
        $this->db->where('id', $this->id);
        return $this->db->delete('post');
    }
    public function save(){
        if(isset($id)){
            return $this->update();
        }else{
            return $this->insert(); 
        }
    }

    // Insert comment into the database
    public function save_comment($comment_from_ctrl){
        $comment_saved=$this->db->insert('comments', $comment_from_ctrl);
        if($comment_saved){
            return 1;
        }else{
            return 0;
        }
    }
    // Get comment by id for the post
    public function getAllComments($post_id){
        $query = $this -> db
            -> select('users.username, post.id, comments.*')
            -> from('comments')
            -> where('post_id', $post_id)
            -> where('status', 1) // 1= published
            -> order_by('id', 'desc')
            -> join('users', 'comments.user_id = users.id')
            -> join('post', 'comments.post_id = post.id')
            -> get();
        return $query->result();
    }
    // Add attachment for the post
    public function postAttachment($attch){
        return $this->db->insert('files', $attch);
    }
    // get post likes
    public function getLikes($post_id){
        $sql = 'update post set post_likes_count=post_likes_count+1 where id=?';
        $data = $this->db->query($sql, array($post_id));
        if($data){
            return $data;
        }
    }
}
