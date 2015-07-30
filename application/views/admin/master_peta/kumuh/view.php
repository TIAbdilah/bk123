<?php $this->load->view('admin/master_peta/kumuh/breadcrumbs') ?>

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
                    <p class="form-control-static">: <?php // echo $data_kelurahan->nm_kecamatan ?></p>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Detail Kawasan</div>
    <div class="panel-body">
        <table class="table table-striped table-bordered" style="width: 100%">
            <tr>
                <th width="5%">No.</th>
                <th width="20%">KRITERIA dan Indikator</th>
                <th width="25%">Eksiting</th>
                <th width="25%">Perencanaan</th>
                <th width="25%">Penanganan</th>
            </tr>
            <tr>
                <th>A</th>
                <th colspan="4">FISIK</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Keteraturan Bangunan</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->keteraturan_bangunan;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->keteraturan_bangunan;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->keteraturan_bangunan;
                    } else {
                        echo '-';
                    }
                    ?></td>                
            </tr>
            <tr>
                <td>2</td>
                <td>Kepadatan Bangunan</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->kepadatan_bangunan;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->kepadatan_bangunan;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->kepadatan_bangunan;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>3</td>
                <td>Kondisi Fisik Bangunan</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->kondisi_fisik_bangunan;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->kondisi_fisik_bangunan;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->kondisi_fisik_bangunan;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>4</td>
                <td>Jalan Lingkungan</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->jalan_lingkungan;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->jalan_lingkungan;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->jalan_lingkungan;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>5</td>
                <td>Saluran Air Hujan (Drainase Lingkungan)</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->drainase_lingkungan;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->drainase_lingkungan;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->drainase_lingkungan;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>6</td>
                <td>Pembuangan Air Limbah</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->pembuangan_air_limbah;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->pembuangan_air_limbah;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->pembuangan_air_limbah;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>7</td>
                <td>Penyediaan Air Bersih dan Air Minum</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->pab_pam;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->pab_pam;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->pab_pam;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>8</td>
                <td>Pengelolaan Persampahan</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->pengelolaan_sampah;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->pengelolaan_sampah;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->pengelolaan_sampah;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>9</td>
                <td>Pengamanan Bahaya Kebakaran</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->pengamanan_kebakaran;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->pengamanan_kebakaran;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->pengamanan_kebakaran;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <th>B</th>
                <th colspan="4">Non FISIK</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Legalitas Lahan</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->legalitas_bangunan;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->legalitas_bangunan;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->legalitas_bangunan;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>2</td>
                <td>Kepadatan Penduduk</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->kepadatan_penduduk;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->kepadatan_penduduk;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->kepadatan_penduduk;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>3</td>
                <td>Mata Pencaharian Penduduk</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->mata_pencaharian_penduduk;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->mata_pencaharian_penduduk;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->mata_pencaharian_penduduk;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>4</td>
                <td>Penghasilan Rata-rata Keluaga</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->penghasilan_rata2;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->penghasilan_rata2;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->penghasilan_rata2;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <th colspan="2">Kategori Kumuh</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>                
                <th colspan="2">Permasalahan Utama Kawasan</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>C</th>
                <th colspan="4">Lainya </th>
            </tr>
            <tr>
                <td>1</td>
                <td>Kesesuaian dengan Rencanan Tata Ruang</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->kesesuaian_rencana_tata_ruang;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->kesesuaian_rencana_tata_ruang;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->kesesuaian_rencana_tata_ruang;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>2</td>
                <td>Status Lahan</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->status_lahan;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->status_lahan;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->status_lahan;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>3</td>
                <td>Nilai Strategis Lokasi</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->nilai_strategis_lokasi;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->nilai_strategis_lokasi;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->nilai_strategis_lokasi;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>4</td>
                <td>Kegiatan Ekonomi Dalam Lokasi</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->kegiatan_ekonomi;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->kegiatan_ekonomi;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->kegiatan_ekonomi;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>5</td>
                <td>Respon Masyarakat</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->respon_masyarakat;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->respon_masyarakat;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->respon_masyarakat;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>6</td>
                <td>Harapan Masyarakat</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->harapan_masyarakat;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->harapan_masyarakat;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->harapan_masyarakat;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>7</td>
                <td>Keberadaan dan Aktifitas Sistem / Kelompok Pengelola Lingkungan</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->keberadaan_aktifitas_dan_kelompok;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->keberadaan_aktifitas_dan_kelompok;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->keberadaan_aktifitas_dan_kelompok;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <td>8</td>
                <td>Komitmen Pemerintah Kota Terhadap Penanganan Permukiman Kumuh`</td>
                <td><?php
                    if ($data_detail_eks != null) {
                        echo $data_detail_eks->komitmen_pemerintah_kota;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->komitmen_pemerintah_kota;
                    } else {
                        echo '-';
                    }
                    ?></td>
                <td><?php
                    if ($data_detail_per != null) {
                        echo $data_detail_per->komitmen_pemerintah_kota;
                    } else {
                        echo '-';
                    }
                    ?></td> 
            </tr>
            <tr>
                <th colspan="2">Rekomendasi Penanganan</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th colspan="2">Pola Ruang RT / RW</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <tr>               
                <th colspan="2">Rekomendasi Prioritas Penanganan</th>
                <th></th>
                <th></th>
                <th></th>
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