<?php
defined('BASEPATH') OR exit('no direct script');

class Contact extends CI_Model{
    
    public function getContactData(){
        $where = array(
            "status" => "1"
        );
        $this->db->where($where);
        $this->db->from("contactus");
        return $this->db->get();
    }
}
?>