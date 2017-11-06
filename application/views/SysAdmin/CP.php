<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 10/31/2017
 * Time: 5:18 PM
 */
?>
<ul class="sidebar-menu tree" data-widget="tree">
    <li class="header"><?= $this->lang->line('ADMIN SECTION'); ?></li>
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
    <li class="header"><?= $this->lang->line('SYSADMIN SECTION'); ?></li>
    <li class="treeview">
        <a href="#"><i class="fa fa-wrench"></i>
            <span><?= $this->lang->line('Manage System'); ?></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu" style="display: block;">
            <li><a href="<?= base_url().'SysAdmin/manageBranch' ;?>"><?= $this->lang->line('Manage Branch'); ?></a></li>
            <li><a href=""><?= $this->lang->line('Manage Admin'); ?></a></li>
            <li><a href="<?= base_url().'SysAdmin/addLang' ;?>"><?= $this->lang->line('Language'); ?></a></li>
        </ul>
    </li>
</ul>
</section>
</aside>
<div class="content-wrapper" style="min-height: 960.3px;">
<?php if(isset($this->session->message)):?>
    <div class="alert alert-success">
        <i class="fa fa-check fa-fw"></i> <?php echo $this->session->message?>
    </div>
<?php endif;?>
