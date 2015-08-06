
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
                        <label class="col-lg-2 col-sm-2 control-label" for="inpIdRole">Role</label>
                        <div class="col-lg-4">
                            <select name="inpIdRole" class="form-control">                                                
                                <option value="">-Pilih Role-</option>
                                <?php
                                foreach ($SIList_role as $row) {
                                    echo "<option value=\"" . $row->id_role . "\"" . set_select('inpIdRole', $row->id_role, $row->id_role == $data->id_role) . ">" . $row->nama_role . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label" for="inpWilayahKerja">Wilayah Kerja</label>
                        <div class="col-lg-4">
                            <select name="inpWilayahKerja" class="form-control">                                                
                                <option value="">-Pilih Kabupaten/Kota-</option>
                                <?php
                                foreach ($SIList_kabupaten as $row) {
                                    echo "<option value=\"" . $row->kode_daerah . "\"" . set_select('inpWilayahKerja', $row->kode_daerah, $row->kode_daerah == $data->kode_daerah) . ">" . $row->nm_daerah .' ( '.$row->kode_daerah.' )'. "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label" for="inpUsername">Username</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" id="inpUsername" name="inpUsername" value="<?php echo $data->username ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label" for="inpEmail">Email</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" id="inpEmail" name="inpEmail" value="<?php echo $data->email ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label" for="inpPassword">Password</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="password" id="inpPassword" name="inpPassword" value="<?php echo $data->password ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn"><?php echo $text['txt']->button['save_edit'] ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
