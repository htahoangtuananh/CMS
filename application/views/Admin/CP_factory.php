	<div class="col-md-9">
				<div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title para-title">Thêm sửa nhà máy</div>
					        </div>
			  				<div class="panel-body form-horizontal">
							<?php echo validation_errors(); ?>
								<?php echo form_open('Admin/addfactorysubmit'); ?>
									<div class="form-group">
										<label for="choose" class="text-align-left col-md-3 control-label">Chọn</label>
										<div class="col-md-9">
											<select id="choose" class="form-control" >
											<option> </option>
											<?php for($i=0;$i<count($factory);++$i):?>
											<option> <?php echo $factory[$i]['factory_id']?> | <?php echo $factory[$i]['factory_name']?> | <?php echo $factory[$i]['manufacturing_id']?> | <?php echo $factory[$i]['location_code']?> | <?php echo $factory[$i]['capacity']?> </option>
										    <?php endfor;?>
											
										    
										  </select>
										<script>
										$("#choose").change(function(){
										$value=this.options[this.selectedIndex].value;
										
										$valueField=$value.split("|");
										$factoryid=$valueField[0];
										$name=$valueField[1];
										$address=$valueField[3];
										$capacity=$valueField[4];
										console.log($factoryid);
										document.getElementById("factoryid").value = $factoryid.trim();
										document.getElementById("name").value = $name.trim();
										document.getElementById("address").value = $address.trim();
										document.getElementById("capacity").value = $capacity.trim();
									});
										</script>
										</div>
									</div>
									<div class="form-group">
										<label for="DOB" class="col-md-3 control-label">Mã nhà máy</label>
										<div class="col-md-9">
											<input type="text" name="factoryid" class="form-control" id="factoryid" placeholder="Mã nhà máy">
										</div>
									</div>
									
									<div class="form-group">
										<label for="sid" class=" col-md-3 control-label">Tên đầy đủ </label>
										<div class="col-md-9">
											<input type="text" name="name" class="form-control" id="name" placeholder="Tên đầy đủ nhà máy">
										</div>
									</div>
									<div class="form-group">
										<label for="choose" class="text-align-left col-md-3 control-label">Mã ngành</label>
										<div class="col-md-9">
											<select id="sector" name="sector" class="form-control">
											<?php foreach($sector as $sector):?>
											<option><?php echo $sector['manufacturing_id']?></option>
										    <?php endforeach;?>
										  </select>
										</div>
									</div>
									<div class="form-group">
										<label for="sid" class=" col-md-3 control-label">Địa chỉ </label>
										<div class="col-md-9">
											<select id="address" name="address" class="form-control">
											<?php foreach($location as $location):?>
											<option value="<?php echo $location['code']?>"><?php echo $location['location_name']?></option>
										    <?php endforeach;?>
										  </select>
										</div>
									</div>
									<div class="form-group">
										<label for="sid" class=" col-md-3 control-label">Công suất nhà máy </label>
										<div class="col-md-9">
											<input type="text" name="capacity" class="form-control" id="capacity" placeholder="Công suất nhà máy">
										</div>
									</div>
									<div class="form-group">
										<label for="sid" class=" col-md-3 control-label">Thông tin khác</label>
										<div class="col-md-9">
											<textarea name="other" id="other" class="form-control" placeholder="Các thông tin khác"></textarea>
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
	  				
				<div class="row">
					<div class="col-md-12">
						<div class="content-box-large">
						<table id="table-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
							<thead>
								<tr>
								<th class="col-md-1">Mã nhà máy</th>
								<th class="col-md-4">Tên nhà máy</th>
								<th class="col-md-2">Ngành</th>
								<th class="col-md-2">Địa chỉ</th>
								<th class="col-md-1">Công suất</th>
								<th class="col-md-2">Thông tin khác</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
								<th class="col-md-1">Mã nhà máy</th>
								<th class="col-md-4">Tên nhà máy</th>
								<th class="col-md-2">Ngành</th>
								<th class="col-md-2">Địa chỉ</th>
								<th class="col-md-1">Công suất</th>
								<th class="col-md-2">Thông tin khác</th>
								</tr>
							</tfoot>
							<tbody>
							<?php foreach($factory as $factory):?>
								<tr>
								<td><?php echo $factory['factory_id']?></td>
								<td><?php echo $factory['factory_name']?></td>
								<td><?php echo $factory['sector_name']?></td>
								<td><?php echo $factory['location_code']?></td>
								<td><?php echo $factory['capacity']?></td>
								<td><?php echo $factory['other']?></td>
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