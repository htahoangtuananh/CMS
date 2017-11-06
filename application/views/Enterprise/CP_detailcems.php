			<div class="col-md-9">
				<div class="row">
	  				<div class="col-md-12">
	  					<div class="row">
		  					<div class="content-box-large">
				  				<div class="panel-heading">
						            <div class="panel-title para-title">Chi tiết nguồn thải tháng <?php echo $month?></div>
						        </div>
				  				<div class="panel-body form-horizontal">
									<?php foreach($source as $source):?>
										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3">Mã nguồn thải</label>
											<div class="col-md-9">
												<?php echo $source['factory_source_id']?>
											</div>
										</div>
										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3">Tên nguồn thải</label>
											<div class="col-md-9">
												<?php echo $source['source_name']?>
											</div>
										</div>

										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3">Vị trí nguồn thải</label>
											<div class="col-md-9">
												<?php echo $source['source_location']?>
											</div>
										</div>
										<?php endforeach;?>
										
										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3">Lưu lượng</label>
											<div class="col-md-9">
												<?php echo $cems[0]['flow']?>
											</div>
										</div>
										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3">Ngày tạo dữ liệu</label>
											<div class="col-md-9">
												<?php echo $cems[0]['created_date']?>
											</div>
										</div>

										<div class="form-group col-md-offset-3">
										<table id="table-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th class="col-md-3">Chất đo được</th>
												<th class="col-md-4">Nồng độ (C)</th>
												<th class="col-md-4">E</th>
											</tr>
										</thead>
										<tbody>
										<?php for($i=0;$i<count($cems);$i++): ?>
											<tr>
												<td><?php echo $cems[$i]["matter"]?></td>
												<td><?php echo $cems[$i]["concentration"]?></td>
												<td><?php echo $cems[$i]["Emount"]?></td>
											</tr>
										</tbody>
										<?php endfor;?>
										</div>
										</table>
										</div>
										
				  				</div>
				  			</div>
			  			</div>
	  				</div>
			</div>
		</div>
	</div>
				