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
	* Insrets the data into the table categories
	*
	*@param   string   $data
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