<?php $this->load->view('admin/master_peta/kumuh/breadcrumbs') ?>
<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;

function generate_modal($id_modal, $foto) {
    return '<div class="modal fade" id="' . $id_modal . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Foto</h4>
                </div>
                <div class="modal-body">
                    ' . $foto . '
                </div>
            </div>
        </div>
    </div>';
}

function generate_td($prsn, $kt, $ft, $id_modal) {
    $txt_td = '';
    $txt_td .= $prsn
            . '<span class="help-block"> '
            . '<a data-original-title="Keterangan tambahan" data-content="test" data-placement="top" data-trigger="hover" class="popovers">'
            . $kt . '</a>';
    if ($ft != null) {
        $txt_td .= '| <a data-toggle="modal" href="#' . $id_modal . '">Foto</a>' .
                generate_modal($id_modal, $ft)
                . '</span>';
    }
    return $txt_td;
}
?>
<div class="row">
    <div class="col-lg-4">
        <section class="panel">
            <div class="panel-heading">Grafik</div>
            <div class="panel-body">
                <canvas style="width: 400px; height: 200px;" id="radar" height="300" width="400"></canvas>
            </div>
        </section>
    </div>  
    <div class="col-lg-8">
        <section class="panel">
            <div class="panel-heading">Peta</div>
            <div class="panel-body">
                <div style="height: 200px"></div>
            </div>
        </section>
    </div>   
</div>
<div class="row">      
    <div class="col-lg-4">
        <section class="panel">
            <table class="table">
                <tr><td>Nama Kawasan</td><td>: <?php echo $data->nm_kawasan ?></td></tr>
                <tr><td>Jumlah KK</td><td>: <?php echo $data->jumlah_kk ?> jiwa</td></tr>
                <tr><td>Luas Kawasan</td><td>: <?php echo $data->luas_kawasan ?> Ha</td></tr>
                <tr><td>Jumlah RTLH</td><td>: <?php echo $data->jumlah_rtlh ?> unit</td></tr>
                <tr><td>Nama Kecamatan</td><td>: <?php // echo $data_kelurahan->nm_kecamatan ?></td></tr>
            </table>             
        </section>
        <section class="panel text-center">
            <div class="btn-group btn-group-justified">
                <a class="btn btn-success" href="#">Middle</a>
            </div>
<!--            <div class="btn-group btn-group-justified">
                <a class="btn btn-info" href="#">Middle</a>
                <a class="btn btn-danger" href="#">Right</a>
            </div>-->
<!--            <button type="button" class="btn btn-primary col-lg-4"><i class="icon-plus"></i></button>
<button type="button" class="btn btn-primary col-lg-3 col-lg-offset-1"><i class="icon-plus"></i></button>
<button type="button" class="btn btn-primary col-lg-3 col-lg-offset-1"><i class="icon-plus"></i></button>-->
        </section>
    </div>

    <div class="col-lg-8">
        <section class="panel">
            <header class="panel-heading tab-bg-dark-navy-blue">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#empat">Data Pendukung</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" href="#satu">A. Fisik</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" href="#dua">B. Non Fisik</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" href="#tiga">C. Lainya</a>
                    </li>                    
                </ul>
            </header>
            <div class="panel-body">
                <div class="tab-content">
                    <div id="empat" class="tab-pane active">
                        <table class="table">
                            <tr><td>Nama Kawasan</td><td>: <?php echo $data->nm_kawasan ?></td></tr>
                            <tr><td>Jumlah KK</td><td>: <?php echo $data->jumlah_kk ?> jiwa</td></tr>
                            <tr><td>Luas Kawasan</td><td>: <?php echo $data->luas_kawasan ?> Ha</td></tr>
                            <tr><td>Jumlah RTLH</td><td>: <?php echo $data->jumlah_rtlh ?> unit</td></tr>
                            <tr><td>Nama Kecamatan</td><td>: <?php // echo $data_kelurahan->nm_kecamatan                      ?></td></tr>
                        </table> 
                    </div>
                    <div id="satu" class="tab-pane">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th align="center" colspan="2" width="10%">#</th>
                                    <th align="center" width="30%">KRITERIA dan Indikator</th>
                                    <th align="center" width="20%">Eksiting</th>
                                    <th align="center" width="20%">Perencanaan</th>
                                    <th align="center" width="20%">Penanganan & Pengendalian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a title="Keteraturan Bangunan" href="#">1</a></td>
                                    <td>a</td>
                                    <td>Ketidakteraturan Bangunan</td>
                                    <td>   
                                        <?php
                                        if ($data_detail_eks != null) {
                                            echo generate_td(
                                                    $text['arc']->tingkat_persen[$data_detail_eks->ketidakteraturan_bangunan_prsn]
                                                    , $data_detail_eks->ketidakteraturan_bangunan_kt
                                                    , $data_detail_eks->ketidakteraturan_bangunan_foto
                                                    , '1a_eks');
                                        } else {
                                            echo '-';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($data_detail_per != null) {
                                            echo generate_td(
                                                    $text['arc']->tingkat_persen[$data_detail_per->ketidakteraturan_bangunan_prsn]
                                                    , $data_detail_per->ketidakteraturan_bangunan_kt
                                                    , $data_detail_per->ketidakteraturan_bangunan_foto
                                                    , '1a_eks');
                                        } else {
                                            echo '-';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($data_detail_pen != null) {
                                            echo generate_td(
                                                    $text['arc']->tingkat_persen[$data_detail_pen->ketidakteraturan_bangunan_prsn]
                                                    , $data_detail_pen->ketidakteraturan_bangunan_kt
                                                    , $data_detail_pen->ketidakteraturan_bangunan_foto
                                                    , '1a_eks');
                                        } else {
                                            echo '-';
                                        }
                                        ?>
                                    </td>                
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="dua" class="tab-pane">About</div>
                    <div id="tiga" class="tab-pane">Profile</div>
                </div>
            </div>
        </section>
    </div>
</div>


