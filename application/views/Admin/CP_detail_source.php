			<div class="col-md-9">
				<div class="row">
	  				<div class="col-md-12">
	  					<div class="row">
		  					<div class="content-box-large">
				  				<div class="panel-heading">
						            <div class="panel-title para-title">Chi tiết nguồn thải</div>
						        </div>
				  				<div class="panel-body form-horizontal">
								<?php echo validation_errors(); ?>
									<?php echo form_open('Admin/detailsourcesubmit'); ?>
									<?php foreach($list as $list):?>
										<input type="hidden" name="wsource_register_id" class="form-control" value="<?php echo $list['wsource_register_id']?>">
										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3">Mã nhà máy</label>
											<div class="col-md-9">
												<input type="hidden" name="factory_id" class="form-control" value="<?php echo $list['factory_id']?>">
												<?php echo $list['factory_id']?>
											</div>
										</div>
										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3">Tên nhà máy</label>
											<div class="col-md-9">
												<?php echo $list['factory_name']?>
											</div>
										</div>

										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3">Mã nguồn thải</label>
											<div class="col-md-9">
												<input type="hidden" name="source_id" class="form-control" value="<?php echo $list['factory_id'].'_'.$list['wsource_register_id']?>">
												<?php echo $list['factory_id'].'_S'.$list['wsource_register_id']?>
											</div>
										</div>

										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3">Tên nguồn thải</label>
											<div class="col-md-9">
												<input type="hidden" name="wsource_name" class="form-control" value="<?php echo $list['wsource_name']?>">
												<?php echo $list['wsource_name']?>
											</div>
										</div>
										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3">Vị trí nguồn thải</label>
											<div class="col-md-9">
												<input type="hidden" name="location" class="form-control" value="<?php echo $list['location']?>">
												<?php echo $list['location']?>
											</div>
										</div>
										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3">Công nghệ sản xuất</label>
											<div class="col-md-9">
												<input type="hidden" name="produce_id" class="form-control" value="<?php echo $list['prod_id']?>">
												<?php echo $list['produce_name']?>
											</div>
										</div>
										

										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3 ">Công nghệ xử lý</label>
											<?php foreach($method as $method): ?>
											<div class="col-md-9">
												<input type="hidden" name="method_id[]" class="form-control" value="<?php echo $method[0]['method_id']?>">
												<?php echo $method[0]['method_name']?>
											</div>
										<?php endforeach;?>
										</div>
										
										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3">Trạng thái</label>
											<?php if($list['status']=="1"):?>
											<div class="col-md-9" style="color:#ffcc00;">	
												<i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Chờ duyệt
												<?php elseif($list['status']=="2"):?>
											<div class="col-md-9" style="color:#33cc33;">	
												<i class="fa fa-check fa-fw" aria-hidden="true"></i>Duyệt
												<?php elseif($list['status']=="0"):?>
											<div class="col-md-9" style="color:red;">
												<i class="fa fa-times fa-fw" aria-hidden="true"></i>Từ chối
												<?php endif;?>
											</div>
										</div>

										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3">Có đang hoạt động</label>
											<?php if($list['is_working']=="1"):?>
											<div class="col-md-9" style="color:#33cc33;">
												<i class="fa fa-check fa-fw" aria-hidden="true"></i></td>
											<?php elseif($list['is_working']=="0"):?>	
											<div class="col-md-9" style="color:red;">
												<i class="fa fa-times fa-fw" aria-hidden="true"></i></td>
											<?php endif;?>
											</div>
										</div>

									    <?php endforeach;?>
										<div class="form-group">
											<div class="col-md-offset-3 col-md-9">
											  <button type="submit" class="btn btn-primary"><i class="fa fa-check fa-fw" aria-hidden="true"></i> Duyệt</button>
											</div>
								 		</div>
									<?php echo form_close();?>
				  				</div>
				  			</div>
			  			</div>
	  				</div>
			</div>
		</div>
	</div>
				