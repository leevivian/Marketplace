<?php

/**
 * Created by PhpStorm.
 * User: matthewserna
 * Date: 4/7/17
 * Time: 4:08 PM
 */
class Listing extends CI_Controller
{
    public function index()
    {
        $title = array('title' => 'Search Listing');
        $this->load->view('header', $title);
        //Specific page
        $this->load->view('footer');
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Listings_model');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function show_listing()
    {
        $this->load->view('listing_view');
    }

}