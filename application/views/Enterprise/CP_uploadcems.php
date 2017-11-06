			<div class="col-md-9">
				<div class="row">
	  				<div class="col-md-12">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title para-title">Nhập vào bằng file excel</div>
					        </div>
			  				<div class="panel-body">
							<a class="download" href="<?php echo base_url().'index.php/Enterprise/sample'?>"><i class="fa fa-download fw"></i> Tải về file excel mẫu</a>
							<p class="excel-para">Nhập danh sách vào qua file excel(phiên bản Microsoft Excel 2007 là tốt nhất) theo đúng định dạng như hình sau </p>
							<img id="sample" data-toggle="modal" data-target="#myModal" src="<?php echo base_url().'assets/img/Sample.png'?>" style="width:100%;margin-bottom:15px" alt="sample excel">
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
							<?php echo form_open_multipart('Enterprise/addcemsexcel');?>
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
			</div>
		</div>
	</div>