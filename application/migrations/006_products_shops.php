<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Products_shops extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
                'unique' => TRUE
            ),
			'product_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => FALSE,
                'unique' => FALSE
            ),
            'shop_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => FALSE,
                'unique' => FALSE
			),
        ));

        $this->dbforge->create_table('products_shops');
    }

    public function down()
    {
        $this->dbforge->drop_table('products_shops');
    }
}
?>