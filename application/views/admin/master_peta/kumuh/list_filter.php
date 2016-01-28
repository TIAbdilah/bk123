
<?php $this->load->view('admin/master_peta/kumuh/breadcrumbs') ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
                <?php if ($text['rg']['M02a']) { ?>
                    <span class="pull-right">
                        <a href="<?php echo site_url('master_peta/kumuh/add') ?>">
                            <?php echo $text['txt']->button['add_data'] ?>
                        </a>
                    </span>
                <?php } ?>
            </header>
            <div class="panel-body">
                <button class="btn btn-xs btn-default"><i class="icon-file"></i> </button> : View Data 
                <button class="btn btn-xs btn-default"><i class="icon-pencil"></i> </button> : Edit Data 
                <button class="btn btn-xs btn-default"><i class="icon-remove"></i> </button> : Delete Data 
                <div class="adv-table">
                    <table  class="display table table-striped" id="example1" style="width: 100%">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Kode Daerah</th>
                                <th rowspan="2">Nama Kawasan</th>
                                <!--<th colspan="4">Bobot Kekumuhan</th>-->
                                <th colspan="3">Satus Data</th>
                                <th rowspan="2" width="12%"></th>
                            </tr>
                            <tr>
<!--                                <th><a href="#" title="Tingkat Kekumuhan">Tingkat Kekumuhan</a></th>
                                <th><a href="#" title="Pertimbangan Lain">Pertimbangan Lain</a></th>
                                <th><a href="#" title="Kejelasan Status Lahan">Status Lahan</a></th>
                                <th><a href="#" title="Kesesuaian dg RTR">Sesuai RTR</a></th>-->
                                <th><img src="<?php echo base_url().'assets/public2/images/eks.jpg'?>"></th>
                                <th><img src="<?php echo base_url().'assets/public2/images/per.jpg'?>"></th>
                                <th><img src="<?php echo base_url().'assets/public2/images/pen.jpg'?>"></th>
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
<!--                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>-->
                                    <td><?php if($test->check_detail($data->id_kaw_kumuh, 'eksisting') != 0){echo '<i class="icon-ok"></i>';};?></td>
                                    <td><?php if($test->check_detail($data->id_kaw_kumuh, 'perencanaan') != 0){echo '<i class="icon-ok"></i>';};?></td>
                                    <td><?php if($test->check_detail($data->id_kaw_kumuh, 'penanganan') != 0){echo '<i class="icon-ok"></i>';};?></td>
                                    <td class="dt-body-center">
                                        <a title="View Kawasan" 
                                           href="<?php echo site_url('master_peta/kumuh/view/' . $data->id_kaw_kumuh) ?>" 
                                           class="btn btn-xs btn-default"><?php echo $text['txt']->button['view_data'] ?>
                                        </a>
                                        <?php if ($text['rg']['M02c']) { ?>
                                            <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" 
                                               href="<?php echo site_url('master_peta/kumuh/edit/' . $data->id_kaw_kumuh) ?>" 
                                               class="btn btn-xs btn-default"><?php echo $text['txt']->button['edit_data'] ?>
                                            </a>
                                        <?php } ?>
                                        <?php if ($text['rg']['M02d']) { ?>
                                            <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" 
                                               href="<?php echo site_url('master_peta/kumuh/delete/' . $data->id_kaw_kumuh) ?>" 
                                               class="btn btn-xs btn-default"><?php echo $text['txt']->button['delete_data'] ?>
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



