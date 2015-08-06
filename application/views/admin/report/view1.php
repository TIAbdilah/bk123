<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p style="page-break-after: always">
            Cover
        </p>
        <p style="page-break-after: always">
            <img style="float: left" height="100%" src="<?php echo $_SERVER['DOCUMENT_ROOT'] . '/mybangkim/assets/public/img/' ?>Sayembara Karya Tulis - Kumuh.jpg" />
        </p>
        <p style="page-break-after: always">
            <img style="float: left" height="100%" src="<?php echo $_SERVER['DOCUMENT_ROOT'] . '/mybangkim/assets/public/img/' ?>Sayembara Karya Tulis - Kumuh.jpg" />
        </p>        
        <h3>A. FISIK</h3>
        <table class="table table-striped table-bordered table-responsive" style="width: 100%">
            <tr>
                <th width="5%" colspan="2">No.</th>
                <th width="35%">KRITERIA dan Indikator</th>
                <th width="20%">Eksiting</th>
                <th width="20%">Perencanaan</th>
                <th width="20%">Penanganan & Pengendalian</th>
            </tr>
            <tr>
                <td valign="top" rowspan="3">1</td>
                <td style="vertical-align: top">a</td>
                <td style="vertical-align: top">Ketidakteraturan Bangunan</td>
                <td style="vertical-align: top">   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->ketidakteraturan_bangunan_prsn] . '<br>'
                        . '<p class="help-block">' . $data_detail_eks->ketidakteraturan_bangunan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->ketidakteraturan_bangunan_prsn] . '<br>'
                        . '<p class="help-block">' . $data_detail_per->ketidakteraturan_bangunan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">b</td>
                <td style="vertical-align: top">Tingkat Kepadatan Bangunan</td>
                <td style="vertical-align: top">   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->tingkat_kepadatan_bangunan_prsn] . '<br>'
                        . '<p class="help-block">' . $data_detail_eks->tingkat_kepadatan_bangunan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->tingkat_kepadatan_bangunan_prsn] . '<br>'
                        . '<p class="help-block">' . $data_detail_per->tingkat_kepadatan_bangunan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">c</td>
                <td style="vertical-align: top">Ketidaksesuaian dengan Persyaratan Teknis Bangunan</td>
                <td style="vertical-align: top">   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->ketidaksesuaian_dg_persy_te_be_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_eks->ketidaksesuaian_dg_persy_te_be_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->ketidaksesuaian_dg_persy_te_be_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_per->ketidaksesuaian_dg_persy_te_be_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
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
                <td valign="top" rowspan="2">2</td>
                <td style="vertical-align: top">a</td>
                <td style="vertical-align: top">Cakupan Pelayanan Jalan Lingkungan</td>
                <td style="vertical-align: top">   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->cakupan_pelayanan_jalan_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_eks->cakupan_pelayanan_jalan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->cakupan_pelayanan_jalan_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_per->cakupan_pelayanan_jalan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">b</td>
                <td style="vertical-align: top">Kualitas Permukaan Jalan Lingkungan</td>
                <td style="vertical-align: top">   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->kualitas_permukaan_jalan_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_eks->kualitas_permukaan_jalan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->kualitas_permukaan_jalan_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_per->kualitas_permukaan_jalan_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
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
                <td valign="top" rowspan="2">3</td>
                <td style="vertical-align: top">a</td>
                <td style="vertical-align: top">Ketidaktersedian Akses Aman Air Minum</td>
                <td style="vertical-align: top">   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->akses_air_minum_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_eks->akses_air_minum_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->akses_air_minum_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_per->akses_air_minum_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">b</td>
                <td style="vertical-align: top">Tidak Terpenuhinya Kebutuhan Air Minum</td>
                <td style="vertical-align: top">   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_terpenuhi_kebutuhan_air_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_eks->tidak_terpenuhi_kebutuhan_air_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->tidak_terpenuhi_kebutuhan_air_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_per->tidak_terpenuhi_kebutuhan_air_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
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
                <td valign="top" rowspan="5">4</td>
                <td style="vertical-align: top">a</td>
                <td style="vertical-align: top">Ketidakmampuan Mengalirkan Limpasan Air</td>
                <td style="vertical-align: top">   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_mampu_mengalirkan_air_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_eks->tidak_mampu_mengalirkan_air_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->tidak_mampu_mengalirkan_air_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_per->tidak_mampu_mengalirkan_air_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">b</td>
                <td style="vertical-align: top">Ketidaktersediaan Drainase</td>
                <td style="vertical-align: top">   
                    <?php
                    if ($data_detail_eks != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_tersedia_drainase_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_eks->tidak_tersedia_drainase_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
                    <?php
                    if ($data_detail_per != null) {
                        echo $text['arc']->tingkat_persen[$data_detail_per->tidak_tersedia_drainase_prsn] . '<br>'
                        . '<p class="help-block"_>' . $data_detail_per->tidak_tersedia_drainase_kt . '</p>';
                    } else {
                        echo '-';
                    }
                    ?>
                </td>
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">c</td>
                <td style="vertical-align: top">Ketidakterhubungan dengan Sistem Drainase Perkotaan</td>
                <td style="vertical-align: top">   
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">d</td>
                <td style="vertical-align: top">Tidak Terpeliharanya Drainase</td>
                <td style="vertical-align: top">   
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">e</td>
                <td style="vertical-align: top">Kualitas Konstruksi Drainase</td>
                <td style="vertical-align: top">   
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">
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
                <td valign="top" rowspan="2">5</td>
                <td style="vertical-align: top">a</td>
                <td style="vertical-align: top">Sistem Pengelolaan Air Limbah Tidak Sesuai Standar Teknis</td>
                <td style="vertical-align: top">   
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">b</td>
                <td style="vertical-align: top">Prasarana dan Sarana Pengelolaan Air Limbah Tidak Sesuai Dengan Persyaratan Teknis</td>
                <td style="vertical-align: top">   
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">
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
                <td valign="top" rowspan="3">6</td>
                <td style="vertical-align: top">a</td>
                <td style="vertical-align: top">Prasarana dan Sarana Persampahan Tidak Sesuai dengan Persyaratan Teknis</td>
                <td style="vertical-align: top">   
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">b</td>
                <td style="vertical-align: top">Sistem Pengelolaan Persampahan yang Tidak Sesuai Standar Teknis</td>
                <td style="vertical-align: top">   
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">c</td>
                <td style="vertical-align: top">Terpeliharanya Sarana dan Prasarana Pengelolaan Persampahan</td>
                <td style="vertical-align: top">   
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">
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
                <td valign="top" rowspan="2">7</td>
                <td style="vertical-align: top">a</td>
                <td style="vertical-align: top">Ketidaktersediaan Prasarana Proteksi Kebakaran</td>
                <td style="vertical-align: top">   
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">b</td>
                <td style="vertical-align: top">Ketersediaan Sarana Proteksi Kebakaran</td>
                <td style="vertical-align: top">   
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">
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
        </table>
        <br><br>
        <h3>B. IDENTIFIKASI PERTIMBANGAN LAIN</h3>
        <table class="table table-striped table-bordered table-responsive" style="width: 100%">
            <tr>
                <th width="5%" colspan="2">No.</th>
                <th width="35%">KRITERIA dan Indikator</th>
                <th width="20%">Eksiting</th>
                <th width="20%">Perencanaan</th>
                <th width="20%">Penanganan & Pengendalian</th>
            </tr>
            <tr>
                <td valign="top" rowspan="3">8</td>
                <td style="vertical-align: top">a</td>
                <td style="vertical-align: top">Nilai Strategis Lokasi</td>
                <td style="vertical-align: top">   
                   asdddddddddddddddddddddddddddd sddasdaaaaaaaaaaaadas as asa fasfasf asasfasfa s fasf af
                </td>
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">b</td>
                <td style="vertical-align: top">Kependudukan</td>
                <td style="vertical-align: top">   
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">c</td>
                <td style="vertical-align: top">Kondisi Sosial, Ekonomi, dan Budaya</td>
                <td style="vertical-align: top">   
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">
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
        </table>
        <br><br>
        <h3>C. IDENTIFIKASI LAINYA</h3>
        <table class="table table-striped table-bordered table-responsive" style="width: 100%">
            <tr>
                <th width="5%" colspan="2">No.</th>
                <th width="35%">KRITERIA dan Indikator</th>
                <th width="20%">Eksiting</th>
                <th width="20%">Perencanaan</th>
                <th width="20%">Penanganan & Pengendalian</th>
            </tr>
            <tr>
                <td valign="top" rowspan="2">9</td>
                <td style="vertical-align: top">a</td>
                <td style="vertical-align: top">Kejelasan Status Penguasaan Lahan</td>
                <td style="vertical-align: top">   
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">b</td>
                <td style="vertical-align: top">Kesesuaian RTR</td>
                <td style="vertical-align: top">   
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
                <td style="vertical-align: top">
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
                <td style="vertical-align: top">
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
        </table>
    </body>
</html>
