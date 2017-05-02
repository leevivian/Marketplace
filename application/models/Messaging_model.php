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
    
    public function openMessage($messageid) {
        $query = $this->db->query("SELECT * FROM messages WHERE messageid = '$messageid'");
        return $query->result_array();
    }
    
    public function sendMessage($sender, $recipient, $subject, $contents) {
        $timestamp = time();
        $query = "INSERT INTO Messages (sender, recipient, subject, contents, timestamp) VALUES (".$this->db->escape($sender).", "
                .$this->db->escape($recipient).", ".$this->db->escape($subject).", ".$this->db->escape($contents).", ".$this->db->escape($timestamp).")";
        $this->db->query($query);
    }
}