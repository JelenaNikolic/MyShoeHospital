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

        $data = [
            array(
                'product_title' => 'Model 1',
                'product_description'  => 'Desription 1',
                'product_price'  => '1000',
                'product_category'  => '1',
                'product_code'  => '1234',
            ),
            array(
                'product_title' => 'Model 2',
                'product_description'  => 'Desription 2',
                'product_price'  => '2000',
                'product_category'  => '2',
                'product_code'  => '2345',
            ),
			array(
                'product_title' => 'Model 3',
                'product_description'  => 'Desription 3',
                'product_price'  => '3000',
                'product_category'  => '3',
                'product_code'  => '3456',
            ),
        ];
		
		$this->products_model->clear();
		
        foreach($data as $d){
            $this->products_model->insert($d);
        }
		
		$this->load->model('shops_model');
		
		$data1 = [
            array(
                'shop_name' => 'Shop 1',
                'city'  => 'Novi Sad',
                'address'  => 'Adresa 1',
                'phone'  => '021123456',
                'shop_description'  => 'Opis 1',
            ),
            array(
                'shop_name' => 'Shop 2',
                'city'  => 'Novi Sad',
                'address'  => 'Adresa 2',
                'phone'  => '021234567',
                'shop_description'  => 'Opis 2',
            ),
			array(
                'shop_name' => 'Shop 3',
                'city'  => 'Novi Sad',
                'address'  => 'Adresa 3',
                'phone'  => '021345678',
                'shop_description'  => 'Opis 3',
            ),
        ];
		
		$this->shops_model->clear();
		
		foreach($data1 as $shops){
            $this->shops_model->insert($shops);
        }
		
        //echo "hi";
		$this->load->view('admin/dashboard.php');
    }
}
