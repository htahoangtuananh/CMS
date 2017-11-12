<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 11/7/2017
 * Time: 10:55 AM
 */
?>
<section class="content-header">
    <h1><?= $this->lang->line('Add new admin'); ?></h1>
</section>
<section class="content">
    <div class="box box-primary">
        <div class="box-body form-horizontal">
            <?php echo validation_errors(); ?>
            <?php echo form_open('Admin/createAdmin'); ?>
            <div class="form-group">
                <label for="label" class="text-align-left col-md-2 control-label"><?= $this->lang->line('Username'); ?></label>
                <div class="col-md-7">
                    <input type="text" name="username" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="text-align-left col-md-2 control-label"><?= $this->lang->line('Email'); ?></label>
                <div class="col-md-7">
                    <input type="email" name="email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="label" class="text-align-left col-md-2 control-label"><?= $this->lang->line('Password'); ?></label>
                <div class="col-md-7">
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="label" class="text-align-left col-md-2 control-label"><?= $this->lang->line('Is Sysadmin'); ?></label>
                <div class="col-md-7">
                    <input type="checkbox" name="is_sysadmin">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <button type="submit" class="btn btn-primary"><?= $this->lang->line('Update'); ?></button>
                </div>
            </div>
        </div>
    </div>
</section>
