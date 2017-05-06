<?php
class Search_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }


    public function get_items($search, $category, $condition){
        $search = trim($search);

       /* //searches the database's 'items' table for similarity in 'name' and 'category' columns
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
        $this->db->from('Items');
        if(isset($search) && $search != "")
        {
            $this->db->like('name', $search);
            $this->db->or_like('description', $search);
        }
        //gets results from above query
        $query = $this->db->get();

        //returns query results in an array
        return $query->result_array();*/

       // SELECT * FROM Items
       $this->db->select('*');
       $this->db->from('Items');

       if($category === "All" && $condition === "All"){
           // WHERE 'name' LIKE '%search%'
           $this->db->like('name', $search);
       }else if($category !== "All" && $condition === "All"){
           $this->db->where('category', $category);
           $this->db->like('name',$search);
       }else if($condition !== "All" && $category === "All"){
           $this->db->where('condition', $condition);
           $this->db->like('name',$search);
       }else{
           $this->db->where('category', $category);
           $this->db->where('condition', $condition);
           $this->db->like('name', $search);
       }

       $query = $this->db->get();

       return $query->result_array();

    }

    /* Queries database, looking for the item with the
     * unique itemid number it is given, returns result
     * to the search model's load_details function*/
    public function get_details($id){
        $this->db->select('*');

        $this->db->from('Items');
        $this->db->where('itemid', $id);

        $query = $this->db->get();

        return $query->result_array();
    }


}