
<?php // $this->load->view('admin/master_peta/pulau_kecil_terluar/breadcrumbs')     ?>

<?php
//if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
//endif;
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
                <span class="pull-right">
                    <?php // if ($text['rg']['M01a']) { ?>
                    <a href="<?php echo site_url('master_peta/pulau_kecil_terluar/add') ?>"><?php echo $text['txt']->button['add_data'] ?></a>
                    <?php // } ?>
                </span>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-striped" id="example1" style="width: 100%">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Provinsi</th>
                                <th rowspan="2">Kabupaten/Kota</th>
                                <th rowspan="2">Kecamatan</th>
                                <th rowspan="2">Desa/Kelurahan</th>
                                <th rowspan="2">Pulau</th>
                                <th colspan="2">Kependudukan</th>
                                <th rowspan="2" width="12%"></th>
                            </tr>
                            <tr>
                                <th>Penduduk</th>
                                <th>Kepala</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($list_data as $perbatasan) {
                                ?>
                                <tr>
                                    <td><?php echo $no?></td>
                                    <td><?php echo $perbatasan->nama_kawasan?></td>
                                    <td><?php echo $perbatasan->nama_kawasan?></td>
                                    <td><?php echo $perbatasan->nama_kawasan?></td>
                                    <td><?php echo $perbatasan->nama_kawasan?></td>
                                    <td><?php echo $perbatasan->nama_kawasan?></td>
                                    <td><?php echo "10"?></td>
                                    <td><?php echo "20"?></td>
                                    <td class="dt-body-center">
                                        <a title="<?php echo $text['txt']->button_title['view_data'] ?>" 
                                           href="<?php echo site_url('master_peta/pulau_kecil_terluar/view/'.$perbatasan->id_perbatasan) ?>" class="btn btn-xs btn-default">
                                               <?php echo $text['txt']->button['view_data'] ?>
                                        </a>
                                        <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" 
                                           href="<?php echo site_url('master_peta/pulau_kecil_terluar/edit/'.$perbatasan->id_perbatasan) ?>" class="btn btn-xs btn-default">
                                               <?php echo $text['txt']->button['edit_data'] ?>
                                        </a>
                                        <a title="<?php echo $text['txt']->button_title['delete_data'] ?>" href="#" 
                                           onclick="if (confirm('<?php echo $text['msg']->get_message_text('delete-confirm', array('ini')) ?>')) {
                                                       window.location = '<?php echo site_url('master/dokumen/delete/'.$perbatasan->id_perbatasan) ?>';
                                                   }" class="btn btn-xs btn-default">
                                            <?php echo $text['txt']->button['delete_data'] ?>
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



