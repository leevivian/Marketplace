<?php

class Registration extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Registration_model');
    }

    public function index()
    {
        //loads seach_view.php
        $title = array(
            'title' => 'Registration');
        $this->load->view('header', $title);
        $this->load->view('registration_view');
        $this->load->view('footer');
    }

    public function register()
    {
        $data = array (
            'username' => $this->input->post('username'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email')
        );

        if ($this->registration_model->insertNewUser($data)) {
            redirect('/');
        }
    }
}