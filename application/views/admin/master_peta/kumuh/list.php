
<?php $this->load->view('admin/master_peta/kumuh/breadcrumbs')           ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
                <span class="pull-right">
                    <a href="<?php echo site_url('master_peta/kumuh/add') ?>">
                        <?php echo $text['txt']->button['add_data'] ?>
                    </a>
                </span>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-striped" id="example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Daerah</th>
                                <th>Nama Kawasan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($list_data as $data) {
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data->kode_daerah ?></td>
                                    <td><?php echo $data->nm_kawasan ?></td>
                                    <td class="dt-body-center">
                                        <a title="List Kabupaten" 
                                           href="<?php echo site_url('master_peta/kumuh/view/' . $data->id_kaw_kumuh) ?>" 
                                           class="btn btn-xs btn-success">
                                            <i class="icon-file"></i> 
                                        </a>
                                        <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" 
                                           href="<?php echo site_url('master_peta/kumuh/edit/' . $data->kode_daerah) ?>" 
                                           class="btn btn-xs btn-warning">
                                               <?php echo $text['txt']->button['edit_data'] ?>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>                
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>



