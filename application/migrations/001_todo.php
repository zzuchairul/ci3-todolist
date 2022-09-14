<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Todo extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'list' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('todo');
    }

    public function down()
    {
        $this->dbforge->drop_table('todo');
    }
}
