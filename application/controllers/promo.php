<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of promo
 *
 * @author sahid
 */
class Promo extends CI_Controller {

    //put your code here
    public function Promo() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('html_config_common');
        $this->load->view('header');
        $this->load->view('promo');
        $this->load->view('footer');
    }

}

?>
