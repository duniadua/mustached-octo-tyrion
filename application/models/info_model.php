<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of info_model
 *
 * @author sahid
 */
class info_model extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function add(){
        $data =  array(
            'detail' => $this->input->post('detail'),
            'active' => $this->input->post('active'),
        );
        
        $this->db->insert('info',$data);
    }
    
     public function remove($id){
        $data = array(
                    'info_id' => $id,
		);

        $this->db->delete('info',$data);
    }
    
    public function get_all(){
        $query = $this->db->get('info');
        
        if($query->num_rows()>0):
             return $query;
         endif;
        
    }
    
    
    
}
