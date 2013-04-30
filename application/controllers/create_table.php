<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of create_table
 *
 * @author sahid
 */
class create_table extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->dbforge();
    }


    public function up() {
        $teaser = array(
            'teaser_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'duration' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'direction' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'filename' => array(
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
                'type' => 'date',                
            ),
            'ip_address' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
        );

        
        $this->dbforge->add_field($teaser);
        $this->dbforge->add_key('teaser_id', TRUE);
        $this->dbforge->create_table('teaser');
        echo 'table created';
    }

    public function down() {
        $this->dbforge->drop_table('teaser');        
        echo 'table droped';
    }

}

?>
