<?php

class Products_model extends CI_Model {
	
	protected $mytable = 'products';

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
	public function insert($data){
        $this->db->insert($this->mytable, $data);
        return true;
    }
	
	
	
}

?>