<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of 001_add_user
 *
 * @author sahid
 */
class Migration_add_user extends CI_Migration {

    //put your code here
    public function up() {
        $user = array(
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
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
                'constraint' => '100',
            ),
        );


        $this->dbforge->add_field($user);
        $this->dbforge->add_key('user_id', TRUE);
        $this->dbforge->create_table('uadmin');
        
        $data = array(
            'username' => 'sahid',
            'password' => 'sahid',
            'create_dt' => date('Y-m-d H:i:s'),
            'ip_address' => '127.0.0.1',
        );
        
        $this->db->insert('uadmin',$data);
    }

    public function down() {
        $this->dbforge->drop_table('uadmin');
    }

}

?>
