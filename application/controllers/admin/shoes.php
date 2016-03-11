<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shoes extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/Shoes.php');
    }

    public function edit($id)
    {
        var_dump($id);
        $this->load->view('admin/edit.php');
    }
}
