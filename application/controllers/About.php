<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('pages/about');
        $this->load->view('footer');
    }

    public function members($page) {
        $this->load->helper('url');
        switch($page) {
            case('aculanay'):
                $this->load->view('pages/about_culanay');
                $this->load->view('footer');
                break;
            case('nhoffman'):
                $this->load->view('pages/about_hoffman');
                $this->load->view('footer');
                break;
            case('vlee'):
                $this->load->view('pages/about_lee');
                $this->load->view('footer');
                break;
            case('mserna'):
                $this->load->view('pages/about_mserna');
                $this->load->view('footer');
                break;
            case('ssoult'):
                $this->load->view('pages/about_soult');
                $this->load->view('footer');
                break;
            case('jvinter-jensen'):
                $this->load->view('pages/about_vinter-jensen');
                $this->load->view('footer');
                break;
        }
    }
}