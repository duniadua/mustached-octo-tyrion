<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of migrate
 *
 * @author sahid
 */
class migrate extends CI_Controller {

//put your code here
    public function ver($ver) {
        $this->load->library('migration');

        if (!$this->migration->version($ver)):
            show_error($this->migration->error_string());
        else:
            echo 'migration success -'.$ver.br();
        endif;
            
        
    }

}
