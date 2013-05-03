<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 003_add_information
 *
 * @author sahid
 */
class Migration_add_info extends CI_Migration{

    //put your code here
    public function up() {
        $data = array(
            'info_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'detail' => array(
                'type' => 'TEXT',
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
        $this->dbforge->add_key('info_id', TRUE);
        $this->dbforge->create_table('info');
    }

    public function down() {
        $this->dbforge->drop_table('info');
    }

}

?>
