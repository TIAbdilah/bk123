<?php
$this->load->view('admin/master_peta/kumuh/breadcrumbs');
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;

function generate_modal($id_modal, $folder, $foto) {
    return '<div class="modal fade" id="' . $id_modal . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Foto</h4>
                </div>
                <div class="modal-body text-center">
                    <img src="' . base_url() . 'assets/admin/img/' . $folder . '/' . $foto . '" width="100%"/> 
                </div>
            </div>
        </div>
    </div>';
}
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
                <div class="adv-table">
                    <table  class="display table table-striped" id="example1">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Kode Daerah</th>
                                <th rowspan="2">Nama Kawasan</th>
                                <th rowspan="2">SK</th>
                                <th colspan="4">Bobot Kekumuhan</th>
                                <th colspan="3">Satus Data</th>
                                <th rowspan="2"></th>
                            </tr>
                            <tr>
                                <th><a href="#" title="Tingkat Kekumuhan">TK</a></th>
                                <th><a href="#" title="Pertimbangan Lain">PL</a></th>
                                <th><a href="#" title="Kejelasan Status Lahan">K1</a></th>
                                <th><a href="#" title="Kesesuaian dg RTR">K2</a></th>
                                <th><a href="#" title="Eksisting">EKS</a></th>
                                <th><a href="#" title="Perencanaan">PER</a></th>
                                <th><a href="#" title="Penanganan">PEN</a></th>
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
                                    <td>
                                        <?php
                                        if ($data->sk != '') {
                                            echo '<a data-toggle="modal" href="#modal_sk' . $data->id_kaw_kumuh . '"><i class="icon-file"></i></a>'
                                            . generate_modal('modal_sk' . $data->id_kaw_kumuh, 'sk', $data->sk);
                                        }
                                        ?>
                                    </td>
                                    <?php
                                    if ($data->pen == 0) {
                                        ?>
                                        <td><?php echo $text['arc']->tingkat_kumuh($data->tk_e) ?></td>
                                        <td><?php echo $text['arc']->tingkat_per_lain($data->pl_e) ?></td>
                                        <td><?php echo $text['arc']->tingkat_lainya($data->ksl_e) ?></td>
                                        <td><?php echo $text['arc']->tingkat_lainya($data->kdrtr_e) ?></td>
                                        <?php
                                    } else {
                                        ?>
                                        <td><?php echo $text['arc']->tingkat_kumuh($data->tk_p) ?></td>
                                        <td><?php echo $text['arc']->tingkat_per_lain($data->pl_p) ?></td>
                                        <td><?php echo $text['arc']->tingkat_lainya($data->ksl_p) ?></td>
                                        <td><?php echo $text['arc']->tingkat_lainya($data->kdrtr_p) ?></td>
                                        <?php
                                    }
                                    ?>
                                    <td><?php
                                        if ($data->eks == 1) {
                                            echo "<i class=\"icon-ok\"></i>";
                                        }
                                        ?></td>
                                    <td><?php
                                        if ($data->per == 1) {
                                            echo "<i class=\"icon-ok\"></i>";
                                        }
                                        ?></td>
                                    <td><?php
                                    if ($data->pen == 1) {
                                        echo "<i class=\"icon-ok\"></i>";
                                    }
                                    ?></td>
                                    <td class="dt-body-center">
                                        <a title="View Kawasan" 
                                           href="<?php echo site_url('master_peta/kumuh/view/' . $data->id_kaw_kumuh) ?>" 
                                           class="btn btn-xs btn-success"><?php echo $text['txt']->button['view_data'] ?>
                                        </a>
                                        <?php if ($text['rg']['M02c']) { ?>
                                            <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" 
                                               href="<?php echo site_url('master_peta/kumuh/edit/' . $data->id_kaw_kumuh) ?>" 
                                               class="btn btn-xs btn-warning"><?php echo $text['txt']->button['edit_data'] ?>
                                            </a>
                                        <?php } ?>
    <?php if ($text['rg']['M02d']) { ?>
                                            <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" 
                                               href="<?php echo site_url('master_peta/kumuh/delete/' . $data->id_kaw_kumuh) ?>" 
                                               class="btn btn-xs btn-danger"><?php echo $text['txt']->button['delete_data'] ?>
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



