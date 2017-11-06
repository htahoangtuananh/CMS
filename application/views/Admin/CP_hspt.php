			<div class="col-md-9">
				<div class="row">
	  				<div class="col-md-12">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title para-title">Thêm sửa hệ số phát thải</div>
					        </div>
			  				<div class="panel-body form-horizontal">
							<?php echo validation_errors(); ?>
								<?php echo form_open('Admin/addfactorsubmit'); ?>
									<div class="form-group">
										<label for="choose" class="text-align-left col-md-4 control-label">Chọn</label>
										<div class="col-md-8">
											<select id="choose" class="form-control" >
											<option> </option>
										    <?php for($i=0;$i<count($factor);$i++):?>
											<option><?php echo $factor[$i]['HSPT_id']?> | <?php echo $factor[$i]['produce_name']?> | <?php echo $factor[$i]['waste_id']?> | <?php echo $factor[$i]['HSPT_cons']?> | <?php echo $factor[$i]['HSPT_cons_bonus']?></option>

										    <?php endfor; ?>
										  </select>
										<script>
										$("#choose").change(function(){
										$value=this.options[this.selectedIndex].value;
										
										$valueField=$value.split("|");
										$techid=$valueField[0];
										$name=$valueField[1];
										$cons=$valueField[3];
										$consbonus=$valueField[4];
										document.getElementById("factorid").value = $techid.trim();
										document.getElementById("cons").value = $cons.trim();
										document.getElementById("consbonus").value = $consbonus.trim();
										});
										</script>
										</div>
									</div>
									<div class="form-group">
										<label for="DOB" class="col-md-4 control-label">Mã hệ số phát thải</label>
										<div class="col-md-8">
											<input type="text" name="factorid" class="form-control" id="factorid" placeholder="Mã công nghệ">
										</div>
									</div>
									
									<div class="form-group">
										<label for="label" class="col-md-4 control-label">Công nghệ sản xuất</label>
										<div class="col-md-8">
											<select name="prod" class="form-control type" >
												<option> </option>
												<?php for($k=0;$k<count($tech);$k++):?>
												<option value="<?php echo $tech[$k]["prod_id"] ?>"><?php echo $tech[$k]["prod_id"] ?> | <?php echo $tech[$k]["produce_name"] ?></option>
												<?php endfor;?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label for="label" class="col-md-4 control-label">Chất ô nhiễm xử lý</label>
										<div class="col-md-8">
											<select name="waste" class="form-control type" >
												<option> </option>
												<?php for($k=0;$k<count($waste);$k++):?>
												<option value="<?php echo $waste[$k]["waste_id"] ?>"><?php echo $waste[$k]["waste_id"] ?></option>
												<?php endfor;?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label for="sid" class=" col-md-4 control-label">Hằng số</label>
										<div class="col-md-8">
											<input type="text" name="cons" class="form-control" id="cons" placeholder="Hiệu suất">
										</div>
									</div>

									<div class="form-group">
										<label for="sid" class=" col-md-4 control-label">Phần cộng thêm</label>
										<div class="col-md-8">
											<input type="text" name="consbonus" class="form-control" id="consbonus" value="0">
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
				<div class="row">
					<div class="col-md-12">
						<div class="content-box-large">
						<table id="table-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
							<thead>
								<tr>
								<th class="col-md-2">Mã hệ số phát thải</th>
								<th class="col-md-5">Công nghệ sản xuất</th>
								<th class="col-md-2">Chất ô nhiễm xử lý</th>
								<th class="col-md-1">Hằng số</th>
								<th class="col-md-1">Phần cộng thêm</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
								<th class="col-md-2">Mã hệ số phát thải</th>
								<th class="col-md-5">Công nghệ sản xuất</th>
								<th class="col-md-2">Chất ô nhiễm xử lý</th>
								<th class="col-md-1">Hằng số</th>
								<th class="col-md-1">Phần cộng thêm</th>
								</tr>
							</tfoot>
							<tbody>
								<?php foreach($factor as $factor): ?>
								<tr>
								<td><?php echo $factor['HSPT_id']?></td>
								<td><?php echo $factor['produce_name']?></td>
								<td><?php echo $factor['waste_id']?></td>
								<td><?php echo $factor['HSPT_cons']?></td>
								<td><?php echo $factor['HSPT_cons_bonus']?></td>
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