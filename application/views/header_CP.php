<?php
/**
 * @author Tuan Anh <htc.hoangtuananh@gmail.com>
 */
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?= $this->lang->line('Content Management System');?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().'assets/web_data/wp-content/uploads/2015/10/fav.png'?>">
    <meta name="keywords" content=""/>
    <meta name="language" content="vi"/>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->

    <link rel='stylesheet' id='boostrap-css' href='<?php echo base_url()."assets/web_data/css/bootstrap.min.css"?>'/>
    <link rel="stylesheet" href="<?php echo base_url().'assets/web_data/css/dist/css/AdminLTE.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/web_data/css/font-awesome.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/web_data/css/datatables.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/web_data/css/bootstrap-toggle.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/web_data/css/custom.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/web_data/css/dist/css/skins/_all-skins.min.css'?>">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script  type='text/javascript' src="<?php echo base_url().'assets/web_data/includes/js/jQuery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/web_data/bower_components/bootstrap/dist/js/bootstrap.min.js'?>"></script>
    <!-- Morris.js charts -->
    <script src="<?php echo base_url().'assets/web_data/bower_components/raphael/raphael.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/web_data/bower_components/morris.js/morris.min.js'?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url().'assets/web_data/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'?>"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url().'assets/web_data/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/web_data/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url().'assets/web_data/bower_components/jquery-knob/dist/jquery.knob.min.js'?>"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url().'assets/web_data/bower_components/moment/min/moment.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/web_data/bower_components/bootstrap-daterangepicker/daterangepicker.js'?>"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url().'assets/web_data/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'?>"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url().'assets/web_data/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'?>"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url().'assets/web_data/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url().'assets/web_data/bower_components/fastclick/lib/fastclick.js'?>"></script>

    <script src="<?php echo base_url().'assets/web_data/js/datatables.min.js'?>"></script>

    <script src="<?php echo base_url().'assets/web_data/js/bootstrap-toggle.min.js'?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url().'assets/web_data/css/dist/js/adminlte.min.js'?>"></script>
</head>
<script>
    $(document).ready(function(){
    $('.dataTable').DataTable();
    });
</script>

<body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
    <header class="main-header">
              <!-- Logo -->
            <a class="logo"  href="<?php echo base_url()?>">
                 <span class="logo-lg">Admin control panel</span>
                 <span class="logo-mini"><b>A</b>LT</span>
            </a>

            <div class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                   <?php if($this->session->admin_logged_in == TRUE):?>
                    <li>
                        <a class="title" href="<?php echo base_url().'index.php/AdminCP'?>"><?php echo $this->session->username ?></a>
                    </li>
                    <li>
                        <a class="title" href="<?php echo base_url().'index.php/logout'?>"><?= $this->lang->line('Log out');?></a>
                    </li>
                    <?php else: ?>
                    <li>
                        <a class="title"><?= $this->lang->line('Havent logged in yet');?></a>
                    </li>
                <?php endif;?>
                    </ul>
                </div>
            </div>
    </header>
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="height: auto;">






		