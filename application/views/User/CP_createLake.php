<div class="col-md-9">
				<div class="row">
	  				<div class="col-md-12">
	  					<div class="content-box-large">
			  				<div class="panel-heading panel-default">
                                <h4 class="para-title"><strong>Thêm hồ mới</strong></h4>
					        </div>
			  				<div class="panel-body form-horizontal">
							<?php echo validation_errors(); ?>
								<?php echo form_open('Admin/createAdmin'); ?>
									<div class="form-group">
									<label for="label" class="text-align-left col-md-2 control-label">Tên đặt cho hồ</label>
										<div class="col-md-7">
											<input type="text" name="username" class="form-control number-field" placeholder="Đặt tên bất kỳ cho hồ của bạn">
										</div>
									</div>
                                    <div class="form-group">
                                        <label for="email" class="text-align-left col-md-2 control-label">Vị trí hồ</label>
                                        <div class="col-md-7">
                                            <input type="email" name="email" class="form-control number-field" placeholder="Vị trí của hồ để bạn có thể nhớ được">
                                        </div>
                                    </div>
									<div class="form-group">
										<div class="col-md-offset-2 col-md-10">
										  <button type="submit" class="btn btn-primary">Thêm mới</button>
										</div>
									</div>
							</div>
			  			</div>
			  		</div>
	  			</div>
			</div>
		</div>
	</div>