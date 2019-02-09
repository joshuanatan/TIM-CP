<?php
defined('BASEPATH') OR exit('no direct script');

class Message extends CI_Model{
    public function insertMessage($data){
        $this->db->insert('message', $data);
    }
}
?>