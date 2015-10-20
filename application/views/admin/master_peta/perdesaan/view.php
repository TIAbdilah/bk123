<?php $this->load->view('admin/master_peta/perdesaan/breadcrumbs') ?>
<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;

function generate_modal($id_modal, $folder, $foto) {
    return '<div class="modal fade" id="' . $id_modal . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Foto</h4>
                </div>
                <div class="modal-body text-center">
                    <img src="' . base_url() . 'assets/admin/img/' . $folder . '/' . $foto . '" width="100%"/> 
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
                generate_modal($id_modal, 'foto_kawasan', $ft)
                . '</span>';
    }
    $txt_td.= '</td>';
    return $txt_td;
}

function generate_data_pendukung($bg, $dd, $head) {
    $txt_dp = '';
    $data_detail = $dd;
    if ($dd != null) {
        $jkk = $dd['jumlah_kk'];
        if ($jkk == '') {
            $jkk = '-';
        }
        $lk = $dd['luas_kawasan'];
        if ($lk == '') {
            $lk = '-';
        }
        $jr = $dd['jumlah_rtlh'];
        if ($jr == '') {
            $jr = '-';
        }
        $pl = $dd['peta_file'];
        if ($pl != '') {
            $plm = '<a data-toggle="modal" href="#modal_peta"><i class="icon-picture"></i> Peta</a>' . generate_modal('modal_peta', 'peta', $pl);
        } else {
            $plm = '-';
        }
        $sk = $dd['sk_file'];
        if ($sk != '') {
            $skm = '<a data-toggle="modal" href="#modal_sk"><i class="icon-picture"></i> SK</a>' . generate_modal('modal_sk', 'sk', $sk);
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
                <div class="panel-heading">Data Pendukung (' . $bg . ')</div>
                <div class="panel-body">
                    <table class="table12121" style="width:100%">
                        <tr><td width="50%"><strong>Nama Kawasan</strong></td><td width="50%">' . $head->nm_kawasan . '</td></tr>                            
                        <tr><td style="vertical-align:top;"><strong>Nama Kecamatan</strong></td><td>' . $head->kecamatan . '</td></tr>
                        <tr><td><strong>Jumlah KK (jiwa)</strong></td><td>' . $jkk . '</td></tr>
                        <tr><td><strong>Luas Kawasan (Ha)</strong></td><td>' . $lk . '</td></tr>
                        <tr><td><strong>Jumlah RTLH (unit)</strong></td><td>' . $jr . '</td></tr>
                        <tr><td><strong>Peta Legenda</strong></td><td>' . $plm . '</td></tr>
                        <tr><td><strong>SK Kumuh</strong></td><td>' . $skm . '</td></tr>';
//    if ($dd != null) {
//        $txt_dp .= '    <tr>'
//                . '         <td><strong>Download</strong></td>'
//                . '         <td>';
//        if ($dd['sk_file'] != '') {
//            $txt_dp .= 'ada';
//        } else {
//            $txt_dp .= 'tidak ada';
//        }
//        $txt_dp . '         </td>'
//                . '     </tr>';
//    } else {
//        $txt_dp .= '    <tr><td><strong>Download</strong></td><td>-</td></tr>';
//    }
    $txt_dp .= '    </table><br>';
    $txt_dp .= gen_button($dd, $bg, $head);
    $txt_dp .='</div>
            </section>';
    return $txt_dp;
}

function gen_button($data_detail, $bg, $hd) {
    if ($data_detail != null) {
        return '<div class="btn-group btn-group-justified">
                    <a class="btn btn-info" href="' . site_url('master_peta/perdesaan_detail/edit/' . strtolower($bg) . '/' . $data_detail['id_perdesaan_detail']) . '" title="Edit Data ' . $bg . '">Edit</a>
                    <a class="btn btn-danger" href="' . site_url('report/daerah_perdesaan/print_report/' . $data_detail['id_perdesaan_detail']) . '" title="Print Data ' . $bg . '">Print</a>
                </div>';
    } else {
        return '<div class="btn-group btn-group-justified">
                    <a class="btn btn-success" href="' . site_url('master_peta/perdesaan_detail/add/' . strtolower($bg) . '/' . $hd->id_perdesaan) . '" title="Add Data ' . $bg . '">Add</a>
                </div>';
    }
}
?>
<div class="row">
    <div class="col-lg-4">
        <?php $this->load->view('admin/master_peta/perdesaan/data_pendukung') ?>
    </div>
    <div class="col-lg-8">
        <section class="panel">
            <div class="panel-heading">Peta</div>
            <div class="panel-body text-center">
                <img src="<?php echo base_url() . 'assets/public/' ?>img/peta indonesia.png" width="80%"/>
            </div>
        </section>
    </div>  
</div>
<div class="row">

    <?php $this->load->view('admin/master_peta/perdesaan/grafik') ?>

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
                        <?php $this->load->view('admin/master_peta/perdesaan/table_eksisting') ?>
                    </div>
                    <div id="a2" class="tab-pane">
                        <?php $this->load->view('admin/master_peta/perdesaan/table_perencanaan') ?>
                    </div>
                    <div id="a3" class="tab-pane">
                        <?php $this->load->view('admin/master_peta/perdesaan/table_penanganan') ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


