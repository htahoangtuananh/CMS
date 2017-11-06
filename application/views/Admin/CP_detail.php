
<div class="col-md-9">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <div class="panel-title para-title">Đăng ký người dùng</div>
                    </div>
                    <div class="panel-body form-horizontal">
                    <?php echo validation_errors(); ?>
                        <?php echo form_open('Admin/submitRegistration'); ?>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="hidden" name="form_id" class="form-control" value="<?php echo $detail['id']?>">
                                <div class="form-group">
                                    <label for="fullname"  class="col-md-5">Họ và tên</label>
                                    <div class="col-md-7">
                                        <input type="hidden" name="fullname" class="form-control" value="<?php echo $input->fullname?>">
                                        <?php echo $input->fullname?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="gender"  class="col-md-5">Giới tính</label>
                                    <div class="col-md-7">
                                        <input type="hidden" name="gender" class="form-control" value="<?php echo $input->gender?>">
                                        <?php echo ($input->gender == 1) ? 'Nam' : 'Nữ'; ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="DOB"  class="col-md-5">Ngày sinh</label>
                                    <div class="col-md-7">
                                        <input type="hidden" name="DOB" class="form-control" value="<?php echo $input->DOB?>">
                                        <?php echo $input->DOB?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="identification_number"  class="col-md-5">Số CMT/CCCD</label>
                                    <div class="col-md-7">
                                        <input type="hidden" name="identification_number" class="form-control" value="<?php echo $input->identification_number?>">
                                        <?php echo $input->identification_number?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="identification_date"  class="col-md-5">Ngày cấp</label>
                                    <div class="col-md-7">
                                        <input type="hidden" name="identification_date" class="form-control" value="<?php echo $input->identification_date?>">
                                        <?php echo $input->identification_date?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="address"  class="col-md-5">Địa chỉ</label>
                                    <div class="col-md-7">
                                        <input type="hidden" name="address" class="form-control" value="<?php echo $input->address?>">
                                        <?php echo $input->address?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="city"  class="col-md-5">Thành phố</label>
                                    <div class="col-md-7">
                                        <input type="hidden" name="city" class="form-control" value="<?php echo $input->city?>">
                                        <?php echo $input->city_name?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="phone_number"  class="col-md-5">Số điện thoại</label>
                                    <div class="col-md-7">
                                        <input type="hidden" name="phone_number" class="form-control" value="<?php echo $input->phone_number?>">
                                        <?php echo $input->phone_number?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="username"  class="col-md-5">Tên đăng nhập</label>
                                        <div class="col-md-7">
                                            <input type="hidden" name="username" class="form-control" value="<?php echo $input->username?>">
                                            <?php echo $input->username?>
                                        </div>
                                    </div>

                                            <input type="hidden" name="password" class="form-control" value="<?php echo $input->password?>" >

                                    <div class="form-group">
                                        <label for="email"  class="col-md-5">E-mail</label>
                                        <div class="col-md-7">
                                            <input type="hidden" name="email" class="form-control" value="<?php echo $input->email?>">
                                            <?php echo $input->email?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="DOB"  class="col-md-5">Trạng thái</label>
                                        <?php if($detail['status']=="0"):?>
                                        <div class="col-md-7" style="color:#ffcc00;">
                                            <i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Chờ duyệt

                                        </div>
                                        <?php elseif($detail['status']=="1"):?>
                                        <div class="col-md-7" style="color:#33cc33;">
                                            <i class="fa fa-check fa-fw" aria-hidden="true"></i>Duyệt

                                        </div>
                                        <?php elseif($detail['status']=="2"):?>
                                        <div class="col-md-7" style="color:red;">
                                            <i class="fa fa-times fa-fw" aria-hidden="true"></i>Từ chối

                                        </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-4">
                                  <button type="submit" class="btn btn-success" name="submitForm" value="1"  <?php if($detail['status']=="1"):?> disabled<?php endif;?>><i class="fa fa-check fa-fw" aria-hidden="true"></i> Duyệt</button>
                                  <button type="submit" class="btn btn-danger" name="submitForm" value="0" <?php if($detail['status']=="2"):?> disabled<?php endif;?>><i class="fa fa-times fa-fw" aria-hidden="true" ></i> Từ chối</button>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

				