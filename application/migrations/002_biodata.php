<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Biodata extends CI_Migration
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
            'nama' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'tpt_lahir' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'tgl_lahir' => array(
                'type' => 'DATETIME'
            ),
            'motto' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('biodata');
    }

    public function down()
    {
        $this->dbforge->drop_table('biodata');
    }
}
