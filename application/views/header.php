<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="container">
    <div class="line"></div>
    <div class="row-fluid">
            <ul class="nav nav-pills cssmenus">
                <li>
                <a href="<?php echo site_url('/home')?>"> Home</a>
            </li>
            <li <?php // echo $active; ?>><a href="<?php echo site_url('/promo')?>"> Promo</a></li>
            <li <?php // echo $active; ?>><a href="<?php echo site_url('/news')?>"> News</a></li>
            <li <?php // echo $active; ?>><a href="<?php echo site_url('/syariah')?>"> Syariah</a></li>
            <li <?php // echo $active; ?>><a href="<?php echo site_url('/gallery')?>"> Gallery</a></li>
            <li <?php // echo $active; ?>><a href="<?php echo site_url('/community')?>"> Community</a></li>
            <li><a href="#">Signin</a></li>
        </ul>
    </div>
</div>

