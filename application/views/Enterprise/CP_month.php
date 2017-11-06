			<div class="col-md-9">
				<div class="row">
	  				<div class="col-md-12">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title para-title">Chọn tháng cập nhật</div>
					        </div>
			  				<div class="panel-body form-horizontal">
							<?php echo validation_errors(); ?>
								<?php echo form_open('Enterprise/monthsubmit'); ?>
									<div class="form-group">
										<label for="choose" class="text-align-left col-md-2 control-label">Chọn tháng cập nhật</label>
										<div class="col-md-7">
											<select id="choose" name="month" class="form-control">
											<option> </option>
											<?php foreach($month as$month):?>
											<option><?php echo $month?></option>
											<?php endforeach;?>
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
				<div class="row">
					<div class="col-md-12">
						<div class="content-box-large">
						<div class="panel-heading">
						            <div class="panel-title para-title">Danh sách dữ liệu hiện tại</div>
						        </div>
						<table id="table-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
							<thead>
								<tr>
								<th class="col-md-1">STT</th>
								<th class="col-md-3">Dữ liệu tháng</th>
								<th class="col-md-3">Ngày cập nhật dữ liệu</th>
								<th class="col-md-3">Xem chi tiết</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
								<th class="col-md-1">STT</th>
								<th class="col-md-3">Dữ liệu tháng</th>
								<th class="col-md-3">Ngày cập nhật dữ liệu</th>
								<th class="col-md-3">Xem chi tiết</th>
								</tr>
							</tfoot>
							<tbody >
								<?php for($i=0;$i<count($cems);$i++):?>
								<tr>
								<td><?php echo $i+1?></td>
								<td><?php echo $cems[$i]['month']?></td>
								<td><?php echo $cems[$i]['created_date']?></td>
								<td><a href="<?php echo base_url().'index.php/Enterprise/detailcems/'.$cems[$i]['month']?>">Chi tiết</a></td>
								</td>
								</tr>
							<?php endfor; ?>
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>