
<?php $this->load->view('admin/utilitas/user/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo site_url('utilitas/user/process/add') ?>" method="POST">
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpIdRole">Role</label>
                        <div class="col-lg-4">
                            <select name="inpIdRole" class="form-control">                                                
                                <option value="">-Pilih Role-</option>
                                <?php
                                foreach ($SIList_role as $row) {
                                    echo "<option value=\"" . $row->id_role . "\">" . $row->nama_role . "</option>";
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
                                foreach ($SIList_propinsi as $row) {
                                    echo "<option value=\"" . $row->kode_daerah . "\">" . $row->nm_daerah .' ( '.$row->kode_daerah.' )'. "</option>";
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
                                foreach ($SIList_kabupaten as $row) {
                                    echo "<option value=\"" . $row->kode_daerah . "\">" . $row->nm_daerah .' ( '.$row->kode_daerah.' )'. "</option>";
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
                                <option value="1">Data Eksisting</option>
                                <option value="2">Data Perencanaan</option>
                                <option value="3">Data Penanganan dan Pengendalian</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpUsername">Username</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" id="inpUsername" name="inpUsername" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpEmail">Email</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" id="inpEmail" name="inpEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpPassword">Password</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="password" id="inpPassword" name="inpPassword" placeholder="Password">
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
