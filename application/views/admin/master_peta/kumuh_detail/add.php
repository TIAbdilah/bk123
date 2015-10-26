
<?php
$this->load->view('admin/master_peta/kumuh/breadcrumbs');

function generate_radio($field) {
    return '<span class="col-lg-6"><input type="radio" name="inp_' . $field . '_prsn" value="0"/> 0-25%</span>
            <span class="col-lg-6"><input type="radio" name="inp_' . $field . '_prsn" value="1" checked/> 26-50%</span> 
            <span class="col-lg-6"><input type="radio" name="inp_' . $field . '_prsn" value="3"/> 51-75%</span>
            <span class="col-lg-6"><input type="radio" name="inp_' . $field . '_prsn" value="5"/> 76-100%</span>';
}

function generate_modal($field, $prm) {
    return '<span class="col-lg-6">
                <p class="help-block">
                    <a data-toggle="modal" href="#' . $field . '">                                 
                        <i class="icon-info-sign"> Info</i>     
                    </a>  
                </p>
            </span>
            <div class="modal fade" id="' . $field . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Informasi</h4>
                        </div>
                        <div class="modal-body">' . $prm . '</div>
                    </div>
                </div>
            </div>';
}

function generate_modal1($field, $foto) {
    if ($foto != '') {
        return '<span class="col-lg-6">
                <a data-toggle="modal" class="btn btn-default" href="#' . $field . '">                                 
                    <i class="icon-picture"></i>     
                </a>  
            </span>  
            <div class="modal fade" id="' . $field . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Foto</h4>
                        </div>
                        <div class="modal-body">' . $foto . '</div>
                    </div>
                </div>
            </div>';
    } else {
        return '';
    }
}
?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page.' Detil Dawasan Kumuh ('.$kaw_kumuh->nm_kawasan.' | '.ucwords($kategori).')'?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="<?php echo site_url('master_peta/kumuh_detail/process1/add/') ?>" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="inpKategori" value="<?php echo $kategori ?>" />
                    <input type="hidden" name="inpIdKawKumuh" value="<?php echo $id_kaw_kumuh ?>" />
                    <table class="table table-striped table-responsive" style="width: 100%">                        
                        <tbody>
                            <tr>
                                <th colspan="6"># Data Pendukung</th>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>Luas Kawasan</td>
                                <td><input type="text" class="form-control" name="inpLuasKawasan" placeholder="Luas Kawasan" /></td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>Jumlah KK</td>
                                <td><input type="text" class="form-control" name="inpJmlKK" placeholder="Jumlah KK" /></td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>Jumlah RTLH</td>
                                <td><input type="text" class="form-control" name="inpJmlRTLH" placeholder="Jumlah RTLH" /></td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>KML File</td>
                                <td>
                                    <input type="file" class="form-control" name="inpKmlFile" placeholder="KML File" />
                                    <p class="help-block">Filetype (kml) Maxsize (2 MB)</p>
                                </td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>Peta Legenda</td>
                                <td>
                                    <input type="file" class="form-control" name="inpPeta" placeholder="Peta Legenda" />
                                    <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                                </td>
                                <td colspan="2"><?php // echo generate_modal1('peta', '') ?></td>
                            </tr>
                            <?php if($kategori == 'eksisting'){?>
                            <tr>
                                <td colspan="2"></td>
                                <td>SK Kumuh</td>
                                <td>
                                    <input type="file" class="form-control" name="inpSk" placeholder="SK Kumuh" />
                                    <p class="help-block">Filetype (pdf) Maxsize (15 MB)</p>
                                </td>
                                <td colspan="2"><?php // echo generate_modal1('sk', 'aaaa') ?></td>
                            </tr>
                            <?php }?>
                            <tr>
                                <th colspan="6">A. Identifikasi Kondisi Kekumuhan</th>
                            </tr>
                            <?php
                            $id_ind = '0';
                            foreach ($data_indikator as $dt_ind) {
                                if (substr($dt_ind->nomor, 0, 1) < 8) {
                                    if (substr($dt_ind->nomor, 0, 1) != $id_ind) {
                                        echo '<tr>
                                                <td width="3%"><a title="' . $dt_ind->kriteria . '" href="#">' . substr($dt_ind->nomor, 0, 1) . '</a></td>
                                                <td>#</td>
                                                <td>KML file (Point/Line)</td>
                                                <td>
                                                    <input type="file" class="form-control" name="inp_point_line_'.substr($dt_ind->nomor, 0, 1).'" placeholder="SK Kumuh" />
                                                    <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                                                </td>
                                                <td colspan="2"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>#</td>
                                                <td>Video</td>
                                                <td>
                                                    <input type="file" class="form-control" name="inpVideo_'.substr($dt_ind->nomor, 0, 1).'" placeholder="Video" />
                                                    <p class="help-block">Filetype (mp4/avi) Maxsize (15 MB)</p>
                                                </td>                                                
                                                <td colspan="2"></td>
                                            </tr>';
                                    } 
                                    ?>                                    
                                    <tr>           
                                        <td width="3%">&nbsp;</td>
                                        <td width="3%"><?php echo substr($dt_ind->nomor, 1, 1) ?></td>
                                        <td width="20%"><?php echo $dt_ind->kriteria ?></td>
                                        <td width="24%">
                                            <?php
                                            echo generate_radio($dt_ind->field_name);
                                            echo generate_modal($dt_ind->field_name, $dt_ind->parameter);
                                            ?>
                                        </td>
                                        <td width="25%">
                                            <textarea class="form-control" name="inp_<?php echo $dt_ind->field_name ?>_kt" placeholder="Keterangan Tambahan" rows="2"></textarea>
                                        </td>
                                        <td width="25%">
                                            <?php if($kategori != 'penanganan'){?>
                                            <input type="file" class="form-control fileinput-button" name="inp_<?php echo $dt_ind->field_name ?>_ft" placeholder="foto2"/>
                                            <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                                            <?php }else {?>
                                            <input type="file" class="form-control fileinput-button" name="inp_<?php echo $dt_ind->field_name ?>_ft" placeholder="foto2"/>
                                            <p class="help-block">Foto 0% | Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                                            <input type="file" class="form-control fileinput-button" name="inp_<?php echo $dt_ind->field_name ?>_ft2" placeholder="foto2"/>
                                            <p class="help-block">Foto 50% | Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                                            <input type="file" class="form-control fileinput-button" name="inp_<?php echo $dt_ind->field_name ?>_ft3" placeholder="foto2"/>
                                            <p class="help-block">Foto 100% | Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                                            <?php }?>
                                        </td>
                                    </tr>
                                    <?php
                                    $id_ind = substr($dt_ind->nomor, 0, 1);
                                }
                            }
                            ?>
                            <tr>
                                <th colspan="6">B. Identifikasi Pertimbangan Lain</th>
                            </tr>
                            <?php
                            $id_ind = '0';
                            foreach ($data_indikator as $dt_ind) {
                                if (substr($dt_ind->nomor, 0, 1) == 8) {
                                    ?>
                                    <tr>
                                        <?php
                                        if (substr($dt_ind->nomor, 0, 1) != $id_ind) {
                                            echo '<td width="3%"><a title="' . $dt_ind->kriteria . '" href="#">' . substr($dt_ind->nomor, 0, 1) . '</a></td>';
                                        } else {
                                            echo '<td width="3%">&nbsp;</td>';
                                        }
                                        ?>                
                                        <td width="3%"><?php echo substr($dt_ind->nomor, 1, 1) ?></td>
                                        <td width="20%"><?php echo $dt_ind->kriteria ?></td>
                                        <td width="24%">
                                            <?php
                                            echo generate_radio($dt_ind->field_name);
                                            echo generate_modal($dt_ind->field_name, $dt_ind->parameter);
                                            ?>
                                        </td>
                                        <td width="25%">
                                            <textarea class="form-control" name="inp_<?php echo $dt_ind->field_name ?>_kt" placeholder="Keterangan Tambahan" rows="2"></textarea>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <?php
                                    $id_ind = substr($dt_ind->nomor, 0, 1);
                                }
                            }
                            ?> 
                            <tr>
                                <th colspan="6">C. Identifikasi Legalitas Lahan</th>
                            </tr>
                            <?php
                            $id_ind = '0';
                            foreach ($data_indikator as $dt_ind) {
                                if (substr($dt_ind->nomor, 0, 1) == 9) {
                                    ?>
                                    <tr>
                                        <?php
                                        if (substr($dt_ind->nomor, 0, 1) != $id_ind) {
                                            echo '<td width="3%"><a title="' . $dt_ind->kriteria . '" href="#">' . substr($dt_ind->nomor, 0, 1) . '</a></td>';
                                        } else {
                                            echo '<td width="3%">&nbsp;</td>';
                                        }
                                        ?>                
                                        <td width="3%"><?php echo substr($dt_ind->nomor, 1, 1) ?></td>
                                        <td width="20%"><?php echo $dt_ind->kriteria ?></td>
                                        <td width="24%">
                                            <?php
                                            echo generate_radio($dt_ind->field_name);
                                            echo generate_modal($dt_ind->field_name, $dt_ind->parameter);
                                            ?>
                                        </td>
                                        <td width="25%">
                                            <textarea class="form-control" name="inp_<?php echo $dt_ind->field_name ?>_kt" placeholder="Keterangan Tambahan" rows="2"></textarea>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <?php
                                    $id_ind = substr($dt_ind->nomor, 0, 1);
                                }
                            }
                            ?> 
                        </tbody>
                    </table>
                    <div class="form-group text-center">
                        <div class="col-lg-12">
                            <button type="submit" class="btn"><?php echo $text['txt']->button['save_add'] ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>