<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
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
                 $data['title'] = "Services";
                 $data['desc'] = "Our global network and full-service team of airfreight and expedited freight professionals are ready to help.";
                $this->load->view('ecgit/services',$data);
	}
}
