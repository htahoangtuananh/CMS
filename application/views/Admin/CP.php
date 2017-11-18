<ul class="sidebar-menu tree" data-widget="tree">
    <li class="header"><?= $this->lang->line('ADMIN SECTION'); ?></li>
    <?php foreach ($branch as $key => $branchs): ?>
        <li class="treeview">
            <a href="#"><i class="fa fa-<?= $branchs['icon']?> fa-fw"> </i>
                <span><?= $branchs['branch_name']?></span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu" style="display: block;">
                <?php foreach($node as $nodes):?>
                    <?php if($nodes['branch_id'] == $branchs['branch_id']):?>
                        <li><a href="<?= base_url().'Admin/'.$nodes['node_link'] ?>"><?= $nodes['node_name']?></a></li>
                    <?php endif;?>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endforeach;?>
</ul>
</section>
</aside>
<div class="content-wrapper" style="min-height: 960.3px;">
    <?php if(isset($this->session->message)):?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <i class="fa fa-check fa-fw"></i> <?php echo $this->session->message?>
        </div>
    <?php endif;?>
