<?php

class Shops_model extends CI_Model {
	
	protected $mytable = 'shops';

    /**
	* Loads the database
	*/
	function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
	/**
	* Pulls out of a database all the shops.
	*/
	public function getAll()
	{
        return $this->db->get($this->mytable)->result();
    }
	
	/**
	* Gets the specific shop from the table shops
	*
	*@param   int   $id
	*/
	public function get($id)
	{
		return $this->db->where('shop_id', $id)->get($this->mytable)->result();
	}
	
	/**
	* Insrets the data into the table shops for a specific product
	*
	*@param   int      $id
	*@param   string   $data
	*/
	public function update($id, $data)
	{
		$this->db->where('shop_id', $id);
        $this->db->update($this->mytable, $data);
        return true;
	}
	
	/**
	* Insrets the data into the table shops
	*
	*@param   string   $data
	*/
	public function insert($data)
	{
        $this->db->insert($this->mytable, $data);
        return true;
    }
	
	/**
	* Delets specific shop from the table shops
	*
	*@param   int      $id
	*/
	public function delete($id)
	{
		$this->db->where('shop_id', $id);
        $this->db->delete($this->mytable);
        return true;
	}
	
	/**
	*
	* Delets all the shops from the table shops
	*
	*/
	public function clear()
	{
		$this->db->where( '1 = 1' );
		$this->db->delete($this->mytable);
	}
}

?>