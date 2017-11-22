<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 11/18/2017
 * Time: 10:45 AM
 */
?>
<section class="content-header">
    <h1><?= $this->lang->line('Manage class'); ?></h1>
</section>
<section class="content">
    <div class="form-group">
        <a class ='btn btn-primary' data-toggle="modal" data-target="#addClass"><i class="fa fa-plus"></i> <?= $this->lang->line('Add new class')?></a>
    </div>
    <div class="box box-default">
        <div class="box-body">

            <table id="dataTable" class="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th><?= $this->lang->line('Class name'); ?></th>
                    <th><?= $this->lang->line('Class link'); ?></th>
                    <th><?= $this->lang->line('Language'); ?></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th><?= $this->lang->line('Class name'); ?></th>
                    <th><?= $this->lang->line('Class link'); ?></th>
                    <th><?= $this->lang->line('Language'); ?></th>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach($class as $classes): ?>
                    <tr>
                        <td><a href='<?= base_url()."Admin/viewClass/".$classes["class_id"]?>'><?= $classes['class_name']?></a></td>
                        <td><?= $classes['class_link']?></td>
                        <td><?= $classes['lang']?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>

        </div>
    </div>
</section>
</div>

<div id="addClass" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?= $this->lang->line('Add new class')?></h4>
            </div>
            <div class="modal-body">
                <?php echo validation_errors(); ?>
                <?php echo form_open('Admin/addClass'); ?>
                <div class="form-group">
                    <label for="label" class="text-align-left control-label"><?= $this->lang->line('Class name')?></label>
                    <input type="text" name="class_name" class="form-control number-field">
                </div>
                <div class="form-group">
                    <label for="label" class="text-align-left control-label"><?= $this->lang->line('Class link')?></label>
                    <input type="text" name="class_link" class="form-control number-field">
                </div>
                <div class="form-group">
                    <label for="label" class="text-align-left control-label"><?= $this->lang->line('Class content')?></label>
                    <textarea rows="4" cols="50" name="class_content" class="form-control number-field"></textarea>
                </div>
                <div class="form-group">
                    <label for="label" class="text-align-left control-label"><?= $this->lang->line('Class description')?></label>
                    <textarea rows="4" cols="50" name="class_description" class="form-control number-field"></textarea>
                </div>
                <div class="form-group">
                    <label for="lang" class="text-align-left control-label"><?= $this->lang->line('Language')?></label>
                    <select class="form-control" id="lang" name="lang">
                        <?php foreach($lang as $lang): ?>
                            <option value="<?= $lang['lang_acronym']?>"><?= $lang['lang_name']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><?= $this->lang->line('Update')?></button>
            </div>
            <?php echo form_close(); ?>
        </div>

    </div>
</div>
