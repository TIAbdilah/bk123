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
                <div class="modal-body text-center">
                    <img src="'.base_url().'assets/admin/img/foto_kawasan/'. $foto .'" width="100%"/> 
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
        $txt_td .= '<span class="help-block">'
                . '<a data-original-title="Keterangan Tambahan" data-content="' . $kt . '" data-placement="top" data-trigger="hover" class="popovers">'
                . 'Keterangan tambahan'
                . ' </a>'
                . '</span>';
    }
    $txt_td .= '</td><td>';
    if ($ft != null) {
        $txt_td .= '<span class="help-block">'
                . '<a data-toggle="modal" href="#' . $id_modal . '">Foto</a>' .
                generate_modal($id_modal, $ft)
                .'</span>';                
    }
    $txt_td.=  '</td>';
    return $txt_td;
}

function generate_data_pendukung($bg, $dd, $head) {
    $txt_dp = '';
    $bagian = $bg;
    $data_detail = $dd;
    $data = $head;
    if ($data_detail != null) {
        $jkk = $data_detail['jumlah_kk'];
        if ($jkk == '') {$jkk = '-';}
        $lk = $data_detail['luas_kawasan'];
        if ($lk == '') {$lk = '-';}
        $jr = $data_detail['jumlah_rtlh'];
        if ($jr == '') {$jr = '-';}
        $id = $data_detail['id_kumuh_detail'];
        $pl = $data_detail['peta_file'];
        if ($pl != '') {
            $plm = '<a data-toggle="modal" href="#modal_peta"><i class="icon-picture"></i> Peta</a>' . generate_modal('modal_peta', $pl);
        } else {
            $plm = '-';
        }
        $sk = $data_detail['sk_file'];
        if ($sk != '') {
            $skm = '<a data-toggle="modal" href="#modal_sk"><i class="icon-picture"></i> SK</a>' . generate_modal('modal_sk', $sk);
        } else {
            $skm = '-';
        }
    } else {
        $jkk = '-';
        $lk = '-';
        $jr = '-';
        $plm = '-';
        $skm = '-';
    }
    $txt_dp .= '<section class="panel">
                <div class="panel-heading">Data Pendukung (' . $bagian . ')</div>
                <div class="panel-body">
                    <table class="table12121" style="width:100%">
                        <tr><td width="50%"><strong>Nama Kawasan</strong></td><td width="50%">' . $data->nm_kawasan . '</td></tr>                            
                        <tr><td style="vertical-align:top;"><strong>Nama Kecamatan</strong></td><td>' . $data->kecamatan . '</td></tr>
                        <tr><td><strong>Jumlah KK (jiwa)</strong></td><td>' . $jkk . '</td></tr>
                        <tr><td><strong>Luas Kawasan (Ha)</strong></td><td>' . $lk . '</td></tr>
                        <tr><td><strong>Jumlah RTLH (unit)</strong></td><td>' . $jr . '</td></tr>
                        <tr><td><strong>Peta Legenda</strong></td><td>' . $plm . '</td></tr>
                        <tr><td><strong>SK Kumuh</strong></td><td>' . $skm . '</td></tr>
                    </table><br>';
    if ($data_detail != null) {
        $txt_dp .= '<div class="btn-group btn-group-justified">
                    <a class="btn btn-info" href="' . site_url('master_peta/kumuh_detail/edit/' . strtolower($bagian) . '/' . $id) . '" title="Edit Data ' . $bagian . '">Edit</a>
                    <a class="btn btn-danger" href="' . site_url('report/daerah_kumuh/print_report/' . $id) . '" title="Print Data ' . $bagian . '">Print</a>
                </div>';
    } else {
        $txt_dp .= '<div class="btn-group btn-group-justified">
                    <a class="btn btn-success" href="' . site_url('master_peta/kumuh_detail/add/' . strtolower($bagian) . '/' . $data->id_kaw_kumuh) . '" title="Add Data ' . $bagian . '">Add</a>
                </div>';
    }
    $txt_dp .='</div>
            </section>';
    return $txt_dp;
}
?>
<div class="row">
    <div class="col-lg-4">
        <?php $this->load->view('admin/master_peta/kumuh/data_pendukung') ?>
    </div>
    <div class="col-lg-8">
        <section class="panel">
            <div class="panel-heading">Peta</div>
            <div class="panel-body text-center">
                <img src="<?php echo base_url().'assets/public/'?>img/peta indonesia.png" width="80%"/>
            </div>
        </section>
    </div>  
</div>
<div class="row">
       
    <?php $this->load->view('admin/master_peta/kumuh/grafik') ?>

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
                        <a data-toggle="tab" href="#a3">Penanganan dan Pengendalian</a>
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


