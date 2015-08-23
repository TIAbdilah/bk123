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
    $txt_td .= '<td>' . $prsn . '</td>'
            . '<td>';
    if ($kt != null) {
        $txt_td .= '<span class="help-block"> '
                . '<a data-original-title="Keterangan Tambahan" data-content="' . $kt . '" data-placement="top" data-trigger="hover" class="popovers">'
                . 'Keterangan tambahan'
                . ' </a>';
    }
    if ($ft != null) {
        $txt_td .= '| <a data-toggle="modal" href="#' . $id_modal . '">Foto</a>' .
                generate_modal($id_modal, $ft)
                . '</span>';
    }
    $txt_td.= '</td>';
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
            <div class="panel-heading">Data Eksisting</div>
            <div class="panel-body">
                <table class="table">
                    <tr><td><strong>Nama Kawasan</strong></td><td><?php echo $data->nm_kawasan ?></td></tr>
                    <tr><td><strong>Jumlah KK</strong></td><td><?php echo $data->jumlah_kk ?> jiwa</td></tr>
                    <tr><td><strong>Luas Kawasan</strong></td><td><?php echo $data->luas_kawasan ?> Ha</td></tr>
                    <tr><td><strong>Jumlah RTLH</strong></td><td><?php echo $data->jumlah_rtlh ?> unit</td></tr>
                    <tr><td><strong>Nama Kecamatan</strong></td><td><?php // echo $data_kelurahan->nm_kecamatan     ?></td></tr>
                </table>             
            </div>
        </section>
        <section class="panel text-center">
            <!--            <div class="btn-group btn-group-justified">
                            <a class="btn btn-success" href="#">Middle</a>
                        </div>-->
            <div class="btn-group btn-group-justified">
                <a class="btn btn-info" href="#" title="Edit Data Eksisting">Edit</a>
                <a class="btn btn-danger" href="#">Right</a>
            </div>
        </section>
    </div>

    <div class="col-lg-8">
        <section class="panel">
            <header class="panel-heading tab-bg-dark-navy-blue">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#a1">Eksisting</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" href="#a2">Perencanaan</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" href="#a3">Penanganan dan Penegndalian</a>
                    </li>           
                </ul>
            </header>
            <div class="panel-body">
                <div class="tab-content">
                    <div id="a1" class="tab-pane active">
                        <?php $this->load->view('admin/master_peta/kumuh/table_eksisting') ?>
                    </div>
                    <div id="a2" class="tab-pane">
                        <?php $this->load->view('admin/master_peta/kumuh/table_perencanaan') ?>
                    </div>
                    <div id="a3" class="tab-pane">
                        <?php $this->load->view('admin/master_peta/kumuh/table_penanganan') ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


