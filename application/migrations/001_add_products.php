<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_products extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'product_id' => array(
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE,
                'unique' => TRUE
            ),
            'product_title' => array(
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ),
            'product_description' => array(
                'type'            => 'TEXT',
                'null'            => TRUE,
            ),
        ));

        $this->dbforge->create_table('products');
    }

    public function down()
    {
        $this->dbforge->drop_table('products');
    }
}
?>