<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shops extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('shops_model');
    }

    public function index()
    {
        $data['shops'] = $this->shops_model->getAll();
		$this->load->view('admin/shops/list.php', $data);
    }

    public function add()
	{
		$this->load->view('admin/shops/add.php');
	}
	
	public function create()
	{
		if($this->shops_model->insert($this->input->post())) redirect(base_url() . 'admin/shops');
	}
	
	public function edit($id)
    {
		$data['shops'] = $this->shops_model->get($id);
        $this->load->view('admin/shops/edit.php', $data);
    }
	public function update()
	{
		$id = $this->input->post('id');

        $data = array(
            "shop_name" => $this->input->post('shop_name'),
            "city" => $this->input->post('city'),
            "address" => $this->input->post('address'),
            "phone" => $this->input->post('phone'),
            "shop_description" => $this->input->post('shop_description')
        );
        $this->shops_model->update($id, $data);

        redirect(base_url() . 'admin/shops/index', 'refresh');
	}
	
	public function delete($id)
	{
		$this->shops_model->delete($id);
        redirect(base_url() . 'admin/shops/index', 'refresh');
	}
}
