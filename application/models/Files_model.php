<?php
class Files_Model extends CI_Model {

    public function insert_file($filename){
        $data = array(
            'post_id'      => '1',
            'user_id'         => '1',
            'file_name'      => $filename,
            'file_path'         => ''
        );
        $this->db->insert('files', $data);
        return $this->db->insert_id();
    }
}
