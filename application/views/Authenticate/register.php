<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 8/31/2017
 * Time: 10:30 AM
 */
?>
<div class="col-md-12 register">
    <div class="panel panel-default">
        <div class="panel-heading left-text">
            <h4><strong>Đăng ký</strong></h4>
        </div>
        <div class="panel-body">
            <?php echo validation_errors(); ?>
            <?php echo form_open('Register/index','id="registration"'); ?>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel-heading left-text black-text">
                        <h4><strong>Thông tin cơ bản</strong></h4>
                        <hr class="hr-default">
                    </div>

                    <div class="panel-body">
                        <div class="form-group form-label">
                            <label for="username">Họ và tên</label>
                            <input type="text" name="fullname" class="form-control" placeholder="Nhập họ và tên" data-validation-length="min10" >
                        </div>

                        <div class="form-group form-label">
                            <label for="exampleInputPassword1">Giới tính</label>
                            <div class="form-group form-label">
                                <div class="radio">
                                    <label><input type="radio" name="gender" checked value="1">Nam</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="gender" value="0">Nữ</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-label">
                            <label for="DOB">Ngày sinh</label>
                            <input type="text" name="DOB" class="form-control datepicker" placeholder="Nhập ngày sinh">
                        </div>

                        <div class="form-group form-label">
                            <label for="identification_number">Số CMND/CCCD</label>
                            <input type="number" name="identification_number" class="form-control" placeholder="Nhập số CMND/CCCD">
                        </div>

                        <div class="form-group form-label">
                            <label for="identification_date">Ngày cấp</label>
                            <input type="text" name="identification_date" class="form-control datepicker" placeholder="Ngày cấp CMND/CCCD">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel-heading left-text black-text">
                        <h4><strong>Thông tin liên hệ</strong></h4>
                        <hr class="hr-default">
                    </div>

                    <div class="panel-body">
                        <div class="form-group form-label">
                            <label for="address">Địa chỉ</label>
                            <input type="text" name="address" class="form-control" placeholder="Nhập dịa chỉ">
                        </div>
                        <div class="form-group form-label">
                            <label for="city">Thành phố </label>
                            <select class="select2 form-control" name='city'>
                                <?php foreach ( $cities as $city):?>
                                <option value='<?php echo $city['id']?>'><?= $city['city_name']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group form-label">
                            <label for="phone_number">Điện thoại</label>
                            <input type="number" name="phone_number" class="form-control" placeholder="Nhập số điện thoại">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel-heading left-text black-text">
                        <h4><strong>Tài khoản đăng nhập</strong></h4>
                        <hr class="hr-default">
                    </div>

                    <div class="panel-body">
                        <div class="form-group form-label">
                            <label for="username">Tên đăng nhập</label>
                            <input type="text" name="username" class="form-control" placeholder="Nhập tên đăng nhập">
                        </div>
                        <div class="form-group form-label">
                            <label for="password">Mật khẩu </label>
                            <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="form-group form-label">
                            <label for="repassword">Nhập lại mật khẩu </label>
                            <input type="password" name="repassword" class="form-control" placeholder="Nhập lại mật khẩu">
                        </div>
                        <div class="form-group form-label">
                            <label for="email">E-mail </label>
                            <input type="email" name="email" class="form-control" placeholder="Nhập email">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-default" >Đăng ký</button>
            <?php echo form_close();?>
        </div>
    </div>
</div>
</div>
</div>
</header>
<script>
    $(document).ready(function () {
        $(".intro").css("display","none");
    });
</script>
<script>
    $(document).ready(function () {
        $("#enterprise-link").click(function () {
            $(".enterprise").css("display","block");
            $(".admin").css("display","none");
            $(".intro").css("display","none");
            $(".register").css("display","none");
        });
    });
</script>
<script>
    $(document).ready(function () {
        $("#admin-link").click(function () {
            $(".admin").css("display","block");
            $(".enterprise").css("display","none");
            $(".intro").css("display","none");
            $(".register").css("display","none");
        });
    });
</script>
