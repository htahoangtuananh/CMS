	<?php if(isset($message)):?>
	<?php if($message=="Succeed !"):?>
	<span class="succeed"><?php echo $message?></span>
	<?php else:?>
	<span class="message"><?php echo $message?></span>
	<?php endif;?>
	<?php endif;?>		
			<div class="col-md-9">
				<div class="row">
	  				<div class="col-md-12">
	  					<div class="row">
		  					<div class="content-box-large">
				  				<div class="panel-heading">
						            <div class="panel-title para-title">Thông tin nhà máy</div>
						        </div>
				  				<div class="panel-body form-horizontal">
								<?php echo validation_errors(); ?>
									<?php echo form_open('Enterprise/requestchange'); ?>
									<?php foreach($factory as $factory):?>
										
										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3">Mã nhà máy</label>
											<div class="col-md-9">
												<?php echo $factory['factory_id']?>
											</div>
										</div>
										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3">Tên nhà máy</label>
											<div class="col-md-9">
												<?php echo $factory['factory_name']?>
											</div>
										</div>

										<div class="form-group">
											<label for="DOB" style="text-align: right;" class="col-md-3">Mã nguồn thải</label>
											<div class="col-md-9">
												<?php echo $factory['sector_name']?>
											</div>
										</div>
									    <?php endforeach;?>
										<div class="form-group">
											<div class="col-md-offset-3 col-md-9">
											  <button type="submit" class="btn btn-primary">Thay đổi thông tin</button>
											</div>
								 		</div>
								 		<?php form_close();?>
				  				</div>
				  			</div>
			  			</div>
	  				</div>
			</div>
		</div>
	</div>
				