<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 11/17/2017
 * Time: 3:45 PM
 */
?>
<section class="content-header">
    <h1><?= $this->lang->line('Manage Branch'); ?></h1>
</section>
<section class="content">
    <div class="form-group">
        <a class ='btn btn-primary' data-toggle="modal" data-target="#addBranch"><i class="fa fa-plus"></i> <?= $this->lang->line('Add new branch')?></a>
    </div>
    <div class="box box-default">
        <div class="box-body">

            <table id="dataTable" class="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th><?= $this->lang->line('Branch name'); ?></th>
                    <th><?= $this->lang->line('Language'); ?></th>
                    <th><?= $this->lang->line('Branch icon'); ?></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th><?= $this->lang->line('Branch name'); ?></th>
                    <th><?= $this->lang->line('Language'); ?></th>
                    <th><?= $this->lang->line('Branch icon'); ?></th>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach($branch as $branchs): ?>
                    <tr>
                        <td><?= $branchs['branch_name']?></td>
                        <td><?= $branchs['lang']?></td>
                        <td><?= $branchs['icon']?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>

        </div>
    </div>
</section>
</div>

<div id="addBranch" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?= $this->lang->line('Add new branch')?></h4>
            </div>
            <div class="modal-body">
                <?php echo validation_errors(); ?>
                <?php echo form_open('SysAdmin/addBranch'); ?>
                <div class="form-group">
                    <label for="label" class="text-align-left control-label"><?= $this->lang->line('Branch name')?></label>
                    <input type="text" name="branch_name" class="form-control number-field">
                </div>
                <div class="form-group">
                    <label for="lang" class="text-align-left control-label"><?= $this->lang->line('Language')?></label>
                    <select class="form-control" id="lang" name="lang_id">
                        <?php foreach($lang as $lang): ?>
                            <option value="<?= $lang['lang_acronym']?>"><?= $lang['lang_name']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="node_id" class="text-align-left control-label"><?= $this->lang->line('Branch icon')?></label>
                    <input type="text" name="icon" class="form-control number-field">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><?= $this->lang->line('Update')?></button>
            </div>
            <?php echo form_close(); ?>
        </div>

    </div>
</div>
