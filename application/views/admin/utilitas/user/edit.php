
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
                            <?php
                            if ($data->id_role != 3) {
                                ?>
                                <select id="inpIdRole" name="inpIdRole" class="form-control">                                                
                                    <option value="">-Pilih Kategori Pengguna-</option>
                                    <?php
                                    foreach ($SIList_role as $row) {
                                        if ($row->tingkat > $this->session->userdata('tingkat_role')) {
                                            echo "<option value=\"" . $row->id_role . "\"" . set_select('inpIdRole', $row->id_role, $row->id_role == $data->id_role) . ">" . $row->nama_role . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                                <?php
                            } else {
                                ?>
                                <select id="inpIdRole" name="inpIdRole" class="form-control" readonly>                                                
                                    <option value="3">Super Admin</option>
                                </select>
                                <?php
                            }
                            ?>
                        </div>
                    </div>         
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpModul">Modul</label>
                        <div class="col-lg-4">
                            <select id="inpModul" name="inpModul" class="form-control">                                                
                                <option value="">-Pilih Modul-</option>
                                <?php
                                foreach ($SIList_modul as $row) {
                                    echo "<option value=\"" . $row->list_item . "\"" . set_select('inpModul', $row->list_item, $row->list_item == $data->modul) . ">" . $row->list_item . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpBagian">Pengisi Data</label>
                        <div class="col-lg-4">
                            <select id="inpBagian" name="inpBagian" class="form-control">                                                
                                <option value="">-Pilih Penanggung Jawab Data-</option>
                                <option value="eksisting" <?php echo set_select('inpBagian', 'eksisting', 'eksisting' == $data->bagian) ?>>Data Eksisting</option>
                                <option value="perencanaan" <?php echo set_select('inpBagian', 'perencanaan', 'perencanaan' == $data->bagian) ?>>Data Perencanaan</option>
                                <option value="penanganan" <?php echo set_select('inpBagian', 'penanganan', 'penanganan' == $data->bagian) ?>>Data Penanganan dan Pengendalian</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpWilayahKerjaP">Wilayah Kerja (Propinsi)</label>
                        <div class="col-lg-4">
                            <select id="inpWilayahKerjaP" name="inpWilayahKerjaP" class="form-control">                                                
                                <option value="">-Pilih Propinsi-</option>
                                <?php
                                foreach ($SIList_propinsi as $row) {
                                    echo "<option value=\"" . $row->kode_daerah . "\"" . set_select('inpWilayahKerjaP', $row->kode_daerah, $row->kode_daerah == $data->propinsi) . ">" . $row->nm_daerah . ' ( ' . $row->kode_daerah . ' )' . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpWilayahKerjaK">Wilayah Kerja (Kab / Kota)</label>
                        <div class="col-lg-4">
                            <select id="inpWilayahKerjaK" name="inpWilayahKerjaK" class="form-control">                                                
                                <option value="">-Pilih Kabupaten / Kota-</option>
                                <?php
                                foreach ($SIList_kabupaten as $row) {
                                    echo "<option value=\"" . $row->kode_daerah . "\"" . set_select('inpWilayahKerjaK', $row->kode_daerah, $row->kode_daerah == $data->kab_kota) . ">" . $row->nm_daerah . ' ( ' . $row->kode_daerah . ' )' . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpNama">Nama</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" id="inpNama" name="inpNama" value="<?php echo $data->nama ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpNoTlp">No Telp</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" id="inpNoTlp" name="inpNoTlp" value="<?php echo $data->no_telp ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpUsername">Username</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" id="inpUsername" name="inpUsername" value="<?php echo $data->username ?>" readonly>
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
                            <input class="form-control" type="password" id="inpPassword" name="inpPassword">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-9">
                            <button type="submit" class="btn"><?php echo $text['txt']->button['save_add'] ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
