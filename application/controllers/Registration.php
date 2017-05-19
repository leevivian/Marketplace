<?php

class Registration extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
        $this->load->model('Registration_model');
        $this->load->model('Login_model');
    }

    //needs to be called before outputting any variable to any view
    public function validate_input($data) {
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = $this->security->xss_clean($data);
        return $data;
    }

    public function index() {
        //Codeigniter preprocesses input for security
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->load->database(); //Required to use is_unique

        //Email rules
        $this->form_validation->set_rules(
                'email', 'Email', 'required|trim|valid_email|is_unique[Users.email]', array(
            'is_unique' => 'This %s already exists.'
                )
        );
        //Default error messages first, SFSU address message second
        if ($this->form_validation->run() == TRUE) {
            //email_check('email')
            $this->form_validation->set_rules('email', 'Email', 'callback_email_format');
        }

        //Username rules
        $this->form_validation->set_rules(
                'username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[Users.username]', array(
                    'is_unique' => 'This %s already exists.'
                )
        );

        $this->form_validation->set_rules('firstname', 'First Name', 'required|trim');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|trim|matches[password]');
        $this->form_validation->set_rules('accept_terms', '', 'callback_accept_terms');

        //Security: In index.php, define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');
        //needs to be changed to 'production' once SFSU Marketplace is ready for release.
        //This will prevent harmful information from being printed through PHP's native error message
        //system.
        //validate_input only needs to be called only right before output, in order to prevent slashes being removed from passwords.
        //htmlspecialchars() is automatically called as an intermediate function of set_value in registration_view.

        if ($this->form_validation->run() == FALSE) {
            //If the email (and all other variables) had an incorrect format, do the following:
            $title = array(
                'title' => 'Registration');
            $this->load->view('header', $title);
            $this->load->view('registration_view');
            $this->load->view('footer');
        } else {
            // Group all registration fields together into an array
            $data = array(
                'username' => $this->input->post('username'),
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'password' => $this->Login_model->encrypt($this->input->post('password')),
                'email' => $this->input->post('email')
            );

            // If insertion is successful, the user is redirected to the Home Page
            if ($this->Registration_model->insertNewUser($data)) {
                $this->load->view('header');
                $this->load->view('registration_success');
                $this->load->view('footer');
            }
            // If insertion is unsuccessful, error message appears on Registration Page
        }
    }

    //Pass 'email' as $str through the callback
    public function email_format($str) {

        //Checks if the given pattern is found in 'email'
        if (stristr($str, '@mail.sfsu.edu') !== false || stristr($str, '@sfsu.edu') !== false) {
            return true;
        }

        $this->form_validation->set_message('email_format', 'Please provide a SFSU email address');
        return false;
    }

    function accept_terms($str) {
        if (isset($str)) {
            return true;
        }

        $this->form_validation->set_message('accept_terms', 'Please read and accept the terms and conditions.');
        return false;
    }

}