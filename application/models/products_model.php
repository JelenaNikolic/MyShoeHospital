<?php

class Products_model extends CI_Model {
	
	protected $mytable = 'products';

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
	public function getAll()
	{
        return $this->db->get($this->mytable)->result();
    }
	
	public function get($id)
	{
		return $this->db->where('product_id', $id)->get($this->mytable)->result();
	}
	
	public function update($id, $data)
	{
		$this->db->where('product_id', $id);
        $this->db->update($this->mytable, $data);
        return true;
	}
	
	public function insert($data)
	{
        $this->db->insert($this->mytable, $data);
        return true;
    }
	
	public function delete($id)
	{
		$this->db->where('product_id', $id);
        $this->db->delete($this->mytable);
        return true;
	}
	
	public function clear()
	{
		$this->db->where( '1 = 1' );
		$this->db->delete($this->mytable);
	}
}

?>