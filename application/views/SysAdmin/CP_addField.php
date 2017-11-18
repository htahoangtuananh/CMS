<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 11/2/2017
 * Time: 3:03 PM
 */
?>
    <section class="content-header">
        <h1><?= $this->lang->line('Add new node')?></h1>
    </section>
    <section class="content">
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('SysAdmin/addNode'); ?>
                        <div class="form-group">
                            <label for="branch_name" class="text-align-left control-label"><?= $this->lang->line('Node name')?></label>
                                <input type="text" name="node_name" class="form-control number-field">
                        </div>
                        <div class="form-group">
                            <label for="branch_name" class="text-align-left control-label"><?= $this->lang->line('Node link')?></label>
                            <input type="text" name="node_link" class="form-control number-field">
                        </div>

                        <div class="form-group">
                            <label for="lang" class="text-align-left control-label"><?= $this->lang->line('Language')?></label>
                                <select class="form-control" id="lang" name="lang_id">
                                    <?php foreach($lang as $langs): ?>
                                        <option value="<?= $langs['lang_acronym']?>"><?= $langs['lang_name']?></option>
                                    <?php endforeach; ?>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="node_id" class="text-align-left control-label"><?= $this->lang->line('Branch name')?></label>
                            <select class="form-control" id="node_id" name="branch_id">
                                <?php foreach($branch as $branchs): ?>
                                    <option value="<?= $branchs['branch_id']?>"><?= $branchs['branch_name']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <a data-toggle="modal" data-target="#addNode"><i class="fa fa-plus"></i> <?= $this->lang->line('Add new branch')?></a>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><?= $this->lang->line('Update')?></button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>
<div id="addNode" class="modal fade" role="dialog">
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

