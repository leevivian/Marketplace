<?php
class Search_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }


    public function get_items($keyword){
        $keyword = trim($keyword);

        //searches the database's 'items' table for similarity in 'name' and 'category' columns
        $this->db->select('*');
        $this->db->from('search_test');
        $this->db->like('name', $keyword);
        $this->db->or_like('category', $keyword);

        //gets results from above query
        $query = $this->db->get();

        //returns query results in an array
        return $query->result_array();

    }

}

