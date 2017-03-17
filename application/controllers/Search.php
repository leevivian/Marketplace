<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        /** loads 'search_model' so we can call get_items()
         *  and form helper
         *  Url helper is needed for bootstrap. */
        $this->load->model('search_model');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    /** For the functions below, the real page is located in the search_viw file. The header and footer are
     *  placed on each side, sandwiching the content in the middle. header.php will load bootstrap, and takes the
     *  title of the page as an argument. footer.php includes the legal stuff at the bottom of the page. */

    public function index(){

        //loads seach_view.php
        $title = array(
            'title' => 'Vertical Prototype');
        $this->load->view('header', $title);
        $this->load->view('search_view');
        $this->load->view('footer');
    }

    public function execute_search()
    {
        // receives the input from the form
        $keyword = $this->input->post('searchquery');

        /* passes the search keyword to get_items()
        and stores the data in an array named 'results' */
        $data['results'] = $this->search_model->get_items($keyword);

        // loads the search_view page, passing it data from get_items()
        $title = array(
            'title' => 'Vertical Prototype');
        $this->load->view('header', $title);
        $this->load->view('search_view', $data);
        $this->load->view('footer');

    }
}