<?php

class Registration_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insertNewUser($data) {
        return $this->db->insert('Users', $data);
    }
}