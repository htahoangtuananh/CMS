<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 11/9/2017
 * Time: 10:33 AM
 */

?>
<section class="content-header">
    <h1><?= $this->lang->line('Manage language'); ?></h1>
</section>
<section class="content">
    <div class="form-group">
        <a data-toggle="modal" data-target="#addLang" class ='btn btn-primary'>
            <i class="fa fa-plus"></i> <?= $this->lang->line('Add new language'); ?>
        </a>
    </div>
        <div class="box box-default">
            <div class="box-body">

                <table id="dataTable" class="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th><?= $this->lang->line('Language'); ?></th>
                        <th><?= $this->lang->line('Language acronym'); ?></th>
                        <th><?= $this->lang->line('Detail'); ?></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th><?= $this->lang->line('Language'); ?></th>
                        <th><?= $this->lang->line('Language acronym'); ?></th>
                        <th><?= $this->lang->line('Detail'); ?></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php foreach($lang as $lang): ?>
                        <tr>
                            <td><?= $lang['lang_name']?></td>
                            <td><?= $lang['lang_acronym']?></td>
                            <td><a href='<?= base_url()."SysAdmin/detailLang/".$lang['lang_id'] ?>'><?= $this->lang->line('Detail'); ?> <i class='fa fa-long-arrow-right'></i></a></td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>

            </div>
        </div>

</section>
</div>

<div id="addLang" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?= $this->lang->line('Add new language'); ?></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('SysAdmin/addLang'); ?>
                        <div class="form-group">
                            <label for="branch_name" class="text-align-left control-label"><?= $this->lang->line('Language name'); ?></label>
                            <input type="text" name="lang_name" class="form-control number-field">
                        </div>
                        <div class="form-group">
                            <label for="lang_acronym" class="text-align-left control-label"><?= $this->lang->line('Language acronym'); ?></label>
                            <input type="text" name="lang_acronym" class="form-control number-field">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><?= $this->lang->line('Update'); ?></button>
            </div>
            <?php echo form_close(); ?>
        </div>

    </div>
</div>

