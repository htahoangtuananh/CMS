<div class="col-md-9">
				<div class="row">
	  				<div class="col-md-6">
	  					<div class="row">
		  					<div class="content-box-large">
				  				<div class="panel-heading">
						            <div class="panel-title para-title">Thêm ngành sản xuất</div>
						        </div>
				  				<div class="panel-body form-horizontal">
								<?php echo validation_errors(); ?>
									<?php echo form_open('Admin/addbrandsubmit'); ?>
										<div class="form-group">
											<label for="choose1" class="text-align-left col-md-3 control-label">Chọn</label>
											<div class="col-md-9">
												<select id="choose1" class="form-control" >
												<option> </option>
											    <?php for($i=0;$i<count($sector);++$i):?>
												<option><?php echo $sector[$i]['manufacturing_id']?> | <?php echo $sector[$i]['sector_name']?></option>
											    <?php endfor;?>
											  </select>
											<script>
											$("#choose1").change(function(){
											$value=this.options[this.selectedIndex].value;
											
											$valueField=$value.split("|");
											$sector=$valueField[0];
											$name=$valueField[1];
											
											
											document.getElementById("sector1").value = $sector.trim();
											document.getElementById("name1").value = $name.trim();
										});
											</script>
											</div>
										</div>
										<div class="form-group">
											<label for="DOB" class="col-md-3 control-label">Mã ngành</label>
											<div class="col-md-9">
												<input type="text" name="sectorid" class="form-control" id="sector1" placeholder="Mã ngành">
											</div>
										</div>
										
										<div class="form-group">
											<label for="sid" class=" col-md-3 control-label">Tên đầy đủ của ngành</label>
											<div class="col-md-9">
												<input type="text" name="sectorname" class="form-control" id="name1" placeholder="Tên đầy đủ ngành">
											</div>
										</div>
										  <div class="form-group">
											<div class="col-md-offset-3 col-md-10">
											  <button type="submit" class="btn btn-primary">Cập nhật</button>
											</div>
									  </div>
									<?php echo form_close();?>
				  				</div>
				  			</div>
				  			
		  					<div class="content-box-large">
				  				<div class="panel-heading">
						            <div class="panel-title para-title">Sửa ngành sản xuất</div>
						        </div>
				  				<div class="panel-body form-horizontal">
								<?php echo validation_errors(); ?>
									<?php echo form_open('Admin/editbrandsubmit'); ?>
										<div class="form-group">
											<label for="choose2" class="text-align-left col-md-3 control-label">Chọn</label>
											<div class="col-md-9">
												<select name="choose" id="choose2" class="form-control" >
												<option> </option>
											    <?php for($i=0;$i<count($sector);++$i):?>
												<option><?php echo $sector[$i]['manufacturing_id']?> | <?php echo $sector[$i]['sector_name']?></option>
											    <?php endfor;?>
											  </select>
											<script>
											$("#choose2").change(function(){
											$value=this.options[this.selectedIndex].value;
											
											$valueField=$value.split("|");
											$sector=$valueField[0];
											$name=$valueField[1];
											
											
											document.getElementById("sector2").value = $sector.trim();
											document.getElementById("name2").value = $name.trim();
										});
											</script>
											</div>
										</div>
										<div class="form-group">
											<label for="DOB" class="col-md-3 control-label">Mã ngành</label>
											<div class="col-md-9">
												<input type="text" name="sectorid" class="form-control" id="sector2" placeholder="Mã ngành">
											</div>
										</div>
										
										<div class="form-group">
											<label for="sid" class=" col-md-3 control-label">Tên đầy đủ của ngành</label>
											<div class="col-md-9">
												<input type="text" name="sectorname" class="form-control" id="name2" placeholder="Tên đầy đủ ngành">
											</div>
										</div>
										  <div class="form-group">
											<div class="col-md-offset-3 col-md-10">
											  <button type="submit" class="btn btn-primary">Cập nhật</button>
											</div>
									  </div>
									<?php echo form_close();?>
				  				</div>
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
								<th class="col-md-3">Mã ngành</th>
								<th class="col-md-4">Tên đầy đủ ngành</th>
								<th class="col-md-5">Ngày Khởi tạo</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
								<th class="col-md-3">Mã ngành</th>
								<th class="col-md-4">Tên đầy đủ ngành</th>
								<th class="col-md-5">Ngày Khởi tạo</th>
								</tr>
							</tfoot>
							<tbody>
								<?php foreach($sector as $sector):?>
								<tr>
								<td><?php echo $sector['manufacturing_id']?></td>
								<td><?php echo $sector['sector_name']?></td>
								<td><?php echo $sector['created_date']?></td>
								
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>