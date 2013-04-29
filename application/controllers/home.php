<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author sahid
 */
class Home extends CI_Controller {
    //put your code here
    public function Home(){
        parent::__construct();
    }
    
    public function index(){
        $data = array(
            'active' => 'y',
        );
        
        $this->load->view('html_config_common');
        $this->load->view('header',$data);
        $this->load->view('body');
        $this->load->view('footer');
    }
}
