<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $this->load->library('migration');
        if (!$this->migration->current()){
            show_error($this->migration->error_string());
        }


        $data = [
            array(
                'title' => 'dadasdas',
                'desc'  => 'dasdasd'
            ),
            array(
                'title' => 'dadasdas',
                'desc'  => 'dasdasd'
            ),.....
        ]


        foreach($data as $d){
            insert($d)
        }

        //echo "hi";
		$this->load->view('admin/dashboard.php');
    }
}
