<?php
class Messaging_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getMessages($username) {
        $query = $this->db->query("SELECT * FROM messages WHERE sender = '$username' OR recipient = '$username'");
        return $query->result_array();
    }
}