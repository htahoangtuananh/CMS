<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 11/22/2017
 * Time: 10:43 AM
 */
?>
<section class="content-header">
    <h1><?= $class['class_name'];?></h1>
</section>
<section class="content">
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('Admin/viewClass/'.$class['class_id']); ?>
                        <div class="form-group">
                            <label for="branch_name" class="text-align-left control-label"><?= $this->lang->line('Class name')?></label>
                            <input type="text" name="class_name" class="form-control number-field" value="<?= $class['class_name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="branch_name" class="text-align-left control-label"><?= $this->lang->line('Class link')?></label>
                            <input type="text" name="class_link" class="form-control number-field" value="<?= $class['class_link'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="branch_name" class="text-align-left control-label"><?= $this->lang->line('Class content')?></label>
                            <textarea rows="5" cols="50" name="class_content" class="form-control number-field" ><?= $class['class_content'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="branch_name" class="text-align-left control-label"><?= $this->lang->line('Class description')?></label>
                            <textarea rows="5" cols="50" name="class_description" class="form-control number-field" ><?= $class['class_description'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="lang" class="text-align-left control-label"><?= $this->lang->line('Language')?></label>
                            <select class="form-control" id="lang" name="lang">
                                <?php foreach($lang as $langs): ?>
                                    <option value="<?= $langs['lang_acronym']?>" <?php if($langs['lang_acronym']==$class['lang']): ?> selected <?php endif;?>><?= $langs['lang_name']?></option>
                                <?php endforeach; ?>
                            </select>
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



