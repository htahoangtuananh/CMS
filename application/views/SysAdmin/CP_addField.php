<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 11/2/2017
 * Time: 3:03 PM
 */
?>
    <section class="content-header">
        <h1>Thêm mục mới</h1>
    </section>
    <section class="content">
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('SysAdmin/addBranch'); ?>
                        <div class="form-group">
                            <label for="branch_name" class="text-align-left control-label">Tên mục</label>
                                <input type="text" name="branch_name" class="form-control number-field">
                        </div>
                        <div class="form-group">
                            <label for="node_id" class="text-align-left control-label">Thư mục cha</label>
                            <select class="form-control" id="node_id">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lang" class="text-align-left control-label">Ngôn ngữ</label>
                            <select class="form-control" id="lang">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <a data-toggle="modal" data-target="#addNode"><i class="fa fa-plus"></i> Thêm thư mục cha</a>
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
<div id="addNode" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thêm thư mục cha</h4>
            </div>
            <div class="modal-body">
                <?php echo validation_errors(); ?>
                <?php echo form_open('SysAdmin/addNode'); ?>
                <div class="form-group">
                    <label for="label" class="text-align-left control-label">Tên mục</label>
                    <input type="text" name="node_name" class="form-control number-field">
                </div>
                <div class="form-group">
                    <label for="lang" class="text-align-left control-label">Ngôn ngữ</label>
                    <select class="form-control" id="lang">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
            <?php echo form_close(); ?>
        </div>

    </div>
</div>

