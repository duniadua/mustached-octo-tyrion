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
    }

    public function index() {
        $data = array(
            'error' => '',
        );

        $this->load->view('html_config_common');
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
        );

        $this->upload->initialize($config);

        if (!$this->upload->do_upload()):
            $data = array('error' => $this->upload->display_errors());

            $this->load->view('html_config_common');
            $this->load->view('header_cp');
            $this->load->view('upload_teaser', $data);
            $this->load->view('footer_cp');
        else:
            $data = array(
                'type' => 'Uploaded',
                'mssg' => 'File Uploaded',
            );
            
            $this->load->view('html_config_common');
            $this->load->view('header_cp');
            $this->load->view('success', $data);
            $this->load->view('footer_cp');
        endif;
    }

}

