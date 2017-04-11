<?php

/**
 * Created by PhpStorm.
 * User: Vivian
 * Date: 4/10/17
 * Time: 7:07 PM
 */
class Home extends CI_Controller
{
    public function index()
    {
        $title = array('title' => 'Home Page');
        $this->load->view('header', $title);
        $this->load->view('home_view');
        $this->load->view('footer');
    }
}