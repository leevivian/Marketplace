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
        $this->load->model('Search_model');
    }

    public function index(){

        //loads upload_view.php
        $this->load->view('header');

        if (isset($this->session->login) && $this->session->login && isset($this->session->username)) {
            //$username = $this->session->username;
            $this->load->view('upload_view', array('error' => ' ' ));

        } else {
            $this->load->view('login_view');
        }

        $this->load->view('footer');

    }

    public function upload(){

        $this->input->post('upload-item');

        $this->form_validation->set_rules('item-name', 'Item name', 'trim|required|alpha_numeric_spaces|alpha_dash|max_length[20]');
        $this->form_validation->set_rules('category-select','Category', 'required');
        $this->form_validation->set_rules('item-condition', 'Item Condition', 'required');
        $this->form_validation->set_rules('description','Description', 'required');
        $this->form_validation->set_rules('price', 'Price', 'trim|required|numeric');


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

            $itemid = $this->Upload_model->insert_item($data);

            //redirects to the details page of the uploaded item
            redirect(base_url() . "index.php/search/load_details/{$itemid}");


        }

        //$this->Upload_model->insert_item($data);

    }

    // Codeigniter's documentation on file uploading:
    // https://www.codeigniter.com/userguide3/libraries/file_uploading.html
    public function upload_img()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1000;
        $config['max_height']           = 1000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->upload_img('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_view', $error);
        }
        else
        {
            $uploaded_img = array('upload_data' => $this->upload->data());

            $this->load->view('upload_view', $uploaded_img);
        }
    }

}