<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_validation_podcast extends CI_Migration {

    public function up()
    {

        $fields = array(
                'id' => array('type' => 'INT',
                                'auto_increment' => TRUE,
                                'unique'=> TRUE),
                'id_author' => array('type' => 'INT'),
                'title' => array('type' => 'VARCHAR'),
                'content' => array('content' => 'VARCHAR',
                                    'null' => TRUE),
                'created_at' => array('type' => 'DATETIME'),
                'status' =>array('type' => 'BOOL')
        );
        
        $this->dbforge->add_field('articles', $fields);
        $this->dbforge->create_table('articles');
    }

    public function down()
    {
    }
}