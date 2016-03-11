<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/products_list.php');
    }

    public function edit($id)
    {
        var_dump($id);
        $this->load->view('admin/edit.php');
    }
}
