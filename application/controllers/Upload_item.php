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
        $this->load->library('form_validation');
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

        $this->form_validation->set_rules('item-name', 'Item name', 'required');
        $this->form_validation->set_rules('category-select','Category', 'required');
        $this->form_validation->set_rules('item-condition', 'Item Condition', 'required');
        $this->form_validation->set_rules('description','Description', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');


        //$this->load->view('listingPage_view', $data);

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('header');
            $this->load->view('upload_view');
            $this->load->view('footer');

        }
        else
        {
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

            $this->Upload_model->insert_item($data);
            // TODO: After inserting item, display a details page with new item
        }

        //$this->Upload_model->insert_item($data);


    }

}