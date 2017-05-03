<?php

class Upload_item extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        /** loads 'search_model' so we can call get_items()
         *  and form helper
         *  Url helper is needed for bootstrap. */
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('Upload_model');
    }

    public function index(){

        //loads upload_view.php
        $this->load->view('header');

        if (isset($this->session->login) && $this->session->login && isset($this->session->username)) {
            //$username = $this->session->username;
            $this->load->view('upload_view');
        } else {
            $this->load->view('login_view');
        }

        $this->load->view('footer');

    }

    public function upload(){

        $this->input->post('upload-item');

        $data = array(
            'username' => $this->session->username,
            'name' => $this->input->post('item-name'),
            'category' => $this->input->post('category-select'),
            'condition' => $this->input->post('item-condition'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price'),
            'duration' => $this->input->post('listing-duration'),
            'image' => "Admin_001.jpg",
            'date' =>  date("Y-m-d")
        );
        //$this->load->view('listingPage_view', $data);

        $this->Upload_model->insert_item($data);


    }

}