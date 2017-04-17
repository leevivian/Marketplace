<?php
/**
 * Created by PhpStorm.
 * User: Nick_2
 * Date: 4/10/2017
 * Time: 7:30 PM
 */

class Registration extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        /**
         * and form helper
         * Url helper is needed for bootstrap.
         */
        $this->load->helper('form');
        $this->load->helper('url');
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
}