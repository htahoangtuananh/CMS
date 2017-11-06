			
					<div class="col-md-9">
						<div class="content-box-large">
						<div class="panel-heading">
						            <div class="panel-title para-title">Duyệt nguồn thải mới</div>
						        </div>
						<table id="table-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
							<thead>
								<tr>
								<th class="col-md-1">Mã nhà máy</th>
								<th class="col-md-2">Tên nhà máy</th>
								<th class="col-md-2">Tên nguồn thải</th>
								<th class="col-md-2">Vị trí nguồn thải</th>
								<th class="col-md-2">Ngày đăng ký</th>
								<th class="col-md-1">Chi tiết</th>
								<th class="col-md-1">Xem</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
								<th class="col-md-1">Mã nhà máy</th>
								<th class="col-md-2">Tên nhà máy</th>
								<th class="col-md-2">Tên nguồn thải</th>
								<th class="col-md-2">Vị trí nguồn thải</th>
								<th class="col-md-2">Ngày đăng ký</th>
								<th class="col-md-1">Chi tiết</th>
								<th class="col-md-1">Xem</th>
								</tr>
							</tfoot>
							<tbody >
								<?php foreach($list as $list):?>
								<tr>
								<td><?php echo $list['factory_id']?></td>
								<td><?php echo $list['factory_name']?></td>
								<td><?php echo $list['wsource_name']?></td>
								<td><?php echo $list['location']?></td>
								<td><?php echo $list['created_date']?></td>
								<td><a href="<?php echo base_url().'index.php/Admin/detailsource/'.$list['wsource_register_id']?>">Xem chi tiết</a></td>
								<?php if($list['is_read']=="0"):?><td style="color:red;text-align: center"><i class="fa fa-times fa-fw" aria-hidden="true"></i>
								<?php else: ?>
									<td style="color:#33cc33;text-align: center"><i class="fa fa-check fa-fw" aria-hidden="true"></i>
								<?php endif;?>
								</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
						</div>
					</div>
				