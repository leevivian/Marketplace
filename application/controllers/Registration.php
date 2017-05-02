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
        $this->register();
    }

    public function register()
    {
        // Validate user input field constraints are not violated
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]|md5');
        $this->form_validation->set_rules('password-confirm', 'Confirm Password', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {
            // Load the registration view
            $title = array(
                'title' => 'Registration');
            $this->load->view('header', $title);
            $this->load->view('registration_view');
            $this->load->view('footer');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email')
            );

            if ($this->Registration_model->insertNewUser($data)) {
                redirect('/');
            }
        }
    }
}