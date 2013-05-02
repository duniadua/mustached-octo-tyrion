<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container">
    <div class="span5">
        <div class="form">
            <fieldset>
                <legend> Add New News</legend>
                <?php
                echo form_open('news/add');
                echo form_label('News Title') . "\n";
                echo form_input('title') . "\n";

                echo form_label('Category') . "\n";
                $catagory = array(
                    'HL' => 'Headline',
                    'SY' => 'Syariah',
                    'PR' => 'Promo',
                );

                echo form_dropdown('catagory', $catagory, '1');
                echo form_label('Details') . "\n";

                $detail = array(
                    'name' => 'detail',
                    'id' => 'elm1',
                    'rows' => '10',
                    'cols' => '70',
                    'styles' => 'width: 50%',
                );

                echo form_textarea($detail);

                echo br() . "\n";
                echo form_submit('submit', 'Simpan', "class='btn btn-primary'") . "\n";
                echo $mssg;
                echo form_close();
                ?>
            </fieldset>
        </div>
    </div>
    <div class="span5">
        <div class="form">
            <fieldset>
                <legend> News Information</legend>
                <table class="table table-bordered table-condensed table-striped">
                    <tr><th>NO.</th><th>TITLE</th><th>ACTION</th></tr>
<?php
$i = 1;
if (empty($news)):
    echo "<tr><td>" . $i++ . "</td><td>Record Not Found</td><td><a class='btn btn-mini btn-danger' href='#'><i class='icon-remove'></i></a></td></tr>";
else:
    foreach ($news->result() as $row):
        echo "<tr><td>" . $i++ . "</td><td>" . $row->title . "</td><td><a class='btn btn-mini btn-danger' href=" . site_url() . '/news/remove/' . $row->news_id . "><i class='icon-remove'></i></a></td></tr>";
    endforeach;
endif;
?>
                </table>
                    <?php
                    if ($mssg != NULL):
                        echo $mssg;
                    endif;
                    ?>
            </fieldset>
        </div>
    </div>
</div>
