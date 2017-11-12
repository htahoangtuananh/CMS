<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 11/8/2017
 * Time: 2:09 PM
 */

?>
<section class="content-header">
    <h1><?= $this->lang->line('Manage Admin'); ?></h1>
</section>
<section class="content">
    <div class="form-group">
        <a data-toggle="modal" data-target="#addAdmin" class ='btn btn-primary'>
            <i class="fa fa-plus"></i> <?= $this->lang->line('Add new admin'); ?>
        </a>
    </div>
    <div class="box box-default">
        <div class="box-body">

            <table id="dataTable" class="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th><?= $this->lang->line('Admin name'); ?></th>
                    <th><?= $this->lang->line('Email'); ?></th>
                    <th><?= $this->lang->line('Created date'); ?></th>
                    <th><?= $this->lang->line('Enable'); ?></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th><?= $this->lang->line('Admin name'); ?></th>
                    <th><?= $this->lang->line('Email'); ?></th>
                    <th><?= $this->lang->line('Created date'); ?></th>
                    <th><?= $this->lang->line('Enable'); ?></th>
                </tr>
                </tfoot>
                <tbody>
                    <?php foreach($admins as $admins): ?>
                        <tr>
                            <td><?= $admins['username']?></td>
                            <td><?= $admins['email']?></td>
                            <td><?= date("Y-m-d H:i:s",$admins['created_at'])?></td>
                            <td class="toggle-button"><input data-id="<?= $admins['admin_id']; ?>" data-table="admin" data-enable='<?= $admins['is_enable'];?>'  class="toggle" <?php if($admins['is_enable']==1):?>checked<?php endif;?> data-toggle="toggle" type="checkbox"></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>

        </div>
    </div>
</section>
</div>
<div id="addAdmin" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?= $this->lang->line('Add new admin')?></h4>
            </div>
            <div class="modal-body">
                <?php echo validation_errors(); ?>
                <?php echo form_open('SysAdmin/addAdmin'); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="label" class="text-align-left col-md-4 control-label"><?= $this->lang->line('Username'); ?></label>
                            <div class="col-md-8">
                                <input type="text" name="username" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="text-align-left col-md-4 control-label"><?= $this->lang->line('Email'); ?></label>
                            <div class="col-md-8">
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="label" class="text-align-left col-md-4 control-label"><?= $this->lang->line('Password'); ?></label>
                            <div class="col-md-8">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="label" class="text-align-left col-md-4 control-label"><?= $this->lang->line('Is Sysadmin'); ?></label>
                            <div class="col-md-8">
                                <input type="checkbox" name="is_sysadmin">
                            </div>
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
<script>

    $('.toggle-button').click(function(){
        var table = $(this).find('input').attr('data-table');
        var target_id = $(this).find('input').attr('data-id');
        var enable = $(this).find('input').attr('data-enable');
        enable = (enable==0)? 1:0;
        var csrf = '<?php echo $this->security->get_csrf_token_name(); ?>';
        var csrf_token = '<?php echo $this->security->get_csrf_hash(); ?>';

        $.ajax({
            data: {'id': target_id,'table': table, 'enable': enable, '<?php echo $this->security->get_csrf_token_name(); ?>' : csrf_token},
            type: "POST",
            url: '<?= base_url()."SysAdmin/handleAjax"?>',
        }).success(function (result) {
            location.reload();
        });
    });
</script>