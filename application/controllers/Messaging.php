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
        
        $this->load->view('header');
        $this->load->view('messaging/messaging_view', $data);
        $this->load->view('footer');
    }
    
    public function open($messageid) {
        $username = "Admin";
        $data['message'] = $this->messaging_model->openMessage($messageid);
        
        $this->load->view('header');
        $this->load->view('messaging/messaging_view', $data);
        $this->load->view('footer');
    }
    
    public function send($recipient = NULL, $subject = NULL) {
        $this->load->helper('form');
        
        $data['sender'] = 'Admin';
        
        if(isset($recipient)) {
            $data['recipient'] = $recipient;
        }
        if(isset($itemName)) {
            $data['subject'] = $subject;
        }
        
        $this->load->view('header');
        $this->load->view('messaging/send_message', $data);
        $this->load->view('footer');
    }
    
    public function send_message() {
        $username = "Admin";
        
        $recipient = $this->input->post('recipient');
        $subject = $this->input->post('subject');
        $contents = $this->input->post('contents');

        
        $result = $this->messaging_model->sendMessage($username, $recipient, $subject, $contents);
        
        $data['sent'] = $result;
        $this->load->view('header');
        $this->load->view('messaging/send_message', $data);
        $this->load->view('footer');
    }
}
