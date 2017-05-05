<?php

class Registration_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insertNewUser($data) {
        return $this->db->insert('Users', $this->db->escape($data));
    }

    // Add function to check if username or email already exists in the Users database
}