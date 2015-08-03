
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
                <div class="adv-table">
                    <table  class="display table table-striped" id="example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Daerah</th>
                                <th>Nama Kawasan</th>
                                <th>Status</th>
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
                                    <td>
                                        <?php
                                        if ($data->eks == 0) {
                                            echo "<label class=\"label label-danger\">EKS</label>&nbsp;";
                                        } else {
                                            echo "<label class=\"label label-success\">EKS</label>&nbsp;";
                                        }
                                        if ($data->per == 0) {
                                            echo "<label class=\"label label-danger\">PER</label>&nbsp;";
                                        } else {
                                            echo "<label class=\"label label-success\">PER</label>&nbsp;";
                                        }
                                        if ($data->pen == 0) {
                                            echo "<label class=\"label label-danger\">PEN</label>&nbsp;";
                                        } else {
                                            echo "<label class=\"label label-success\">PEN</label>&nbsp;";
                                        }
                                        ?>
                                    </td>
                                    <td class="dt-body-center">
                                        <a title="List Kabupaten" 
                                           href="<?php echo site_url('master_peta/kumuh/view/' . $data->id_kaw_kumuh) ?>" 
                                           class="btn btn-xs btn-success">
                                               <?php echo $text['txt']->button['view_data'] ?>
                                        </a>
                                        <?php if ($text['rg']['M02c']) { ?>
                                            <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" 
                                               href="<?php echo site_url('master_peta/kumuh/edit/' . $data->id_kaw_kumuh) ?>" 
                                               class="btn btn-xs btn-warning">
                                                   <?php echo $text['txt']->button['edit_data'] ?>
                                            </a>
                                        <?php } ?>
                                        <?php if ($text['rg']['M02d']) { ?>
                                            <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" 
                                               href="<?php echo site_url('master_peta/kumuh/delete/' . $data->id_kaw_kumuh) ?>" 
                                               class="btn btn-xs btn-danger">
                                                <?php echo $text['txt']->button['delete_data'] ?>
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



