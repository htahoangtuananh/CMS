			<div class="col-md-9">
				<div class="row">
	  				<div class="col-md-12">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title para-title">Chọn nguồn thải</div>
					        </div>
			  				<div class="panel-body form-horizontal">
							<?php echo validation_errors(); ?>
								<?php echo form_open('Admin/picksubmit'); ?>
									<div class="form-group">
										<label for="choose" class="text-align-left col-md-2 control-label">Chọn nguồn thải</label>
										<div class="col-md-7">
											<select id="choose" name="sourceid" class="form-control">
											<option> </option>
											<?php for($i=0;$i<count($source);$i++):?>
											<option><?php echo $source[$i]['factory_source_id']?> | <?php echo $source[$i]['source_name']?> | <?php echo $source[$i]["source_location"] ?></option>
											<?php endfor; ?>
										  </select>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-offset-2 col-md-10">
										  <button type="submit" class="btn btn-primary">Chọn</button>
										</div>
									</div>
							</div>
			  			</div>
			  		</div>
	  			</div>
			</div>
		</div>
	</div>