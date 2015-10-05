
<?php $this->load->view('admin/master_peta/perdesaan/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="<?php echo site_url('master_peta/perdesaan/process/add/') ?>" method="POST">
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">Nama Kawasan</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpNamaKawasan" name="inpNamaKawasan" placeholder="Nama Kawasan">
                        </div>
                    </div>    
                    <div class="form-group">
                        <label for="inpKodeDaerah" class="col-lg-2 col-sm-2 control-label">Kabupaten</label>
                        <div class="col-lg-4">                            
                            <select id="inpKodeDaerah" name="inpKodeDaerah" class="form-control" >  
                                <option>Pilih Kode Daerah</option>
                                <?php
                                $no = 1;
                                foreach ($SIList_kabupaten as $row) {
                                    if ($this->session->userdata('role') == 'admin') {
                                        if (substr($row->kode_daerah, 0, 2) == $this->session->userdata('role_propinsi')) {
                                            echo "<option value=\"" . $row->kode_daerah . "\">" . $row->nm_daerah . ' ( ' . $row->kode_daerah . ' )' . "</option>";
                                        }
                                    } else if ($this->session->userdata('role') == 'operator') {
                                        if ($row->kode_daerah == $this->session->userdata('role_kab_kota')) {
                                            echo "<option value=\"" . $row->kode_daerah . "\">" . $row->nm_daerah . ' ( ' . $row->kode_daerah . ' )' . "</option>";
                                        }
                                    } else {
                                        echo "<option value=\"" . $row->kode_daerah . "\">" . $row->nm_daerah . ' ( ' . $row->kode_daerah . ' )' . "</option>";
                                    }
                                    $no++;
                                }
                                ?>
                            </select>
                        </div>
                    </div>   
                    <div class="form-group">
                        <label for="inpKecamatan" class="col-lg-2 col-sm-2 control-label">Kecamatan</label>
                        <div class="col-lg-4">
                            <div class="input-group m-bot15">                                
                                <input type="text" class="form-control" id="inpKecamatan" name="inpKecamatan" placeholder="Kecamatan"> 
                                <span class="input-group-addon"><a href="#" id="btnKec"><i class="icon-chevron-left"></i></a></span>
                            </div>
                        </div>
                        <div class="col-lg-10 col-lg-offset-2" id="pilihan">

                        </div>
                    </div>  
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn"><?php echo $text['txt']->button['save_add'] ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>