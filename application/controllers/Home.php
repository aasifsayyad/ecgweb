<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
      public function __construct() {
        parent::__construct();
        $this->load->database();        	
        $this->load->library('session');
        $this->load->library('form_validation');
        //$this->load->model('jsw_model');
        $this->load->helper('file');
        $this->load->helper(array('form', 'url'));
         /* cache control */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
	public function index()
	{
                    //$this->jsw_model->is_logged_in();      
		$this->load->view('ecgit/index');
	}
}
