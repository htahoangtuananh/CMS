			
					<div class="col-md-9">
						<div class="content-box-large">
						<div class="panel-heading">
						            <div class="panel-title para-title">Duyệt đăng ký nhà máy mới</div>
						        </div>
						<table id="table-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
							<thead>
								<tr>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-4">Ngày đăng ký</th>
                                    <th class="col-md-2">Trạng thái</th>
                                    <th class="col-md-3">Xem chi tiết</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-4">Ngày đăng ký</th>
                                    <th class="col-md-2">Trạng thái</th>
                                    <th class="col-md-3">Xem chi tiết</th>
								</tr>
							</tfoot>
							<tbody >
								<?php foreach($list as $lists):?>
								<tr>
								<td><?php echo $lists['id']?></td>
								<td><?php echo $lists['created_date']?></td>
								<td style="text-align: center"> <?php if($lists['status']=="0"):?>

                                        <p style="color:#ffcc00;"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i> Chờ duyệt</p>
                                        <?php elseif($lists['status']=="1"):?>


                                        <p style="color:#33cc33;"><i class="fa fa-check fa-fw" aria-hidden="true"></i> Duyệt</p>
                                        <?php elseif($lists['status']=="2"):?>


                                        <p style="color:red;"><i class="fa fa-times fa-fw" aria-hidden="true"></i>Từ chối</p>
                                        <?php endif;?>
                                    </td>
								<td style="text-align: center"><a href="<?php echo base_url().'Admin/detailRegistration/'.$lists['id']?>">Xem chi tiết</a></td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
						</div>
					</div>
				