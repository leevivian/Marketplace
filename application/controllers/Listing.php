<?php

/**
 * Created by PhpStorm.
 * User: matthewserna
 * Date: 4/7/17
 * Time: 4:08 PM
 */
class Listing extends CI_Controller
{
    public function index(){
        $title = array('title' => 'Search Listing');
        $this->load->view('header', $title);
        //Specific page
        $this->load->view('footer');
    }
}