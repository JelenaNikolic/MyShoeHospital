<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_shops extends CI_Migration
{

    public function up()
    {
		$this->dbforge->add_field(array(
            'shop_id' => array(
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE,
                'unique' => TRUE
            ),
            'shop_name' => array(
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ),
            'city' => array(
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ),
            'address' => array(
                'type'       => 'VARCHAR',
                'constraint'     => '255',
            ),
            'phone' => array(
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ),
            'shop_description' => array(
                'type'            => 'TEXT',
                'null'            => TRUE,
            ),
        ));
		
/*<<<<<<< HEAD
=======
//		$this->dbforge->drop_table('shops');
>>>>>>> 947d544fd65143d002b0d4edcd6210a115f99e53
        $this->dbforge->create_table('shops');*/
    }

    public function down()
    {
        $this->dbforge->drop_table('shops');
    }
}
?>