<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news
 *
 * @author sahid
 */
class news extends CI_Controller {
    //put your code here
    public function News(){
        parent::__construct();
        $this->load->model('news_model');
    }

    public function add(){
         $ok = "<span class='label label-success'>Success</span>";
         $data['news'] = $this->news_model->getAll();

        if($this->input->post('submit')):
            $this->session->set_flashdata('mssg_ok', $ok);
            $this->news_model->add();
            redirect('news/add');
        endif;

        $data['mssg'] = $this->session->flashdata('mssg_ok') ;

        $this->load->view('html_config_min');
        $this->load->view('html_config_tinymce');
        $this->load->view('header_cp');
        $this->load->view('news',$data);
        $this->load->view('footer_cp');

    }

    public function list_news(){
        $data['news'] = $this->news_model->getAll();
        $data['mssg'] = NULL;

        $this->load->view('html_config_min');        
        $this->load->view('header_cp');
        $this->load->view('news_list',$data);
    }

    public function remove($id){        
        $this->news_model->remove($id);
        
        redirect('news/add');
    }

}
?>
