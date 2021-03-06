<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of teaser
 *
 * @author sahid
 */
class Teaser extends CI_Controller {

    //put your code here
    public function Teaser() {
        parent::__construct();
        $this->load->model('teaser_model', 'tease');
    }

    public function index() {
        $dirpath = FCPATH.'/images/portfolio/';
        
        $data = array(
            'error' => '',            
            'teaser' => $this->tease->get_all(),
        );

        $this->load->view('html_config_min');
        $this->load->view('header_cp');
        $this->load->view('upload_teaser', $data);
        $this->load->view('footer_cp');
    }

    public function do_upload() {
        $config = array(
            'upload_path' => FCPATH . '/images/portfolio/',
            'allowed_types' => 'gif|jpg|png',
            'max_size' => 700,
            'remove_spaces' => TRUE,
            'overwrite' => TRUE,
        );

        $this->upload->initialize($config);
        

        if (!$this->upload->do_upload()):
            $this->upload->display_errors("<div class='alert'>", '</div>');
            $data = array('error' => $this->upload->display_errors());

            $this->load->view('html_config_min');
            $this->load->view('header_cp');
            $this->load->view('upload_teaser', $data);
            $this->load->view('footer_cp');
        else:
            $data = array(
                'type' => 'Uploaded',
                'class' => 'alert alert-success',
                'mssg' => 'File Uploaded',
            );

            
            $this->tease->add();

            $this->load->view('html_config_common');
            $this->load->view('header_cp');
            $this->load->view('success', $data);
            $this->load->view('footer_cp');
        endif;
    }
    
    public function delete($id){        
        $this->tease->remove($id);
        
        redirect('teaser');        
    }

}
