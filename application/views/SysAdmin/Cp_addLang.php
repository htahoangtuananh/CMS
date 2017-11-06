<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 11/6/2017
 * Time: 3:15 PM
 */
?>
<div class="content-wrapper" style="min-height: 960.3px;">
    <section class="content-header">
        <h1>Thêm ngôn ngữ mới</h1>
    </section>
    <section class="content">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-body">
                            <?php echo validation_errors(); ?>
                            <?php echo form_open('SysAdmin/addLang'); ?>
                            <div class="form-group">
                                <label for="branch_name" class="text-align-left control-label">Tên ngôn ngữ</label>
                                <input type="text" name="branch_name" class="form-control number-field">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
