<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    /**
	* Loads products_model
	*/
	public function __construct(){
        parent::__construct();
        $this->load->model('products_model');
    }
	
	/**
	* Loads view list.php where all the products (shoe models) are listed
	*
	*@return   string   $shoes 
	*/
    public function index()
    {
        $data['shoes'] = $this->products_model->getAll();
		$this->load->view('admin/products/list.php', $data);
    }

	/**
	* Loads view add.php with the form for adding new product
	*/
    public function add()
	{
		$this->load->view('admin/products/add.php');
	}
	
	/**
	* Inserts the data into the table products
	*/
	public function create()
	{
		if($this->products_model->insert($this->input->post())) redirect(base_url() . 'admin/shoes');
	}
	
	/**
	* Loads view edit.php with the form for editing the specific product
	* 
	* @param   int   $id
	* 
	*/
	public function edit($id)
    {
		$data['shoes'] = $this->products_model->get($id);
        $this->load->view('admin/products/edit.php', $data);
    }
	
	/**
	* Inserts the data from the form into the table products
	*/
	public function update()
	{
		$id = $this->input->post('id');

        $data = array(
            "product_code" => $this->input->post('product_code'),
            "product_title" => $this->input->post('product_title'),
            "product_description" => $this->input->post('product_description'),
            "product_price" => $this->input->post('product_price'),
            "product_category" => $this->input->post('product_category')
        );
        $this->products_model->update($id, $data);

        redirect(base_url() . 'admin/products/index', 'refresh');
	}
	
	/**
	* Deletes the product with a specific id
	* 
	* @param   int   $id
	* 
	*/
	
	public function delete($id)
	{
		$this->products_model->delete($id);
        redirect(base_url() . 'admin/products/index', 'refresh');
	}
}
