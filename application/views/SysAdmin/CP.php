<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 10/31/2017
 * Time: 5:18 PM
 */
?>
<ul class="sidebar-menu tree" data-widget="tree">
    <li class="header">DÀNH CHO ADMIN</li>
    <li class="treeview">
        <a href="#"><i class="fa fa-calendar fa-fw"></i>
            <span> Quản lý lớp học</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu" style="display: block;">
            <li><a href=""> Lớp học hiện tại</a></li>
            <li><a href=""> Link lớp học</a></li>
        </ul>
    </li>
    <li class="header">DÀNH CHO SYSADMIN</li>
    <li class="treeview">
        <a href="#"><i class="fa fa-wrench"></i>
            <span> Quản lý hệ thống</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu" style="display: block;">
            <li><a href="<?= base_url().'SysAdmin/manageField' ;?>"> Quản lý các đề mục</a></li>
            <li><a href=""> Quản lý danh sách Admin</a></li>
            <li><a href="<?= base_url().'SysAdmin/addLang' ;?>"> Ngôn ngữ</a></li>
        </ul>
    </li>
</ul>
</section>
</aside>
<?php if(isset($this->session->message)):?>
    <div class="row">
        <h4 class="col-md-offset-3 col-md-6 " style="color:red"><?php echo $this->session->message?></h4>
    </div>
<?php endif;?>
