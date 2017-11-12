<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 11/10/2017
 * Time: 10:30 AM
 */
$lang_array = array_values($lang);
var_dump($lang_array);
?>
<section class="content-header">
    <h1><?= $language['lang_name'] ; ?> : <?= $language['lang_acronym'] ; ?></h1>
</section>
<section class="content">
    <div class="box box-primary">
        <div class="box-body">
            <?php echo validation_errors(); ?>
            <?php echo form_open('SysAdmin/detailLang/'.$language['lang_id']); ?>
            <table id="dataTable" class="dataTable" width="100%" >
                <thead>
                <tr>
                    <th><?= $this->lang->line('Language key'); ?></th>
                    <th><?= $this->lang->line('Translate'); ?></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th><?= $this->lang->line('Language key'); ?></th>
                    <th><?= $this->lang->line('Translate'); ?></th>
                </tr>
                </tfoot>

                <tbody>

                    <?php foreach ($lang_array as $key => $langs): ?>
                    <tr>
                        <td><?= $langs?></td>

                        <td><input type="text" name="<?= $key ?>"></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <button type="submit" id="submit-button" class="btn btn-primary"><?= $this->lang->line('Update'); ?></button>
            <?php echo form_close(); ?>
        </div>
    </div>
</section>
</div>
<script>
    var oTable;

    $(document).ready(function() {
        $("#submit-button").click(function(e) {
            var sData = oTable.$('input').serialize();
            $("form").submit( function() {
                $('<input />').attr('type', 'hidden')
                    .attr('name', "translate")
                    .attr('value', sData)
                    .appendTo('form');
                return true;
            });

        });

        oTable = $('#dataTable').dataTable();
    } );
</script>