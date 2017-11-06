			
					<div class="col-md-9">
						<div class="content-box-large">
						<table id="table-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
							<thead>
								<tr>
								<th class="col-md-2">Tên nguồn thải</th>
								<th class="col-md-3">Địa điểm nguồn thải</th>
								<th class="col-md-2">Trạng thái duyệt</th>
								<th class="col-md-1">Đang hoạt động</th>
								<th class="col-md-2">Ngày đăng ký</th>
								<th class="col-md-2">Chi tiết</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
								<th class="col-md-2">Tên nguồn thải</th>
								<th class="col-md-3">Địa điểm nguồn thải</th>
								<th class="col-md-2">Trạng thái duyệt</th>
								<th class="col-md-1">Đang hoạt động</th>
								<th class="col-md-2">Ngày đăng ký</th>
								<th class="col-md-2">Chi tiết</th>
								</tr>
							</tfoot>
							<tbody >
								<?php foreach($list as $list):?>
								<tr>
								<td><?php echo $list['wsource_name']?></td>
								<td><?php echo $list['location']?></td>
								<?php if($list['status']=="1"):?>
								<td style="color:#ffcc00;text-align:center"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Chờ duyệt</td>
								<?php elseif($list['status']=="2"):?>
								<td style="color:#33cc33;text-align:center"><i class="fa fa-check fa-fw" aria-hidden="true"></i>Duyệt</td>
								<?php elseif($list['status']=="0"):?>
								<td style="color:red;text-align:center"><i class="fa fa-times fa-fw" aria-hidden="true"></i>Từ chối</td>
								<?php endif;?>
								<?php if($list['is_working']=="1"):?>
								<td style="color:#33cc33;text-align:center"><i class="fa fa-check fa-fw" aria-hidden="true"></i></td>
								<?php elseif($list['is_working']=="0"):?>
								<td style="color:red;text-align:center"><i class="fa fa-times fa-fw" aria-hidden="true"></i></td>
								<?php endif;?>
								<td><?php echo $list['created_date']?></td>
								<td style="text-align:center"><a href="#">Xem chi tiết</a></td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
						</div>
					</div>
				