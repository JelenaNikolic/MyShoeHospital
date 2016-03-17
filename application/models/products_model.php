<?php

class Products_model extends CI_Model {
	
	protected $mytable = 'products';

    /**
	* Loads the database
	*/
	function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
	/**
	* Pulls out of a database all the products with their categories.
	* Informations are pulled from table products left joind with table categories
	*/
	public function getAll()
	{
		$this->db->select('categories.name as category, products.*');
		$this->db->join('categories', 'categories.id = products.product_category', 'left');
		return $this->db->get($this->mytable)->result();
    }
		
	/**
	* Gets the specific product from the table products(model of shoes with specific id)
	*
	*@param   int   $id
	*/
	public function get($id)
	{
		return $this->db->where('product_id', $id)->get($this->mytable)->result();
	}
	
	/**
	* Insrets the data into the table products for a specific product
	*
	*@param   int      $id
	*@param   string   $data
	*/
	public function update($id, $data)
	{
		$this->db->where('product_id', $id);
        $this->db->update($this->mytable, $data);
        return true;
	}
	
	/**
	* Insrets the data into the table products
	*
	*@param   string   $data
	*/
	public function insert($data)
	{
        $this->db->insert($this->mytable, $data);
        return true;
    }
	
	/**
	* Delets specific product from the table products
	*
	*@param   int      $id
	*/
	public function delete($id)
	{
		$this->db->where('product_id', $id);
        $this->db->delete($this->mytable);
        return true;
	}
	
	/**
	*
	* Delets all the products from the table products
	*
	*/
	public function clear()
	{
		$this->db->where( '1 = 1' );
		$this->db->delete($this->mytable);
	}
}

?>