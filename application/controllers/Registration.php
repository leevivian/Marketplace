<?php

/**
 * Created by PhpStorm.
 * User: Nick_2
 * Date: 4/10/2017
 * Time: 7:30 PM
 */
class Registration extends CI_Controller {

    public function __construct() {
        parent::__construct();

        /**
         * and form helper
         * Url helper is needed for bootstrap.
         */
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    public function validate_input($data) {
        return $this->security->xss_clean($data);
    }

    public function index() {
        //Codeigniter preprocesses input for security
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
                
        //Email rules
        $this->form_validation->set_rules(
                'email', 'Email', 'required|trim|valid_email', array(
            'is_unique' => 'This %s already exists.'
                )
        );
        /*WIP
        if ($this->form_validation->run() == TRUE) {
            //email_check('email')
            $this->form_validation->set_rules('email', 'Email', 'callback_email_unique');
        }*/
        //Enforce hierachy: Default error messages first, custom error message second
        if ($this->form_validation->run() == TRUE) {
            //email_check('email')
            $this->form_validation->set_rules('email', 'Email', 'callback_email_format');
        }


        //Username rules
        $this->form_validation->set_rules(
                'username', 'Username', 'required|min_length[5]|max_length[12]'
        );
        /*$this->form_validation->set_rules(
                'username', 'Username', array(
            'required',
            array($this->Registration_Model, 'email_unique')
                )
        );*/

        $this->form_validation->set_rules('firstname', 'First Name', 'required|trim');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|trim|matches[password]');
        $this->form_validation->set_rules('accept_terms', '', 'callback_accept_terms');



        //Call validate_input to protect against XSS attacks
        $email = $this->validate_input($this->input->post('email'));
        $username = $this->validate_input($this->input->post('username'));
        $firstname = $this->validate_input($this->input->post('firstname'));
        $lastname = $this->validate_input($this->input->post('lastname'));
        $password = $this->validate_input($this->input->post('password'));
        $pass_confirm = $this->validate_input($this->input->post('confirmpassword'));
        $agreeToTerms = $this->input->post('accept_terms');
        /*if(isset($agreeToTerms)){
            var_dump((int) $agreeToTerms);
        }*/

        if ($this->form_validation->run() == FALSE) {
            //If the email (and all other variables) had an incorrect format, do the following: 
            $title = array(
                'title' => 'Registration');
            $this->load->view('header', $title);
            $this->load->view('registration_view');
            $this->load->view('footer');
        } else {
            //Otherwise, load a 'registration succeeded' page
            $title = array(
                'title' => 'Registration success');
            $this->load->view('header', $title);
            $this->load->view('registration_success');
            $this->load->view('footer');
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
    
    public function email_unique($str) {
        $this->load->database();
        $query = $this->db->get('Users');
        $query = $this->db->where('email', $str);
 
        if ($query->num_rows() > 0) {
            //echo $query;
            return true;
        } else {
            return false;
        }
        

        /*if ($str == 'test@sfsu.edu') {
            $this->form_validation->set_message('email_unique', 'The {field} field can not be the word "test"');
            return FALSE;
        } else {
            return TRUE;
        }*/
    }
    
    function accept_terms($str) {
        if (isset($str)) {
            return true;
        }

        //var_dump((int) $str);
        $this->form_validation->set_message('accept_terms', 'Please read and accept the terms and conditions.');
        return false;
    }

}
