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
        <style type="text/css">
            table.data{
                font-size: 80%;
                border-collapse: collapse;
            }
            img.peta{
                padding: 0;
                margin: 0 -100px 0 -100px;
            }
        </style>
    </head>
    <body style="width: 100%">
        <h2>Profil Kawasan Permukiman Kumuh</h2>
        <strong><?php echo $kota->nm_daerah ?> (
            <?php
            if ($data_detail_eks != null) {
                echo $data_detail_eks->kategori;
            } else {
                echo '-';
            }
            ?>
            )</strong>  
        <table style="width: 100%">
            <tr>
                <td width="40%" style="vertical-align: top;padding: 0px;margin: 0px;">
                    <?php
                    $foto = "";
                    if ($data_detail_eks != null) {
                        if ($data_detail_eks->peta_file != null) {
                            $foto .= $data_detail_eks->peta_file;
                        } else {
                            $foto .= "no_img.png";
                        }
                    }
                    ?>
                    <img class="peta" width="800px" height="600px" src="<?php echo $_SERVER['DOCUMENT_ROOT'] . '/mybangkim/assets/admin/img/foto_kawasan/' . $foto ?>" />
                </td>
                <td width="60%" style="vertical-align: top">                   
                    <strong>A. IDENTIFIKASI KONDISI KEKUMUHAN</strong>
                    <table class="data" style="width: 100%" border="1">
                        <tr>
                            <th width="5%" colspan="2">No.</th>
                            <th width="30%">KRITERIA dan Indikator</th>
                            <th width="15%">Parameter</th>
                            <th width="30%">Keterangan</th>
                        </tr>
                        <tr>
                            <td valign="top" rowspan="3">1</td>
                            <td style="vertical-align: top">a</td>
                            <td style="vertical-align: top">Ketidakteraturan Bangunan</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->ketidakteraturan_bangunan_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->ketidakteraturan_bangunan_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>        
                        </tr>
                        <tr>
                            <td style="vertical-align: top">b</td>
                            <td style="vertical-align: top">Tingkat Kepadatan Bangunan</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->tingkat_kepadatan_bangunan_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->tingkat_kepadatan_bangunan_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">c</td>
                            <td style="vertical-align: top">Ketidaksesuaian dengan Persyaratan Teknis Bangunan</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->ketidaksesuaian_dg_persy_te_be_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->ketidaksesuaian_dg_persy_te_be_kt;
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
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->cakupan_pelayanan_jalan_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->cakupan_pelayanan_jalan_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">b</td>
                            <td style="vertical-align: top">Kualitas Permukaan Jalan Lingkungan</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->kualitas_permukaan_jalan_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->kualitas_permukaan_jalan_kt;
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
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->akses_air_minum_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->akses_air_minum_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">b</td>
                            <td style="vertical-align: top">Tidak Terpenuhinya Kebutuhan Air Minum</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_terpenuhi_kebutuhan_air_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->tidak_terpenuhi_kebutuhan_air_kt;
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
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_mampu_mengalirkan_air_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->tidak_mampu_mengalirkan_air_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">b</td>
                            <td style="vertical-align: top">Ketidaktersediaan Drainase</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_tersedia_drainase_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->tidak_tersedia_drainase_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">c</td>
                            <td style="vertical-align: top">Ketidakterhubungan dengan Sistem Drainase Perkotaan</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_terhubung_sistem_drainase_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->tidak_terhubung_sistem_drainase_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">d</td>
                            <td style="vertical-align: top">Tidak Terpeliharanya Drainase</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_terpelihara_drainase_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->tidak_terpelihara_drainase_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">e</td>
                            <td style="vertical-align: top">Kualitas Konstruksi Drainase</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->kualitas_konstruksi_drainase_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->kualitas_konstruksi_drainase_kt;
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
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->sistem_pengelolaan_air_limbah_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->sistem_pengelolaan_air_limbah_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">b</td>
                            <td style="vertical-align: top">Prasarana dan Sarana Pengelolaan Air Limbah Tidak Sesuai Dengan Persyaratan Teknis</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->pras_pengelolaan_air_limbah_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->pras_pengelolaan_air_limbah_kt;
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
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->pras_sampah_tidak_sesuai_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->pras_sampah_tidak_sesuai_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">b</td>
                            <td style="vertical-align: top">Sistem Pengelolaan Persampahan yang Tidak Sesuai Standar Teknis</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->sis_pen_sampah_tidak_sesuai_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->sis_pen_sampah_tidak_sesuai_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">c</td>
                            <td style="vertical-align: top">Terpeliharanya Sarana dan Prasarana Pengelolaan Persampahan</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->terpelihara_pras_sampah_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->terpelihara_pras_sampah_kt;
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
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_tersedia_pras_prokeb_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->tidak_tersedia_pras_prokeb_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">b</td>
                            <td style="vertical-align: top">Ketersediaan Sarana Proteksi Kebakaran</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->tidak_tersedia_sar_prokeb_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->tidak_tersedia_sar_prokeb_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <br><br>
                    <strong>B. IDENTIFIKASI PERTIMBANGAN LAIN</strong>
                    <table class="data" style="width: 100%" border="1">
                        <tr>
                            <th width="5%" colspan="2">No.</th>
                            <th width="30%">KRITERIA dan Indikator</th>
                            <th width="15%">Parameter</th>
                            <th width="30%">Keterangan</th>
                        </tr>
                        <tr>
                            <td valign="top" rowspan="3">8</td>
                            <td style="vertical-align: top">a</td>
                            <td style="vertical-align: top">Nilai Strategis Lokasi</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->nilai_strategis_lokasi_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->nilai_strategis_lokasi_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">b</td>
                            <td style="vertical-align: top">Kependudukan</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->kependudukan_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->kependudukan_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">c</td>
                            <td style="vertical-align: top">Kondisi Sosial, Ekonomi, dan Budaya</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_persen[$data_detail_eks->sosial_budaya_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->sosial_budaya_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <br><br>
                    <strong>C. IDENTIFIKASI LAINYA</strong>
                    <table class="data" style="width: 100%" border="1">
                        <tr>
                            <th width="5%" colspan="2">No.</th>
                            <th width="30%">KRITERIA dan Indikator</th>
                            <th width="15%">Parameter</th>
                            <th width="30%">Keterangan</th>
                        </tr>
                        <tr>
                            <td valign="top" rowspan="2">9</td>
                            <td style="vertical-align: top">a</td>
                            <td style="vertical-align: top">Kejelasan Status Penguasaan Lahan</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_pn[$data_detail_eks->kejelasan_status_lahan_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->kejelasan_status_lahan_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">b</td>
                            <td style="vertical-align: top">Kesesuaian RTR</td>
                            <td style="vertical-align: top;text-align: center">   
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $text['arc']->tingkat_pn[$data_detail_eks->kesesuaian_rtr_prsn];
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                            <td style="vertical-align: top">
                                <?php
                                if ($data_detail_eks != null) {
                                    echo $data_detail_eks->kesesuaian_rtr_kt;
                                } else {
                                    echo '-';
                                }
                                ?>
                            </td>
                        </tr>            
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
