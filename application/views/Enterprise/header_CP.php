<?php
/**
 * @author Tuan Anh <htc.hoangtuananh@gmail.com>
 */
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Project Final</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo base_url().'/assets/css/bootstrap.min.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'/assets/css/font-awesome.min.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'/assets/css/app.css'?>?ts=<?=time()?>">
		<link rel="stylesheet" href="<?php echo base_url().'/assets/css/creative.min.css'?>?ts=<?=time()?>">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().'/assets/img/favicon.ico'?>">
		<script src="<?php echo base_url().'/assets/js/jQuery.min.js'?>"></script>
		<script src="<?php echo base_url().'/assets/js/jquery-ui.min.js'?>"></script>
		<script src="<?php echo base_url().'/assets/js/bootstrap.min.js'?>"></script>
		<script src="<?php echo base_url().'/assets/js/jQuery.dataTables.min.js'?>"></script>
		
		<script src="<?php echo base_url().'/assets/js/table.js'?>"></script>
		<link rel="stylesheet" href="<?php echo base_url().'/assets/css/jquery-ui.css'?>?ts=<?=time()?>">
		<link rel="stylesheet" href="<?php echo base_url().'/assets/css/dataTables.bootstrap.min.css'?>">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    	
	</head>
	<section class="topbar">
		<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Enterprise control panel</a></h1>
	              </div>
	           </div>
			   <?php if($this->session->elogged_in==TRUE):?>
				<div class="col-md-offset-3 col-md-2" style="line-height: 4">
					<a class="title" href="<?php echo base_url().'index.php/AdminCP'?>"><?php if (isset($name)) echo $name?></a>	
				</div>
				<div class="col-md-2"  style="line-height: 4">
					<a class="title" href="<?php echo base_url().'index.php/logout'?>">Đăng xuất</a>
				</div>
				<?php else: ?>
					<div class="col-md-3 col-md-offset-4">
						<p class="title"> Bạn chưa đăng nhập</p>
					</div>
				<?php endif;?>
	            </div>
	           </div>
	        </div>
	     </div>
	</div>
</section>
<div class="page-content">
	<?php if(isset($message )):?>
	<div class="row">	 
		<h4 class="col-md-offset-3 col-md-6 content-box" style="color:red"><?php echo $message ?></h4>
	</div> 
	<?php endif;?>
		<div class="row">
			<div class="col-md-3">
				<div id="sidebar" class="sidebar content-box">
	                <h5><i class="fa fa-download fa-fw" aria-hidden="true"></i>
	                    <strong> Xem dữ liệu</strong>
	                </h5>
	                <ul class="nav nav-pills nav-stacked">
	                    <li><a href="#">Xem dữ liệu</a></li>
	                </ul>
	                <h5><i class="fa fa-cog fa-fw" aria-hidden="true"></i>
	                    <strong>Quản lý nhiên liệu</strong>
	                </h5>
	                <ul class="nav nav-pills nav-stacked">
	                <li><a href="<?php echo base_url().'index.php/Enterprise/brand'?>">Danh sách nhiên liệu</a></li>   
	                </ul>
	                <h5><i class="fa fa-cog fa-fw" aria-hidden="true"></i>
	                    <strong>Phương pháp kiểm kê</strong>
	                </h5>
	                <ul class="nav nav-pills nav-stacked">
	                <li><a href="<?php echo base_url().'index.php/Enterprise/pick'?>">Phương pháp CEMS</a></li>
	                <li><a href="<?php echo base_url().'index.php/Enterprise/hspt'?>">Hệ số phát thải</a></li>
	                </ul>
	                <h5><i class="fa fa-cog fa-fw" aria-hidden="true"></i>
	                    <strong>Quản lý nguồn thải</strong>
	                </h5>
	                <ul class="nav nav-pills nav-stacked">
	                <li><a href="<?php echo base_url().'index.php/Enterprise/registersource'?>">Đăng ký nguồn thải mới</a></li>
	                <li><a href="<?php echo base_url().'index.php/Enterprise/listsource'?>">Danh sách nguồn thải</a></li>    
	                </ul>

            	</div>
			</div>
		