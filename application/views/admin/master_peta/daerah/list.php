
<?php $this->load->view('admin/master_peta/daerah/breadcrumbs') ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page_1 ?>
                <span class="pull-right">
                    <?php if ($text['rg']['M01a']) { ?>
                        <a href="<?php echo site_url('master_peta/daerah/add') ?>"><?php echo $text['txt']->button['add_data'] ?></a>
                    <?php } ?>
                </span>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-striped" id="example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Daerah</th>
                                <?php if ($kategori == 'propinsi') { ?>                                    
                                    <th>Nama Propinsi</th>
                                <?php } else if ($kategori == 'kabupaten / kota') { ?>
                                    <th>Nama Kab / Kota</th>
                                <?php } else if ($kategori == 'kecamatan') { ?>
                                    <th>Nama Kecamatan</th>
                                <?php } else { ?>                                    
                                    <th>Nama Kelurahan / Desa</th>
                                <?php } ?>
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
                                    <td>
                                        <?php
                                        if ($kategori != 'kelurahan / desa') {
                                            echo '<a href="' . site_url('master_peta/daerah/index/' . $data->kode_daerah) . '">' . $data->nm_daerah . '</a>';
                                        } else {
                                            echo $data->nm_daerah;
                                        }
                                        ?>
                                    </td>
                                    <td class="dt-body-center">
                                        <?php if ($text['rg']['M01c']) { ?>
                                            <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" 
                                               href="<?php echo site_url('master_peta/daerah/edit/' . $data->kode_daerah) ?>" 
                                               class="btn btn-xs btn-warning"><?php echo $text['txt']->button['edit_data'] ?>
                                            </a>
                                        <?php } ?>
                                        <?php if ($text['rg']['M01d']) { ?>
                                            <a title="<?php echo $text['txt']->button_title['delete_data'] ?>" href="#" 
                                               onclick="if (confirm('<?php echo $text['msg']->get_message_text('delete-confirm', array($data->nm_daerah)) ?>')) {
                                                                   window.location = '<?php echo site_url('master_peta/daerah/delete/' . $data->kode_daerah) ?>';
                                                               }" class="btn btn-xs btn-danger"><?php echo $text['txt']->button['delete_data'] ?>
                                            </a> 
                                        <?php } ?>
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



