<?php
class Search_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }


    public function get_items($keyword, $category){
        $keyword = trim($keyword);

        //searches the database's 'items' table for similarity in 'name' and 'category' columns
        if($category=="All")
        {
            $this->db->select('*');
        }
        else if($category=="Other")
        {
            $category=NULL; //If category was set to Other, choose any database item with no category 
            $this->db->where('category', $category);
        }
        else 
        {
            $this->db->where('category', $category);
        }
        $this->db->from('search_test');
        if($keyword != "")
        {
            $this->db->like('name', $keyword);
            $this->db->or_like('category', $keyword);
        }
        //gets results from above query
        $query = $this->db->get();

        //returns query results in an array
        return $query->result_array();

    }

}