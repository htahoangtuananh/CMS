<div class="col-md-9">
				<div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title para-title">Thêm sửa chất ô nhiễm</div>
					        </div>
			  				<div class="panel-body form-horizontal">
							<?php echo validation_errors(); ?>
								<?php echo form_open('Admin/addpollutionsubmit'); ?>
									<div class="form-group">
										<label for="choose" class="text-align-left col-md-3 control-label">Chọn</label>
										<div class="col-md-9">
											<select id="choose" name="choose" class="form-control" >
											<option> </option>
										    
										  </select>
										<script>
										$("#choose").change(function(){
										$value=this.options[this.selectedIndex].value;
										
										$valueField=$value.split("|");
										$wasteid=$valueField[0];
										$name=$valueField[1];
										document.getElementById("wasteid").value = $sector.trim();
										document.getElementById("name").value = $name.trim();
									});
										</script>
										</div>
									</div>
									<div class="form-group">
										<label for="DOB" class="col-md-3 control-label">Mã chất ô nhiễm</label>
										<div class="col-md-9">
											<input type="text" name="pollutionid" class="form-control" id="wasteid" placeholder="Mã Chất ô nhiễm">
										</div>
									</div>
									
									<div class="form-group">
										<label for="sid" class=" col-md-3 control-label">Tên chất ô nhiễm</label>
										<div class="col-md-9">
											<input type="text" name="pollutionname" class="form-control" id="name" placeholder="Tên đầy đủ chất ô nhiễm">
										</div>
									</div>
									  <div class="form-group">
										<div class="col-md-offset-3 col-md-10">
										  <button type="submit" class="btn btn-primary">Cập nhật</button>
										</div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title para-title">Nhập vào bằng file excel</div>
					        </div>
			  				<div class="panel-body">
							<a class="download" href="#"><i class="glyphicon glyphicon-download-alt"></i> Tải về file excel mẫu</a>
							<p class="excel-para">Nhập danh sách vào qua file excel(phiên bản Microsoft Excel 2007 là tốt nhất) theo đúng định dạng như hình sau </p>
							<img id="sample" data-toggle="modal" data-target="#myModal" src="<?php echo base_url().'assets/img/Sample.png' ?>" style="width:100%;margin-bottom:15px" alt="sample excel">
							<p>(click vào ảnh để phóng to)</p>
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content modal-lg">
										<div class="modal-header modal-lg">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
											<div class="modal-body modal-lg">
												<img src="<?php echo base_url().'assets/img/Sample.png' ?>" style="width:100%" alt="sample excel">
												
											</div>
									</div>
								</div>
							</div>
							<div class="form-group">
							<?php echo form_open_multipart('Admin/addbrandexcel');?>
								<input type="file" class="form-control" name="userfile" />
								</div>
									<div class="form-group">
										<div class="col-md-offset-3 col-md-10">
										  <button type="submit" class="btn btn-primary">Cập nhật</button>
										</div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>
	  			</div>
				<div class="row">
					<div class="col-md-12">
						<div class="content-box-large">
						<table id="table-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
							<thead>
								<tr>
								<th class="col-md-1">Năm thi</th>
								<th class="col-md-1">Số báo danh</th>
								<th class="col-md-5">Họ tên thí sinh</th>
								<th class="col-md-2">Chức danh</th>
								<th class="col-md-1">Năm sinh</th>
								<th class="col-md-2">Nơi làm việc</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
								<th class="col-md-1">Năm thi</th>
								<th class="col-md-1">Số báo danh</th>
								<th class="col-md-5">Họ tên thí sinh</th>
								<th class="col-md-2">Chức danh</th>
								<th class="col-md-1">Năm sinh</th>
								<th class="col-md-2">Nơi làm việc</th>
								</tr>
							</tfoot>
							<tbody>
							
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>