<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 11/1/2017
 * Time: 3:44 PM
 */

?>
    <section class="content-header">
        <h1><?= $this->lang->line('Manage Branch'); ?></h1>
    </section>
    <section class="content">
        <div class="form-group">
            <a href="<?= base_url().'SysAdmin/addBranch/' ?>" class ='btn btn-primary'>
                <i class="fa fa-plus"></i> <?= $this->lang->line('Add new branch'); ?>
            </a>
        </div>
        <div class="box box-default">
            <div class="box-body">

                <table id="dataTable" class="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th><?= $this->lang->line('Branch name'); ?></th>
                        <th><?= $this->lang->line('Node name'); ?></th>
                        <th><?= $this->lang->line('Language'); ?></th>
                        <th><?= $this->lang->line('Enable'); ?></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th><?= $this->lang->line('Branch name'); ?></th>
                        <th><?= $this->lang->line('Node name'); ?></th>
                        <th><?= $this->lang->line('Language'); ?></th>
                        <th><?= $this->lang->line('Enable'); ?></th>
                    </tr>
                    </tfoot>
                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>
    </section>
</div>
