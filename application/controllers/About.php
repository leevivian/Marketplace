<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		$this->load->view('pages/about');
	}
        
        public function members($page) {
            switch($page) {
                case('aculanay'):
                    $this->load->view('pages/about');
                    break;
                case('nhoffman'):
                    $this->load->view('pages/about');
                    break;
                case('vlee'):
                    $this->load->view('pages/about');
                    break;
                case('mserna'):
                    $this->load->view('pages/about');
                    break;
                case('ssoult'):
                    $this->load->view('pages/about_soult');
                    break;
                case('jvinter-jensen'):
                    $this->load->view('pages/about');
                    break;
            }
        }
        
        public function bootstrap() {
            $this->load->helper('html');
            $this->load->helper('url');
            $this->load->view('pages/about_bootstrap_template');
        }
}