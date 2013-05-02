<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
echo doctype('html5')."\n";

$meta = array(
    array('name' => 'robots', 'content' => 'no-cache'),
    array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0'),
    array('name' => 'description', 'content' => 'K-Link Member'),
    array('name' => 'keywords', 'content' => 'Welcome to K-Link Member'),
    array('name' => 'robots', 'content' => 'no-cache'),
    array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
);

echo meta($meta);

echo link_tag('bootstrap/css/bootstrap.css')."\n";
echo link_tag('bootstrap/css/custom.css') . "\n";
echo link_tag('web_font/styles.css') . "\n";
?>
<script src="<?php echo base_url()?>scripts/jquery-1.7.1.min.js"></script>
<script src="<?php echo base_url()?>bootstrap/js/bootstrap.js"></script>
