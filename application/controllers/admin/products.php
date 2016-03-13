<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/products/list.php');
    }

    public function add(){
		$this->load->view('admin/products/add.php');
	}
	
	public function create(){
		$this->products_model->insert($this->input->post());
	}
	
	public function edit($id)
    {
        var_dump($id);
        $this->load->view('admin/edit.php');
    }
}
