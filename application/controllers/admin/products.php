<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('products_model');
    }

    public function index()
    {
        $data['shoes'] = $this->products_model->getAll();
        //var_dump($data);
		$this->load->view('admin/products/list.php', $data);
		//$this->load->view('admin/products/list.php');
    }

    public function add(){
		$this->load->view('admin/products/add.php');
	}
	
	public function create(){
		if($this->products_model->insert($this->input->post())) redirect(base_url() . 'admin/shoes/add');

	}
	
	public function edit($id)
    {
        //var_dump($id);
        $this->load->view('admin/edit.php');
    }
}
