
<?php $this->load->view('admin/utilitas/user/breadcrumbs') ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-heading">
                <strong><?php echo $title_page ?></strong>
                <span class="pull-right">
                    <a href="<?php echo site_url('utilitas/user/add') ?>"><?php echo $text['txt']->button['add_data'] ?></a>
                </span>
            </div>
            <div class="panel-body">
                <div class="adv-table">
                    <table id="example" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Role</th>
                                <th><a href="#" title="Wilayah Kerja">WK</a></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($list_data as $data) {
                                if (substr($data->kode_daerah, 0, 2) == substr($this->session->userdata('role_daerah'), 0, 2)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $data->username ?></td>
                                        <td><?php echo $data->email ?></td>
                                        <td><?php echo $text['arc']->active[$data->active] ?></td>
                                        <td><?php echo $data->nama_role ?></td>
                                        <td><?php echo $data->kode_daerah ?></td>
                                        <td class="dt-body-center">
                                            <?php
                                            if ($data->active == 0) {
                                                ?>
                                                <a title="active" 
                                                   href="<?php echo site_url('utilitas/user/aktivasi_user/active/' . $data->id_user) ?>" 
                                                   class="btn btn-xs btn-info">
                                                    <i class="icon-key"></i></a>
                                                <?php
                                            } else {
                                                ?>
                                                <a title="deactive" 
                                                   href="<?php echo site_url('utilitas/user/aktivasi_user/deactive/' . $data->id_user) ?>" 
                                                   class="btn btn-xs btn-info">
                                                    <i class="icon-lock"></i></a>
                                                <?php
                                            }
                                            ?>
                                            <a title="<?php echo $text['txt']->button_title['view_data'] ?>" 
                                               href="<?php echo site_url('utilitas/user/view/' . $data->id_user) ?>" 
                                               class="btn btn-xs btn-success">
                                                   <?php echo $text['txt']->button['view_data'] ?>
                                            </a>
                                            <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" 
                                               href="<?php echo site_url('utilitas/user/edit/' . $data->id_user) ?>" 
                                               class="btn btn-xs btn-warning">
                                                   <?php echo $text['txt']->button['edit_data'] ?>
                                            </a>
                                            <a title="<?php echo $text['txt']->button_title['delete_data'] ?>" href="#" 
                                               onclick="if (confirm('<?php echo $text['msg']->get_message_text('delete-confirm', array($data->username)) ?>')) {
                                                               window.location = '<?php echo site_url('utilitas/user/delete/' . $data->id_user) ?>';
                                                           }" 
                                               class="btn btn-xs btn-danger">
                                                <?php echo $text['txt']->button['delete_data'] ?>
                                            </a>                      
                                        </td>
                                    </tr>
                                    <?php
                                    $no++;
                                }
                            }
                            ?>                
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>



