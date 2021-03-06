<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of teaser_model
 *
 * @author sahid
 */
class teaser_model extends CI_Model {

    //put your code here
    public function add() {
        $data = array(
            'duration' => $this->input->post('duration'),
            'direction' => $this->input->post('direction'),
            'active' => $this->input->post('active'),
            'filename' => $_FILES["userfile"]["name"],
            'create_dt' => date('Y-m-d H:i:s'),
            'ip_address' => $this->input->ip_address(),
        );

        $this->db->insert('teaser', $data);
    }
    
    public function get_all(){
        $query = $this->db->get('teaser');
        
        if($query->num_rows() > 0):
            return $query;
        else:
            return NULL;
        endif;
    }
    
    public function remove($id){
        $data = array(
                    'teaser_id' => $id,
		);

        $this->db->delete('teaser',$data);
    }

}

?>
