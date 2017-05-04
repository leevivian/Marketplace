<?php

/**
 * Created by PhpStorm.
 * User: aculanay
 * Date: 5/2/17
 * Time: 7:05 PM
 */
class Upload_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Search_model');
    }

    public function insert_item($item){

        $this->db->insert('Items', $item);

        return $this->db->insert_id();

    }

}