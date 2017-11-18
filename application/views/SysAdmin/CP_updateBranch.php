<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 11/16/2017
 * Time: 1:54 PM
 */
?>
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
                        <?php echo form_open('SysAdmin/updateBranch/'.$branch['branch_id']); ?>
                        <div class="form-group">
                            <label for="branch_name" class="text-align-left control-label"><?= $this->lang->line('Branch name')?></label>
                            <input type="text" name="branch_name" class="form-control number-field" value="<?= $branch['branch_name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="lang" class="text-align-left control-label"><?= $this->lang->line('Language')?></label>
                            <select class="form-control" id="lang" name="lang_id">
                                <?php foreach($lang as $langs): ?>
                                    <option value="<?= $langs['lang_acronym']?>" <?php if($langs['lang_acronym']==$branch['lang']): ?> selected <?php endif;?>><?= $langs['lang_name']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="node_id" class="text-align-left control-label"><?= $this->lang->line('Branch icon')?></label>
                            <input type="text" name="icon" class="form-control number-field" value="<?= $branch['icon']?>">
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


