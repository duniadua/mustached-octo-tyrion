<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news_model
 *
 * @author sahid
 */
class news_model extends CI_Model {
    //put your code here

     public function add(){
        $data = array(
                'catagory'=> $this->input->post('catagory'),
                'title'=> $this->input->post('title'),
                'detail'=> $this->input->post('detail'),
                'ip_address'=> $this->input->ip_address(),
                'datetime' => date('Y-m-d H:i:s'),
                'user'=> 'USER',
        );

        $this->db->insert('syariah',$data);
    }

    public function remove($id){
        $data = array(
                    'news_id' => $id,
		);

        $this->db->delete('news',$data);
    }

    public function getAll(){
        $query = $this->db->get('news');

         if($query->num_rows()>0):
             return $query;
         endif;

    }

}
?>
