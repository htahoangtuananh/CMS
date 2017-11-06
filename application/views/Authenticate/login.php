<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 10/30/2017
 * Time: 10:52 AM
 */
?>

<div class="col-md-offset-3 col-md-6 admin">
    <div class="panel panel-default">
        <div class="panel-heading left-text">
            <h4><strong>Admin login</strong></h4>
        </div>
        <div class="panel-body">
            <?php echo validation_errors(); ?>
            <?php echo form_open('Authentication/login_admin'); ?>
            <div class="form-group form-label">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter username">
            </div>
            <div class="form-group form-label">
                <label for="exampleInputPassword1">Password <a href="#">(forgot password)</a></label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-primary btn-default">Login</button>
            <?php echo form_close();?>
        </div>
    </div>
</div>
