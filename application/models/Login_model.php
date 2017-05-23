<?php

// This model handles password encryption. Use encrypt when first storing the
// password into the database. Verify is called by the login controller to
// start the session.

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Encrypt accepts a password, hashes it, and returns the hash. This should
    // be stored in the database instead of the plaintext password.
    public function encrypt($password) {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function verify($username, $password) {
        $this->load->database();
        $this->db->select("COUNT(*) AS count");
        $this->db->from('Users');
        $this->db->where('Username', $username);
        $usercheck = $this->db->get();
        $usercheck = $usercheck->result_array();
        if ($usercheck[0]['count'] > 0) {
            $this->db->select('password');
            $this->db->from('Users');
            $this->db->where('Username', $username);
            $query = $this->db->get();
            $query = $query->result_array();
            $realPass = $query[0]['password'];
            if (password_verify($password, $realPass)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    
    public function userdata($email) {
        $this->load->database();
        $results = $this->db->query("SELECT username FROM Users WHERE email = ".$this->db->escape($email))->result_array();
        if(isset($results[0]['username'])) {
            return $results[0]['username'];
        } else {
            return null;
        }
    }

    public function updatepass($username, $password) {
        $this->load->database();
        $this->db->query("UPDATE Users SET PASSWORD = '".$this->encrypt($password)."' WHERE username = ".$this->db->escape($username));
    }
}
