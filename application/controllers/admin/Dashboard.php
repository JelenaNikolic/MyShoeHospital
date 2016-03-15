<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
	public function index()
    {
        $this->load->library('migration');
        if (!$this->migration->current()){
            show_error($this->migration->error_string());
        }
		
		$this->load->model('products_model');

        //echo "hi";
		$this->load->view('admin/dashboard.php');
    }
}
