<?php

/**
 * Created by PhpStorm.
 * User: matthewserna
 * Date: 4/6/17
 * Time: 6:30 PM
 */
class Listings_model extends CI_Controller
{
    public function index(){
        $title = array('title' => 'Search Listing');
        $this->load->view('header', $title);
        //Specific page
        $this->load->view('footer');
    }
}

