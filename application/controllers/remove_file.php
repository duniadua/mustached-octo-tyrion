<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of remove_file
 *
 * @author sahid
 */
class Remove_file extends CI_Controller{
    //put your code here
    public function index(){
        
        $dirpath = FCPATH.'/images/portfolio/';
        $namafile = get_dir_file_info($dirpath,$top_level_only = TRUE);
                
        foreach ($namafile as $key => $value):
            echo $value['name'].' - ';
            echo $value['size'].'kb'.br();
        endforeach;
            
        
    }

    public function teaser(){
        
        
    }
    
}

?>
