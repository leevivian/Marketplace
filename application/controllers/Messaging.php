<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messaging extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('messaging_model');
    }
    
    public function index(){
        $username = "Admin";
        $messages = $this->messaging_model->getMessages($username);
        $data['messages'] = $messages;
        
        $title = array(
            'title' => 'Messaging');
        $this->load->view('header', $title);
        $this->load->view('messaging/messaging_view', $data);
        $this->load->view('footer');
    }
    
    public function open() {
        
    }
}