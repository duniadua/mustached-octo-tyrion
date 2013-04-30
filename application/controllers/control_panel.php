<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of control_panel
 *
 * @author sahid
 */
class Control_panel extends CI_Controller{
    //put your code here
    public function index(){
        $this->load->view('html_config_common');
        $this->load->view('header_cp');
        $this->load->view('home_cp');
        $this->load->view('footer_cp');
    }
}
