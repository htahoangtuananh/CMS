<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 9/5/2017
 * Time: 10:44 AM
 */
?>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row text-center white-text">
                <div class="col-sm-6 col-sm-offset-3">
                    <br><br> <h2 style="color:#0fad00">Success</h2>
                    <div class="row">
                        <img src='<?php echo base_url()."assets/img/check.png"?>' style='max-width: 100%;max-height: 100px'>
                    </div>
                    <div class="row white-text">
                        <p>Cảm ơn bạn đã đăng ký. Đơn đăng ký của bạn sẽ được kiểm duyệt và kết quả sẽ được thông báo qua e-mail <strong><?php echo $email?></strong> hoặc số điện thoại đã đăng ký </p>
                    </div>
                        <a href="<?php echo base_url()."/home"?>" class="btn btn-success">Quay lại trang chủ</a>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
