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
class Teaser extends CI_Controller{
    //put your code here
    public function Teaser(){
        
    }
    
    public function index(){
        $this->load->view('html_config_common');
        $this->load->view('header_cp');
        $this->load->view('upload_teaser');
        $this->load->view('footer_cp');
    }
    
    public function do_upload(){
        
    }
}

