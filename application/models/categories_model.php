<?php

class Categories_model extends CI_Model {
	
	protected $mytable = 'categories';

    /**
	* Loads the database
	*/
	function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
	/**
	* Pulls out of a database all the categories.
	*/
	public function getAll()
	{
		return $this->db->get($this->mytable)->result();
    }
	
	/**
	* Insrets the data into the table categories
	*
	*@param   string   $data ($data has just the name of the category)
	*/
	public function insert($data)
	{
        $this->db->insert($this->mytable, $data);
        return true;
    }
	
	/**
	*
	* Delets all the categories from the table categories
	*
	*/
	public function clear()
	{
		$this->db->where( '1 = 1' );
		$this->db->delete($this->mytable);
	}
}

?>