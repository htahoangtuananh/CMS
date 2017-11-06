			<div class="col-md-9">
				<div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title para-title">Thêm sửa công nghệ xử lý</div>
					        </div>
			  				<div class="panel-body form-horizontal">
							<?php echo validation_errors(); ?>
								<?php echo form_open('Admin/addtechnicsubmit'); ?>
									<div class="form-group">
										<label for="choose" class="text-align-left col-md-4 control-label">Chọn</label>
										<div class="col-md-8">
											<select id="choose" class="form-control" >
											<option> </option>
										    <?php for($i=0;$i<count($tech);$i++):?>
											<option><?php echo $tech[$i]['method_id']?> | <?php echo $tech[$i]['method_name']?> | <?php echo $tech[$i]['waste_id']?> | <?php echo $tech[$i]['affectiveness']?></option>

										    <?php endfor; ?>
										  </select>
										<script>
										$("#choose").change(function(){
										$value=this.options[this.selectedIndex].value;
										
										$valueField=$value.split("|");
										$techid=$valueField[0];
										$name=$valueField[1];
										$affective=$valueField[3];
										document.getElementById("techid").value = $techid.trim();
										document.getElementById("name").value = $name.trim();
										document.getElementById("affective").value = $affective.trim();
										});
										</script>
										</div>
									</div>
									<div class="form-group">
										<label for="DOB" class="col-md-4 control-label">Mã công nghệ</label>
										<div class="col-md-8">
											<input type="text" name="techid" class="form-control" id="techid" placeholder="Mã công nghệ">
										</div>
									</div>
									
									<div class="form-group">
										<label for="sid" class=" col-md-4 control-label">Tên đầy đủ công nghệ</label>
										<div class="col-md-8">
											<input type="text" name="techname" class="form-control" id="name" placeholder="Tên đầy đủ">
										</div>
									</div>

									<div class="form-group">
										<label for="label" class="col-md-4 control-label">Chất ô nhiễm xử lý</label>
										<div class="col-md-8">
											<select name="waste" class="form-control type" >
												<option> </option>
												<?php for($k=0;$k<count($waste);$k++):?>
												<option><?php echo $waste[$k]["waste_id"] ?></option>
												<?php endfor;?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label for="sid" class=" col-md-4 control-label">Hiệu suất</label>
										<div class="col-md-8">
											<input type="text" name="techeffect" class="form-control" id="affective" placeholder="Hiệu suất">
										</div>
									</div>

									  <div class="form-group">
										<div class="col-md-offset-2 col-md-10">
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
								<th class="col-md-2">Mã công nghệ xử lý</th>
								<th class="col-md-5">Tên công nghệ</th>
								<th class="col-md-2">Mã chất ô nhiễm</th>
								<th class="col-md-3">Hiệu suất</th>
								
								</tr>
							</thead>
							<tfoot>
								<tr>
								<th class="col-md-2">Mã công nghệ xử lý</th>
								<th class="col-md-5">Tên công nghệ</th>
								<th class="col-md-2">Mã chất ô nhiễm</th>
								<th class="col-md-3">Hiệu suất</th>
								</tr>
							</tfoot>
							<tbody>
								<?php foreach($tech as $tech): ?>
								<tr>
								<td><?php echo $tech['method_id']?></td>
								<td><?php echo $tech['method_name']?></td>
								<td><?php echo $tech['waste_id']?></td>
								<td><?php echo $tech['affectiveness']?></td>
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