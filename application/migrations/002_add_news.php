<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 001_add_news
 *
 * @author sahid
 */
class Migration_add_news extends CI_Migration {

    //put your code here
    public function up() {
        $data = array(
            'news_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'catagory' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => FALSE,
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => TRUE,
            ),
            'detail' => array(
                'type' => 'TEXT',                
                'null' => FALSE,
            ),
            'active' => array(
                'type' => 'INT',
                'constraint' => 9,
                'default' => '0'
            ),
            'create_dt' => array(
                'type' => 'datetime',
            ),
            'ip_address' => array(
                'type' => 'VARCHAR',
                'constraint' => '60',
            ),
            'user' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
            ),
        );


        $this->dbforge->add_field($data);
        $this->dbforge->add_key('news_id', TRUE);
        $this->dbforge->create_table('news');


    }

    public function down() {
        $this->dbforge->drop_table('news');
    }

}

?>
