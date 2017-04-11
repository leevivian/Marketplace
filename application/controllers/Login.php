<?php

/**
 * Created by PhpStorm.
 * User: aculanay
 * Date: 4/9/17
 * Time: 1:15 PM
 */
class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        /** loads 'search_model' so we can call get_items()
         *  and form helper
         *  Url helper is needed for bootstrap. */
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index(){

        //loads login_view.php
        $title = array(
            'title' => 'Log In');
        $this->load->view('header', $title);
        $this->load->view('login_view');
        $this->load->view('footer');

    }
}