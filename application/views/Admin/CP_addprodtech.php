<div class="col-md-9">
				<div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title para-title">Thêm sửa công nghệ sản xuất</div>
					        </div>
			  				<div class="panel-body form-horizontal">
							<?php echo validation_errors(); ?>
								<?php echo form_open('Admin/producetechsubmit'); ?>
									<div class="form-group">
										<label for="choose" class="text-align-left col-md-4 control-label">Chọn</label>
										<div class="col-md-8">
											<select id="choose" class="form-control" >
											<option> </option>
										    <?php for($i=0;$i<count($tech);$i++):?>
											<option><?php echo $tech[$i]['prod_id']?> | <?php echo $tech[$i]['produce_name']?> | <?php echo $tech[$i]['sector_id']?></option>

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
										<label for="label" class="col-md-4 control-label">Ngành sản xuất</label>
										<div class="col-md-8">
											<select name="manufacturing_id" class="form-control type" >
												<option> </option>
												<?php for($k=0;$k<count($sector);$k++):?>
												<option value="<?php echo $sector[$k]["manufacturing_id"] ?>"><?php echo $sector[$k]["manufacturing_id"] ?> | <?php echo $sector[$k]["sector_name"] ?></option>
												<?php endfor;?>
											</select>
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
								<th class="col-md-2">Mã công nghệ sản xuất</th>
								<th class="col-md-5">Tên công nghệ</th>
								<th class="col-md-2">Mã ngành sản xuất</th>
								<th class="col-md-3">Tên ngành sản xuất</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
								<th class="col-md-2">Mã công nghệ sản xuất</th>
								<th class="col-md-5">Tên công nghệ</th>
								<th class="col-md-2">Mã ngành sản xuất</th>
								<th class="col-md-3">Tên ngành sản xuất</th>
								</tr>
							</tfoot>
							<tbody>
								<?php foreach($tech as $tech): ?>
								<tr>
								<td><?php echo $tech['prod_id']?></td>
								<td><?php echo $tech['produce_name']?></td>
								<td><?php echo $tech['manufacturing_id']?></td>
								<td><?php echo $tech['sector_name']?></td>
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