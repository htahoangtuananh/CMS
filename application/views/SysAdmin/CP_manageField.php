<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 11/1/2017
 * Time: 3:44 PM
 */

?>

    <section class="content-header">
        <h1>Quản lý mục</h1>
    </section>
    <section class="content">
        <div class="form-group">
            <a href="<?= base_url().'SysAdmin/addBranch/' ?>" class ='btn btn-primary'>
                <i class="fa fa-plus"></i> Thêm mục mới
            </a>
        </div>
        <div class="box box-default">
            <div class="box-body">

                <table id="dataTable" class="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Tên đề mục</th>
                        <th>Mục cha</th>
                        <th>Đường link</th>
                        <th>Bật</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Tên đề mục</th>
                        <th>Mục cha</th>
                        <th>Đường link</th>
                        <th>Bật</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>asfas</td>
                            <td>asdasda</td>
                            <td>asdasdad</td>
                            <td><input class="toggle" checked data-toggle="toggle" type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>asfas</td>
                            <td>asdasda</td>
                            <td>asdasdad</td>
                            <td><input class="toggle" checked data-toggle="toggle" type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>asfas</td>
                            <td>asdasda</td>
                            <td>asdasdad</td>
                            <td><input class="toggle" checked data-toggle="toggle" type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>asfas</td>
                            <td>asdasda</td>
                            <td>asdasdad</td>
                            <td><input class="toggle" checked data-toggle="toggle" type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>asfas</td>
                            <td>asdasda</td>
                            <td>asdasdad</td>
                            <td><input class="toggle" checked data-toggle="toggle" type="checkbox"></td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </section>
</div>
