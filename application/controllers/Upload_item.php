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
                'image' => $this->input->post('image_name'),
                'date' =>  date("Y-m-d")
            );

            $itemid = $this->Upload_model->insert_item($data);

            //redirects to the details page of the uploaded item
            redirect(base_url() . "index.php/search/load_details/{$itemid}");


        }


    }

    // Codeigniter's documentation on file uploading:
    // https://www.codeigniter.com/userguide3/libraries/file_uploading.html
    public function do_upload(){
        $this->input->post('upload-item');


        $config['upload_path']          = './images/item_images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 150;
        $config['max_width']            = 1500;
        $config['max_height']           = 1500;

        $this->load->library('upload', $config);

        $this->form_validation->set_rules('item-name', 'Item name', 'trim|required|alpha_numeric_spaces|alpha_dash|max_length[20]');
        $this->form_validation->set_rules('category-select','Category', 'required');
        $this->form_validation->set_rules('item-condition', 'Item Condition', 'required');
        $this->form_validation->set_rules('description','Description', 'required');
        $this->form_validation->set_rules('price', 'Price', 'trim|required|numeric');

        // Removed error variable from view, so this might not be needed anymore..
        if ( ! $this->upload->do_upload('userfile') || $this->form_validation->run() == FALSE )
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_view', $error);
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
                'image' => $this->input->post('image_name'),
                'date' =>  date("Y-m-d")
            );

            $itemid = $this->Upload_model->insert_item($data);

            //redirects to the details page of the uploaded item
            redirect(base_url() . "index.php/search/load_details/{$itemid}");
        }
    }

}