<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
echo $error;

echo form_open_multipart('teaser/do_upload');
?>
<div class="container">
    <div class="form">
        <fieldset>
            <legend> Upload Teaser</legend>
            <?php
            echo form_label('Delay Duration') . "\n";
            
            $duration = array(
                '1000' => '1000ms',
                '2000' => '2000ms',
                '3000' => '3000ms',
                '4000' => '4000ms',
            );
            
            echo form_dropdown('duration',$duration) . "\n";
            echo form_label('Direction') . "\n";

            $options = array(
                'top' => 'Top',
                'bottom' => 'Bottom',
            );

            echo form_dropdown('direction', $options, 'top') . br() . "\n";
            
            $active = array(
                'Y' => 'Yes',
                'N' => 'No',
            );
            
            echo form_label('Active') . "\n";
            echo form_dropdown('active', $active) . br() . "\n";
            echo form_label('File Name') . "\n";
            echo form_upload('userfile') . br() . "\n";            
            echo form_submit('submit', 'Simpan', "class='btn btn-primary'") . "\n";
            echo form_close();
            ?>
        </fieldset>
    </div>
</div>

