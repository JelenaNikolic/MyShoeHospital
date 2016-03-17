<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Categories extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'category_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
                'unique' => TRUE
            ),
            'category_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
			),
        ));

        $this->dbforge->create_table('categories');
    }

    public function down()
    {
        $this->dbforge->drop_table('categories');
    }
}
?>