<?php $this->load->view('admin/master_peta/kumuh/breadcrumbs') ?>
<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>
<div class="panel panel-default">
    <div class="panel-heading"><?php echo $title_page ?></div>
    <div class="panel-body">
        <form class="form-horizontal" action="#" method="POST">
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Nama Kawasan</label>
                <div class="col-lg-4">
                    <p class="form-control-static">: <?php echo $data->nm_kawasan ?></p>
                </div>
                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Jumlah KK</label>
                <div class="col-lg-4">
                    <p class="form-control-static">: <?php echo $data->jumlah_kk ?> jiwa</p>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Luas Kawasan</label>
                <div class="col-lg-4">
                    <p class="form-control-static">: <?php echo $data->luas_kawasan ?> Ha</p>
                </div>
                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Jumlah RTLH</label>
                <div class="col-lg-4">
                    <p class="form-control-static">: <?php echo $data->jumlah_rtlh ?> unit</p>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Nama Kecamatan</label>
                <div class="col-lg-4">
                    <p class="form-control-static">: <?php // echo $data_kelurahan->nm_kecamatan  ?></p>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Detail Kawasan</div>
    <div class="panel-body">
        <table class="table table-striped table-bordered table-responsive" style="width: 100%">
            <tr>
                <th width="5%">No.</th>
                <th width="35%">KRITERIA dan Indikator</th>
                <th width="20%">Eksiting</th>
                <th width="20%">Perencanaan</th>
                <th width="20%">Penanganan & Pengendalian</th>
            </tr>
            <tr>
                <th>A</th>
                <th colspan="4">FISIK</th>
            </tr>
            <tr>
                <td>1a</td>
                <td>Ketidakteraturan Bangunan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->ketidakteraturan_bangunan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->ketidakteraturan_bangunan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->ketidakteraturan_bangunan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->ketidakteraturan_bangunan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->ketidakteraturan_bangunan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->ketidakteraturan_bangunan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>                
            </tr>
            <tr>
                <td>1b</td>
                <td>Tingkat Kepadatan Bangunan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->tingkat_kepadatan_bangunan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->tingkat_kepadatan_bangunan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->tingkat_kepadatan_bangunan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->tingkat_kepadatan_bangunan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->tingkat_kepadatan_bangunan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->tingkat_kepadatan_bangunan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>      
            </tr>
            <tr>
                <td>1c</td>
                <td>Ketidaksesuaian dengan Persyaratan Teknis Bangunan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->ketidaksesuaian_dg_persy_te_be_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->ketidaksesuaian_dg_persy_te_be_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->ketidaksesuaian_dg_persy_te_be_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->ketidaksesuaian_dg_persy_te_be_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->ketidaksesuaian_dg_persy_te_be_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->ketidaksesuaian_dg_persy_te_be_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>2a</td>
                <td>Cakupan Pelayanan Jalan Lingkungan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->cakupan_pelayanan_jalan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->cakupan_pelayanan_jalan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->cakupan_pelayanan_jalan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->cakupan_pelayanan_jalan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->cakupan_pelayanan_jalan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->cakupan_pelayanan_jalan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>2b</td>
                <td>Kualitas Permukaan Jalan Lingkungan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->kualitas_permukaan_jalan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->kualitas_permukaan_jalan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->kualitas_permukaan_jalan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->kualitas_permukaan_jalan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->kualitas_permukaan_jalan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->kualitas_permukaan_jalan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>  
            </tr>
            <tr>
                <td>3a</td>
                <td>Ketidaktersedian Akses Aman Air Minum</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->akses_air_minum_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->akses_air_minum_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->akses_air_minum_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->akses_air_minum_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->akses_air_minum_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->akses_air_minum_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>  
            </tr>
            <tr>
                <td>3b</td>
                <td>Tidak Terpenuhinya Kebutuhan Air Minum</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->tidak_terpenuhi_kebutuhan_air_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->tidak_terpenuhi_kebutuhan_air_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->tidak_terpenuhi_kebutuhan_air_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->tidak_terpenuhi_kebutuhan_air_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->tidak_terpenuhi_kebutuhan_air_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->tidak_terpenuhi_kebutuhan_air_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>4a</td>
                <td>Ketidakmampuan Mengalirkan Limpasan Air</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->tidak_mampu_mengalirkan_air_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->tidak_mampu_mengalirkan_air_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->tidak_mampu_mengalirkan_air_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->tidak_mampu_mengalirkan_air_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->tidak_mampu_mengalirkan_air_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->tidak_mampu_mengalirkan_air_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>  
            </tr>
            <tr>
                <td>4b</td>
                <td>Ketidaktersediaan Drainase</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->tidak_tersedia_drainase_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->tidak_tersedia_drainase_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->tidak_tersedia_drainase_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->tidak_tersedia_drainase_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->tidak_tersedia_drainase_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->tidak_tersedia_drainase_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>4c</td>
                <td>Ketidakterhubungan dengan Sistem Drainase Perkotaan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->tidak_terhubung_sistem_drainase_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->tidak_terhubung_sistem_drainase_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->tidak_terhubung_sistem_drainase_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->tidak_terhubung_sistem_drainase_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->tidak_terhubung_sistem_drainase_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->tidak_terhubung_sistem_drainase_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>4d</td>
                <td>Tidak Terpeliharanya Drainase</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->tidak_terpelihara_drainase_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->tidak_terpelihara_drainase_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->tidak_terpelihara_drainase_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->tidak_terpelihara_drainase_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->tidak_terpelihara_drainase_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->tidak_terpelihara_drainase_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>4e</td>
                <td>Kualitas Konstruksi Drainase</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->kualitas_konstruksi_drainase_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->kualitas_konstruksi_drainase_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->kualitas_konstruksi_drainase_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->kualitas_konstruksi_drainase_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->kualitas_konstruksi_drainase_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->kualitas_konstruksi_drainase_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>5a</td>
                <td>Sistem Pengelolaan Air Limbah Tidak Sesuai Standar Teknis</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->sistem_pengelolaan_air_limbah_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->sistem_pengelolaan_air_limbah_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->sistem_pengelolaan_air_limbah_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->sistem_pengelolaan_air_limbah_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->sistem_pengelolaan_air_limbah_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->sistem_pengelolaan_air_limbah_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>5b</td>
                <td>Prasarana dan Sarana Pengelolaan Air Limbah Tidak Sesuai Dengan Persyaratan Teknis</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->pras_pengelolaan_air_limbah_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->pras_pengelolaan_air_limbah_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->pras_pengelolaan_air_limbah_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->pras_pengelolaan_air_limbah_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->pras_pengelolaan_air_limbah_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->pras_pengelolaan_air_limbah_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>6a</td>
                <td>Prasarana dan Sarana Persampahan Tidak Sesuai dengan Persyaratan Teknis</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->pras_sampah_tidak_sesuai_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->pras_sampah_tidak_sesuai_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->pras_sampah_tidak_sesuai_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->pras_sampah_tidak_sesuai_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->pras_sampah_tidak_sesuai_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->pras_sampah_tidak_sesuai_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>6b</td>
                <td>Sistem Pengelolaan Persampahan yang Tidak Sesuai Standar Teknis</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->sis_pen_sampah_tidak_sesuai_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->sis_pen_sampah_tidak_sesuai_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->sis_pen_sampah_tidak_sesuai_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->sis_pen_sampah_tidak_sesuai_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->sis_pen_sampah_tidak_sesuai_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->sis_pen_sampah_tidak_sesuai_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>6c</td>
                <td>Terpeliharanya Sarana dan Prasarana Pengelolaan Persampahan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->terpelihara_pras_sampah_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->terpelihara_pras_sampah_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->terpelihara_pras_sampah_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->terpelihara_pras_sampah_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->terpelihara_pras_sampah_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->terpelihara_pras_sampah_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>7a</td>
                <td>Ketidaktersediaan Prasarana Proteksi Kebakaran</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->tidak_tersedia_pras_prokeb_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->tidak_tersedia_pras_prokeb_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->tidak_tersedia_pras_prokeb_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->tidak_tersedia_pras_prokeb_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->tidak_tersedia_pras_prokeb_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->tidak_tersedia_pras_prokeb_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>7b</td>
                <td>Ketersediaan Sarana Proteksi Kebakaran</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->tidak_tersedia_sar_prokeb_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->tidak_tersedia_sar_prokeb_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->tidak_tersedia_sar_prokeb_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->tidak_tersedia_sar_prokeb_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->tidak_tersedia_sar_prokeb_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->tidak_tersedia_sar_prokeb_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <th>B</th>
                <th colspan="4">Identifikasi Pertimbangan Lain</th>
            </tr>
            <tr>
                <td>8a</td>
                <td>Nilai Strategis Lokasi</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->nilai_strategis_lokasi_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->nilai_strategis_lokasi_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->nilai_strategis_lokasi_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->nilai_strategis_lokasi_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->nilai_strategis_lokasi_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->nilai_strategis_lokasi_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>8b</td>
                <td>Kependudukan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->kependudukan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->kependudukan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->kependudukan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->kependudukan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->kependudukan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->kependudukan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>8c</td>
                <td>Kondisi Sosial, Ekonomi, dan Budaya</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->sosial_budaya_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->sosial_budaya_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->sosial_budaya_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->sosial_budaya_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->sosial_budaya_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->sosial_budaya_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <th>C</th>
                <th colspan="4">Identifikasi Legalitas Lahan </th>
            </tr>
            <tr>
                <td>9a</td>
                <td>Kejelasan Status Penguasaan Lahan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->kejelasan_status_lahan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->kejelasan_status_lahan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->kejelasan_status_lahan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->kejelasan_status_lahan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->kejelasan_status_lahan_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->kejelasan_status_lahan_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>9b</td>
                <td>Kesesuaian RTR</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->ksesesuaian_rtr_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_eks->ksesesuaian_rtr_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                   <?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->ksesesuaian_rtr_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_per->ksesesuaian_rtr_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $data_detail_pen->ksesesuaian_rtr_prsn.'<br>'
                                . 'Keterangan<br>'
                                . $data_detail_pen->ksesesuaian_rtr_kt;
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>               
                <th colspan="2"></th>
                <td align="center">
                    <?php
                    if ($data_detail_eks != null) {
                        ?>
                        <?php if ($text['rg']['M02h']) { ?>
                            <a title="Edit Data Eksisting" 
                               href="<?php echo site_url('master_peta/kumuh_detail/edit/eksisting/' . $data_detail_eks->id_kumuh_detail) ?>" 
                               class="btn btn-large btn-warning">
                                <i class="icon-pencil"></i> Edit Data Eksisting
                            </a>
                        <?php } ?>
                    <?php } else { ?>
                        <?php if ($text['rg']['M02e']) { ?>
                            <a title="Add Data Eksisting" 
                               href="<?php echo site_url('master_peta/kumuh_detail/add/eksisting/' . $data->id_kaw_kumuh) ?>" 
                               class="btn btn-large btn-success">
                                <i class="icon-plus"></i> Add Data Eksisting
                            </a>
                        <?php } ?>
                    <?php } ?>
                </td>
                <td align="center">
                    <?php
                    if ($data_detail_per != null) {
                        ?>
                        <?php if ($text['rg']['M02i']) { ?>
                            <a title="Edit Data Perencanaan" 
                               href="<?php echo site_url('master_peta/kumuh_detail/edit/perencanaan/' . $data_detail_per->id_kumuh_detail) ?>" 
                               class="btn btn-large btn-warning">
                                <i class="icon-pencil"></i> Edit Data Perencanaan
                            </a>
                        <?php } ?>
                    <?php } else { ?>
                        <?php if ($text['rg']['M02f']) { ?>
                            <a title="Add Data Perencanaan" 
                               href="<?php echo site_url('master_peta/kumuh_detail/add/perencanaan/' . $data->id_kaw_kumuh) ?>" 
                               class="btn btn-large btn-success">
                                <i class="icon-plus"></i> Add Data Perencanaan
                            </a>
                        <?php } ?>
                    <?php } ?>
                </td>
                </td>
                <td align="center">
                    <?php
                    if ($data_detail_pen != null) {
                        ?>
                        <?php if ($text['rg']['M02j']) { ?>
                            <a title="Edit Data Penanganan" 
                               href="<?php echo site_url('master_peta/kumuh_detail/edit/penanganan/' . $data_detail_pen->id_kumuh_detail) ?>" 
                               class="btn btn-large btn-warning">
                                <i class="icon-pencil"></i> Edit Data Penanganan
                            </a>
                        <?php } ?>
                    <?php } else { ?>
                        <?php if ($text['rg']['M02g']) { ?>
                            <a title="Add Data Penanganan" 
                               href="<?php echo site_url('master_peta/kumuh_detail/add/penanganan/' . $data->id_kaw_kumuh) ?>" 
                               class="btn btn-large btn-success">
                                <i class="icon-plus"></i> Add Data Penanganan
                            </a>
                        <?php } ?>
                    <?php } ?>
                </td>
                </td>
            </tr>
        </table>
    </div>
</div>