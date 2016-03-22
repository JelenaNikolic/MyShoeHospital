<?php

class Products_shops_model extends CI_Model {
	
	protected $mytable = 'products_shops';

    /**
	* Loads the database
	*/
	function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
	public function get($id)
	{
		$products = $this->db->where('shop_id', $id)->get($this->mytable)->result();
		
		$products_shop = array();
		foreach($products as $p){
			$products_shop[] = $p->product_id;
		}
		return $products_shop;	
	}
	
	public function insert($data)
	{
        $this->db->insert($this->mytable, $data);
        return true;
    }
	
	/**
	* Delets specific shop from the table products_shops
	*
	*@param   int      $id
	*/
	public function delete($id)
	{
		$this->db->where('shop_id', $id);
        $this->db->delete($this->mytable);
        return true;
	}
}

?>