<?php

class Products_model extends CI_Model {
	
	protected $mytable = 'products';
	
	public function insert($data){
        $this->db->insert($this->mytable, $data);
        return true;
    }
	
	
	
}

?>