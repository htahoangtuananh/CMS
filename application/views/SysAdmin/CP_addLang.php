<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 11/6/2017
 * Time: 3:15 PM
 */
?>
    <section class="content-header">
        <h1><?= $this->lang->line('Add new language'); ?></h1>
    </section>
    <section class="content">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-body">
                            <?php echo validation_errors(); ?>
                            <?php echo form_open('SysAdmin/addAdmin'); ?>
                            <div class="form-group">
                                <label for="branch_name" class="text-align-left control-label"><?= $this->lang->line('Language name'); ?></label>
                                <input type="text" name="lang_name" class="form-control number-field">
                            </div>
                            <div class="form-group">
                                <label for="lang_acronym" class="text-align-left control-label"><?= $this->lang->line('Language acronym'); ?></label>
                                <input type="text" name="lang_acronym" class="form-control number-field">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><?= $this->lang->line('Update'); ?></button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
