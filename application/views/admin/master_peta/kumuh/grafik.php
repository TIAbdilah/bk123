<?php

$arr_ek = array_fill(0, 7, '');
if ($data_detail_eks != null) {
    $arr_ek = gen_arr_grafik($data_detail_eks);
}

$arr_pr = array_fill(0, 7, '');
if ($data_detail_per != null) {
    $arr_pr = gen_arr_grafik($data_detail_per);
}

$arr_pn = array_fill(0, 7, '');
if ($data_detail_pen != null) {
    $arr_pn = gen_arr_grafik($data_detail_pen);
}

function gen_arr_grafik($data) {
    $arr[0] = rata_rata(array($data['ketidakteraturan_bangunan_prsn'], $data['tingkat_kepadatan_bangunan_prsn'], $data['ketidaksesuaian_dg_persy_te_be_prsn']));
    $arr[1] = rata_rata(array($data['cakupan_pelayanan_jalan_prsn'], $data['kualitas_permukaan_jalan_prsn']));
    $arr[2] = rata_rata(array($data['akses_air_minum_prsn'], $data['tidak_terpenuhi_kebutuhan_air_prsn']));
    $arr[3] = rata_rata(array($data['tidak_mampu_mengalirkan_air_prsn'], $data['tidak_tersedia_drainase_prsn'], $data['tidak_terhubung_sistem_drainase_prsn'], $data['tidak_terpelihara_drainase_prsn'], $data['kualitas_konstruksi_drainase_prsn']));
    $arr[4] = rata_rata(array($data['sistem_pengelolaan_air_limbah_prsn'], $data['pras_pengelolaan_air_limbah_prsn']));
    $arr[5] = rata_rata(array($data['pras_sampah_tidak_sesuai_prsn'], $data['sis_pen_sampah_tidak_sesuai_prsn'], $data['terpelihara_pras_sampah_prsn']));
    $arr[6] = rata_rata(array($data['tidak_tersedia_pras_prokeb_prsn'], $data['tidak_tersedia_sar_prokeb_prsn']));
    return $arr;
}

function rata_rata($arr = array()) {
    $rata2 = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $rata2 += $arr[$i];
    }
    $number = $rata2 / count($arr);
    return sprintf("%.2f", $number);
}
?>
<div class="col-lg-4">
    <section class="panel">
        <div class="panel-body">
            <table style="display: none" id="datagrafik">
                <tr><td></td><td>Eksisting</td><td>Perencanaan</td><td>Penanganan dan Pengendalian</td></tr>
                <tr><td>Keteraturan Bangunan</td><td><?php echo $arr_ek[0] ?></td><td><?php echo $arr_pr[0] ?></td><td><?php echo $arr_pn[0] ?></td></tr>
                <tr><td>Jalan Lingkungan</td><td><?php echo $arr_ek[1] ?></td><td><?php echo $arr_pr[1] ?></td><td><?php echo $arr_pn[1] ?></td></tr>
                <tr><td>Air Minum</td><td><?php echo $arr_ek[2] ?></td><td><?php echo $arr_pr[2] ?></td><td><?php echo $arr_pn[2] ?></td></tr>
                <tr><td>Drainase</td><td><?php echo $arr_ek[3] ?></td><td><?php echo $arr_pr[3] ?></td><td><?php echo $arr_pn[3] ?></td></tr>
                <tr><td>Pengelolaan Air Limbah</td><td><?php echo $arr_ek[4] ?></td><td><?php echo $arr_pr[4] ?></td><td><?php echo $arr_pn[4] ?></td></tr>
                <tr><td>Pengelolaan Sampah</td><td><?php echo $arr_ek[5] ?></td><td><?php echo $arr_pr[5] ?></td><td><?php echo $arr_pn[5] ?></td></tr>
                <tr><td>Proteksi Kebakaran</td><td><?php echo $arr_ek[6] ?></td><td><?php echo $arr_pr[6] ?></td><td><?php echo $arr_pn[6] ?></td></tr>
            </table>
            <div id="container1" style="width: 100%; margin: 0 auto"></div>
        </div>
    </section>
</div>  