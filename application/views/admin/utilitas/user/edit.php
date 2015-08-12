
<?php $this->load->view('admin/utilitas/user/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo site_url('utilitas/user/process/edit/' . $data->id_user) ?>" method="POST">
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpIdRole">Role</label>
                        <div class="col-lg-4">
                            <select name="inpIdRole" class="form-control">                                                
                                <option value="">-Pilih Role-</option>
                                <?php
                                foreach ($SIList_role as $row1) {
                                    echo "<option value=\"" . $row1->id_role . "\"" . set_select('inpIdRole', $row1->id_role, $row1->id_role == $data->id_role) . ">" . $row1->nama_role . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpWilayahKerjaP">Wilayah Kerja (Propinsi)</label>
                        <div class="col-lg-4">
                            <select name="inpWilayahKerjaP" class="form-control">                                                
                                <option value="">-Pilih Propinsi-</option>
                                <?php
                                foreach ($SIList_propinsi as $row2) {
                                    echo "<option value=\"" . $row2->kode_daerah . "\"" . set_select('inpWilayahKerjaP', $row2->kode_daerah, $row2->kode_daerah == $data->propinsi) . ">" . $row2->nm_daerah .' ( '.$row2->kode_daerah.' )'. "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpWilayahKerjaK">Wilayah Kerja (Kab / Kota)</label>
                        <div class="col-lg-4">
                            <select name="inpWilayahKerjaK" class="form-control">                                                
                                <option value="">-Pilih Kabupaten/Kota-</option>
                                <?php
                                foreach ($SIList_kabupaten as $row3) {
                                    echo "<option value=\"" . $row3->kode_daerah . "\"" . set_select('inpWilayahKerjaK', $row3->kode_daerah, $row3->kode_daerah == $data->kab_kota) . ">" . $row3->nm_daerah .' ( '.$row3->kode_daerah.' )'. "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpBagian">Pengisi Data</label>
                        <div class="col-lg-4">
                            <select name="inpBagian" class="form-control">                                                
                                <option value="">-Pilih Pengisi Data-</option>
                                <option value="1" <?php echo set_select('inpBagian', 1, 1 == $data->bagian)?>>Data Eksisting</option>
                                <option value="2" <?php echo set_select('inpBagian', 2, 2 == $data->bagian)?>>Data Perencanaan</option>
                                <option value="3" <?php echo set_select('inpBagian', 3, 4 == $data->bagian)?>>Data Penanganan dan Pengendalian</option>
                            </select>
                        </div>
                    </div>                 
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpUsername">Username</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" id="inpUsername" name="inpUsername" value="<?php echo $data->username ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpEmail">Email</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" id="inpEmail" name="inpEmail" value="<?php echo $data->email ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpPassword">Password</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="password" id="inpPassword" name="inpPassword" value="<?php echo $data->password ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-9">
                            <button type="submit" class="btn"><?php echo $text['txt']->button['save_edit'] ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
