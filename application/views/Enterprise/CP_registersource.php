
			<div class="col-md-9">
				<div class="row">
	  				<div class="col-md-12">
	  					<div class="row">
		  					<div class="content-box-large">
				  				<div class="panel-heading">
						            <div class="panel-title para-title">Thêm nguồn thải mới</div>
						        </div>
				  				<div class="panel-body form-horizontal">
								<?php echo validation_errors(); ?>
									<?php echo form_open('Enterprise/registersourcesubmit'); ?>
										<div class="form-group">
											<label for="DOB" class="col-md-3 control-label">Tên nguồn thải</label>
											<div class="col-md-9">
												<input type="text" name="sourcename" class="form-control"  placeholder="Tên nguồn thải">
											</div>
										</div>
										<div class="form-group">
											<label for="sid" class=" col-md-3 control-label">Địa điểm nguồn thải</label>
											<div class="col-md-9">
												<input type="text" name="sourcelocation" class="form-control"  placeholder="Địa điểm nguồn thải">
											</div>
										</div>
										<div class="form-group">
											<label for="label" class="col-md-3 control-label">Công nghệ sản xuất</label>
											<div class="col-md-9">
												<select name="produce" class="form-control type" >
													<option> </option>
													<?php for($k=0;$k<count($produce);$k++):?>
													<option><?php echo $produce[$k]["prod_id"] ?> | <?php echo $produce[$k]["produce_name"] ?></option>
													<?php endfor;?>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="choose" class="text-align-left col-md-3 control-label">Công nghệ xử lý</label>
											<div class="col-md-9">
												<select id="choose" class="form-control selectpicker" multiple>
											    <?php for($k=0;$k<count($method);++$k): ?>
												<option type="<?php echo $method[$k]['method_id']?>"><?php echo $method[$k]['method_name']?></option>
												<?php endfor;?>
											  </select>
											</div>
										</div>
										<script>
										$(document).on("change", "#choose", function(){
										var ids = $(this).find('option:selected').map(function() {
											return $(this).attr('id');    
										}).get();
										var sids = $(this).find('option:selected').map(function() {
											return $(this).attr('type');    
										}).get();
										document.getElementById("id-field").value = sids;
										console.log(sids);
										});
										</script>
										<div class="form-group">
											<label for="sid" class=" col-md-3 control-label">Mã công nghệ xử lý</label>
											<div class="col-md-9">
												<input type="text" name="method_id" class="form-control" id="id-field" placeholder="Số báo danh">
											</div>
										</div>
										<div class="form-group">
										<div class="col-md-offset-3 col-md-10">
										  <div class="checkbox">
											<label>
											  <input type="checkbox" name="is_working" value="value1"> Có đang hoạt động
											</label>
										  </div>
										</div>
									  	</div>
										<div class="form-group">
											<div class="col-md-offset-3 col-md-9">
											  <button type="submit" class="btn btn-primary">Cập nhật</button>
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