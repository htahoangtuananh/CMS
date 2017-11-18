<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 11/1/2017
 * Time: 3:44 PM
 */

?>
    <section class="content-header">
        <h1><?= $this->lang->line('Manage node'); ?></h1>
    </section>
    <section class="content">
        <div class="form-group">
            <a href="<?= base_url().'SysAdmin/addNode/' ?>" class ='btn btn-primary'>
                <i class="fa fa-plus"></i> <?= $this->lang->line('Add new node'); ?>
            </a>
        </div>
        <div class="box box-default">
            <div class="box-body">

                <table id="dataTable" class="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th><?= $this->lang->line('Node name'); ?></th>
                        <th><?= $this->lang->line('Branch name'); ?></th>
                        <th><?= $this->lang->line('Language'); ?></th>
                        <th><?= $this->lang->line('Enable'); ?></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th><?= $this->lang->line('Node name'); ?></th>
                        <th><?= $this->lang->line('Branch name'); ?></th>
                        <th><?= $this->lang->line('Language'); ?></th>
                        <th><?= $this->lang->line('Enable'); ?></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php foreach($node as $nodes): ?>
                        <tr>
                            <td><?= $nodes['node_name']?></td>
                            <td><?= $nodes['branch_name']?></td>
                            <td><?= $nodes['lang']?></td>
                            <td class="toggle-button"><input data-id="<?= $nodes['node_id']; ?>" data-table="node" data-enable='<?= $nodes['is_enable'];?>'  class="toggle" <?php if($nodes['is_enable']==1):?>checked<?php endif;?> data-toggle="toggle" type="checkbox"></td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>

            </div>
        </div>
    </section>
</div>
<script>

    $('.toggle-button').click(function(){
        var table = $(this).find('input').attr('data-table');
        var target_id = $(this).find('input').attr('data-id');
        var enable = $(this).find('input').attr('data-enable');
        enable = (enable==0)? 1:0;

        var csrf = '<?php echo $this->security->get_csrf_token_name(); ?>';
        var csrf_token = '<?php echo $this->security->get_csrf_hash(); ?>';

        $.ajax({
            data: {'id': target_id,'table': table, 'enable': enable, '<?php echo $this->security->get_csrf_token_name(); ?>' : csrf_token},
            type: "POST",
            url: '<?= base_url()."SysAdmin/handleAjax"?>',
        }).success(function (result) {
            location.reload();
        });
    });
</script>