<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function index()
    {
<<<<<<< HEAD:application/controllers/admin/shoes.php
        $this->load->view('admin/shoes.php');
=======
        $this->load->view('admin/products/list.php');
>>>>>>> 0116594653c719a48ef3bddbfd76af8f9ea39ef7:application/controllers/admin/products.php
    }

    public function edit($id)
    {
        var_dump($id);
        $this->load->view('admin/edit.php');
    }
}
