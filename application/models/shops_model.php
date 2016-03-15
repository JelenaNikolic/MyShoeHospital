<?php

class Shops_model extends CI_Model {
	
	protected $mytable = 'shops';

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
		return $this->db->where('shop_id', $id)->get($this->mytable)->result();
	}
	
	public function update($id, $data)
	{
		$this->db->where('shop_id', $id);
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
		$this->db->where('shop_id', $id);
        $this->db->delete($this->mytable);
        return true;
	}
	
}

?>