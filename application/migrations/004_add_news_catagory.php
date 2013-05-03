<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 003_add_news_catagory
 *
 * @author sahid
 */
class Migration_add_news_catagory extends CI_Migration {

    //put your code here
    public function up() {
        $data = array(
            'catagory_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'code' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => FALSE,
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => TRUE,
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
        $this->dbforge->add_key('catagory_id', TRUE);
        $this->dbforge->create_table('news_catagory');
    }

    public function down() {
        $this->dbforge->drop_table('news_catagory');
    }

}

?>
