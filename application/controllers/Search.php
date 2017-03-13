<?php
class Search extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        /* loads 'search_model' so we can call get_items()
           and form helper */
        $this->load->model('search_model');
        $this->load->helper('form');

    }

    public function index(){

        //loads seach_view.php
        $this->load->view('search_view');
    }

    public function execute_search()
    {
        // receives the input from the form
        $keyword = $this->input->post('searchquery');

        /* passes the search keyword to get_items()
        and stores the data in an array named 'results' */
        $data['results'] = $this->search_model->get_items($keyword);

        // loads the search_view page, passing it data from get_items()
        $this->load->view('search_view', $data);

    }
}