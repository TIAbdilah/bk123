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
                    <p class="form-control-static">: <?php // echo $data_kelurahan->nm_kecamatan        ?></p>
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
                <th align="center" colspan="6">A. FISIK</th>
            </tr>
            <tr>
                <th align="center" colspan="2" width="10%">No.</th>
                <th align="center" width="30%">KRITERIA dan Indikator</th>
                <th align="center" width="20%">Eksiting</th>
                <th align="center" width="20%">Perencanaan</th>
                <th align="center" width="20%">Penanganan & Pengendalian</th>
            </tr>
            <tr>
                <td rowspan="3">1</td>
                <td>a</td>
                <td>Ketidakteraturan Bangunan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->ketidakteraturan_bangunan_prsn] . '<br>'
                        . '<p class="help-block">' . $data_detail_eks->ketidakteraturan_bangunan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->ketidakteraturan_bangunan_prsn] . '<br>'
                        . '<p class="help-block">' . $data_detail_per->ketidakteraturan_bangunan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->ketidakteraturan_bangunan_prsn] . '<br>'
                        . '<p class="help-block">' . $data_detail_pen->ketidakteraturan_bangunan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>                
            </tr>
            <tr>
                <td>b</td>
                <td>Tingkat Kepadatan Bangunan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->tingkat_kepadatan_bangunan_prsn] . '<br>'
                        . '<p class="help-block">' . $data_detail_eks->tingkat_kepadatan_bangunan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->tingkat_kepadatan_bangunan_prsn] . '<br>'
                        . '<p class="help-block">' . $data_detail_per->tingkat_kepadatan_bangunan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->tingkat_kepadatan_bangunan_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_pen->tingkat_kepadatan_bangunan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>      
            </tr>
            <tr>
                <td>c</td>
                <td>Ketidaksesuaian dengan Persyaratan Teknis Bangunan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->ketidaksesuaian_dg_persy_te_be_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_eks->ketidaksesuaian_dg_persy_te_be_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->ketidaksesuaian_dg_persy_te_be_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_per->ketidaksesuaian_dg_persy_te_be_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->ketidaksesuaian_dg_persy_te_be_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_pen->ketidaksesuaian_dg_persy_te_be_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td rowspan="2">2</td>
                <td>a</td>
                <td>Cakupan Pelayanan Jalan Lingkungan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->cakupan_pelayanan_jalan_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_eks->cakupan_pelayanan_jalan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->cakupan_pelayanan_jalan_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_per->cakupan_pelayanan_jalan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->cakupan_pelayanan_jalan_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_pen->cakupan_pelayanan_jalan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>b</td>
                <td>Kualitas Permukaan Jalan Lingkungan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->kualitas_permukaan_jalan_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_eks->kualitas_permukaan_jalan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->kualitas_permukaan_jalan_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_per->kualitas_permukaan_jalan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->kualitas_permukaan_jalan_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_pen->kualitas_permukaan_jalan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>  
            </tr>
            <tr>
                <td rowspan="2">3</td>
                <td>a</td>
                <td>Ketidaktersedian Akses Aman Air Minum</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->akses_air_minum_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_eks->akses_air_minum_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->akses_air_minum_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_per->akses_air_minum_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->akses_air_minum_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_pen->akses_air_minum_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>  
            </tr>
            <tr>
                <td>b</td>
                <td>Tidak Terpenuhinya Kebutuhan Air Minum</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_terpenuhi_kebutuhan_air_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_eks->tidak_terpenuhi_kebutuhan_air_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->tidak_terpenuhi_kebutuhan_air_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_per->tidak_terpenuhi_kebutuhan_air_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->tidak_terpenuhi_kebutuhan_air_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_pen->tidak_terpenuhi_kebutuhan_air_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td rowspan="5">4</td>
                <td>a</td>
                <td>Ketidakmampuan Mengalirkan Limpasan Air</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_mampu_mengalirkan_air_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_eks->tidak_mampu_mengalirkan_air_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->tidak_mampu_mengalirkan_air_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_per->tidak_mampu_mengalirkan_air_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->tidak_mampu_mengalirkan_air_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_pen->tidak_mampu_mengalirkan_air_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>  
            </tr>
            <tr>
                <td>b</td>
                <td>Ketidaktersediaan Drainase</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_tersedia_drainase_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_eks->tidak_tersedia_drainase_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->tidak_tersedia_drainase_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_per->tidak_tersedia_drainase_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->tidak_tersedia_drainase_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_pen->tidak_tersedia_drainase_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>c</td>
                <td>Ketidakterhubungan dengan Sistem Drainase Perkotaan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_terhubung_sistem_drainase_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_eks->tidak_terhubung_sistem_drainase_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->tidak_terhubung_sistem_drainase_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_per->tidak_terhubung_sistem_drainase_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->tidak_terhubung_sistem_drainase_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_pen->tidak_terhubung_sistem_drainase_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>d</td>
                <td>Tidak Terpeliharanya Drainase</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_terpelihara_drainase_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_eks->tidak_terpelihara_drainase_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->tidak_terpelihara_drainase_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_per->tidak_terpelihara_drainase_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->tidak_terpelihara_drainase_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_pen->tidak_terpelihara_drainase_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>e</td>
                <td>Kualitas Konstruksi Drainase</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->kualitas_konstruksi_drainase_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_eks->kualitas_konstruksi_drainase_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->kualitas_konstruksi_drainase_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_per->kualitas_konstruksi_drainase_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->kualitas_konstruksi_drainase_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_pen->kualitas_konstruksi_drainase_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td rowspan="2">5</td>
                <td>a</td>
                <td>Sistem Pengelolaan Air Limbah Tidak Sesuai Standar Teknis</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->sistem_pengelolaan_air_limbah_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_eks->sistem_pengelolaan_air_limbah_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->sistem_pengelolaan_air_limbah_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_per->sistem_pengelolaan_air_limbah_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->sistem_pengelolaan_air_limbah_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_pen->sistem_pengelolaan_air_limbah_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>b</td>
                <td>Prasarana dan Sarana Pengelolaan Air Limbah Tidak Sesuai Dengan Persyaratan Teknis</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->pras_pengelolaan_air_limbah_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_eks->pras_pengelolaan_air_limbah_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->pras_pengelolaan_air_limbah_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_per->pras_pengelolaan_air_limbah_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->pras_pengelolaan_air_limbah_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_pen->pras_pengelolaan_air_limbah_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td rowspan="3">6</td>
                <td>a</td>
                <td>Prasarana dan Sarana Persampahan Tidak Sesuai dengan Persyaratan Teknis</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->pras_sampah_tidak_sesuai_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_eks->pras_sampah_tidak_sesuai_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->pras_sampah_tidak_sesuai_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_per->pras_sampah_tidak_sesuai_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->pras_sampah_tidak_sesuai_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_pen->pras_sampah_tidak_sesuai_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>b</td>
                <td>Sistem Pengelolaan Persampahan yang Tidak Sesuai Standar Teknis</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->sis_pen_sampah_tidak_sesuai_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_eks->sis_pen_sampah_tidak_sesuai_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->sis_pen_sampah_tidak_sesuai_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_per->sis_pen_sampah_tidak_sesuai_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->sis_pen_sampah_tidak_sesuai_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_pen->sis_pen_sampah_tidak_sesuai_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>c</td>
                <td>Terpeliharanya Sarana dan Prasarana Pengelolaan Persampahan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->terpelihara_pras_sampah_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_eks->terpelihara_pras_sampah_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->terpelihara_pras_sampah_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_per->terpelihara_pras_sampah_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->terpelihara_pras_sampah_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_pen->terpelihara_pras_sampah_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td rowspan="2">7</td>
                <td>a</td>
                <td>Ketidaktersediaan Prasarana Proteksi Kebakaran</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_tersedia_pras_prokeb_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_eks->tidak_tersedia_pras_prokeb_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->tidak_tersedia_pras_prokeb_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_per->tidak_tersedia_pras_prokeb_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->tidak_tersedia_pras_prokeb_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_pen->tidak_tersedia_pras_prokeb_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>b</td>
                <td>Ketersediaan Sarana Proteksi Kebakaran</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_tersedia_sar_prokeb_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_eks->tidak_tersedia_sar_prokeb_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->tidak_tersedia_sar_prokeb_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_per->tidak_tersedia_sar_prokeb_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->tidak_tersedia_sar_prokeb_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_pen->tidak_tersedia_sar_prokeb_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <th align="center" colspan="5">B. Identifikasi Pertimbangan Lain</th>
            </tr>
            <tr>
                <th align="center" colspan="2" width="10%">No.</th>
                <th align="center" width="30%">KRITERIA dan Indikator</th>
                <th align="center" width="20%">Eksiting</th>
                <th align="center" width="20%">Perencanaan</th>
                <th align="center" width="20%">Penanganan & Pengendalian</th>
            </tr>
            <tr>
                <td rowspan="3">8</td>
                <td>a</td>
                <td>Nilai Strategis Lokasi</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->nilai_strategis_lokasi_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_eks->nilai_strategis_lokasi_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->nilai_strategis_lokasi_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_per->nilai_strategis_lokasi_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->nilai_strategis_lokasi_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_pen->nilai_strategis_lokasi_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>b</td>
                <td>Kependudukan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->kependudukan_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_eks->kependudukan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->kependudukan_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_per->kependudukan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->kependudukan_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_pen->kependudukan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>c</td>
                <td>Kondisi Sosial, Ekonomi, dan Budaya</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->sosial_budaya_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_eks->sosial_budaya_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->sosial_budaya_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_per->sosial_budaya_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_pen->sosial_budaya_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_pen->sosial_budaya_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <th align="center" colspan="6">C. Identifikasi Legalitas Lahan </th>
            </tr>            
            <tr>
                <th align="center" colspan="2" width="10%">No.</th>
                <th align="center" width="30%">KRITERIA dan Indikator</th>
                <th align="center" width="20%">Eksiting</th>
                <th align="center" width="20%">Perencanaan</th>
                <th align="center" width="20%">Penanganan & Pengendalian</th>
            </tr>
            <tr>
                <td rowspan="2">9</td>
                <td>a</td>
                <td>Kejelasan Status Penguasaan Lahan</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_pn[$data_detail_eks->kejelasan_status_lahan_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_eks->kejelasan_status_lahan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_pn[$data_detail_per->kejelasan_status_lahan_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_per->kejelasan_status_lahan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_pn[$data_detail_pen->kejelasan_status_lahan_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_pen->kejelasan_status_lahan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>b</td>
                <td>Kesesuaian RTR</td>
                <td>   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_pn[$data_detail_eks->kesesuaian_rtr_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_eks->kesesuaian_rtr_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_pn[$data_detail_per->kesesuaian_rtr_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_per->kesesuaian_rtr_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($data_detail_pen != null) {
                        echo $text['arc']->tingkat_pn[$data_detail_pen->kesesuaian_rtr_prsn] . '<br>'
                        . '<p class="help-block">'
                        . $data_detail_pen->kesesuaian_rtr_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td> 
            </tr>
            <tr>               
                <th align="center" colspan="3"></th>
                <td align="center" >
                    <?php if ($data_detail_eks != null && $this->session->userdata('bagian') == 'eksisting') { ?>
                        ?>
                        <a title="Edit Data Eksisting" 
                           href="<?php echo site_url('master_peta/kumuh_detail/edit/eksisting/' . $data->id_kaw_kumuh . '/' . $data_detail_eks->id_kumuh_detail) ?>" 
                           class="btn btn-large btn-warning">
                            <i class="icon-pencil"></i> Edit
                        </a>
                        <a title="Cetak Data Penanganan" 
                           href="<?php echo site_url('report/daerah_kumuh/print_report/' . $data_detail_eks->id_kumuh_detail) ?>" 
                           class="btn btn-large btn-primary">
                            <i class="icon-print"></i> Cetak
                        </a>
                    <?php } else if ($data_detail_eks != null && $this->session->userdata('bagian') == 'eksisting') { ?>
                        <a title="Add Data Eksisting" 
                           href="<?php echo site_url('master_peta/kumuh_detail/add/eksisting/' . $data->id_kaw_kumuh) ?>" 
                           class="btn btn-large btn-success">
                            <i class="icon-plus"></i> Add 
                        </a>
                    <?php } ?>
                </td>
                <td align="center" >
                    <?php
                    if ($data_detail_per != null && $this->session->userdata('bagian') == 'perencanaan') {
                        ?>
                        <a title="Edit Data Perencanaan" 
                           href="<?php echo site_url('master_peta/kumuh_detail/edit/perencanaan/' . $data->id_kaw_kumuh . '/' . $data_detail_per->id_kumuh_detail) ?>" 
                           class="btn btn-large btn-warning">
                            <i class="icon-pencil"></i> Edit 
                        </a>
                        <a title="Cetak Data Penanganan" 
                           href="<?php echo site_url('report/daerah_kumuh/print_report/' . $data_detail_per->id_kumuh_detail) ?>" 
                           class="btn btn-large btn-primary">
                            <i class="icon-print"></i> Cetak
                        </a>
                    <?php } else if ($data_detail_per != null && $this->session->userdata('bagian') == 'perencanaan') { ?>
                        <a title="Add Data Perencanaan" 
                           href="<?php echo site_url('master_peta/kumuh_detail/add/perencanaan/' . $data->id_kaw_kumuh) ?>" 
                           class="btn btn-large btn-success">
                            <i class="icon-plus"></i> Add 
                        </a>
                    <?php } ?>
                </td>
                <td align="center" >
                    <?php
                    if ($data_detail_pen != null && $this->session->userdata('bagian') == 'penanganan') {
                        ?>
                        <a title="Edit Data Penanganan" 
                           href="<?php echo site_url('master_peta/kumuh_detail/edit/penanganan/' . $data->id_kaw_kumuh . '/' . $data_detail_pen->id_kumuh_detail) ?>" 
                           class="btn btn-large btn-warning">
                            <i class="icon-pencil"></i> Edit
                        </a>
                        <a title="Cetak Data Penanganan" 
                           href="<?php echo site_url('report/daerah_kumuh/print_report/' . $data_detail_pen->id_kumuh_detail) ?>" 
                           class="btn btn-large btn-primary">
                            <i class="icon-print"></i> Cetak
                        </a>
                        <?php
                    } else if ($data_detail_pen == null && $this->session->userdata('bagian') == 'penanganan') {
                        ?>
                        <a title="Add Data Penanganan" 
                           href="<?php echo site_url('master_peta/kumuh_detail/add/penanganan/' . $data->id_kaw_kumuh) ?>" 
                           class="btn btn-large btn-success">
                            <i class="icon-plus"></i> Add
                        </a>
                    <?php } ?>
                </td>
            </tr>
        </table>
    </div>
</div>
