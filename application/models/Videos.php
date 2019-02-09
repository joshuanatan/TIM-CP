<?php
defined('BASEPATH') OR exit('no direct script');

class Videos extends CI_Model{
    
    public function getSermonsVideos(){
        $where = array(
            "status" => "1"
        );
        $this->db->where($where);
        $this->db->from("videos");
        return $this->db->get();
    }
}
?>