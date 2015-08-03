
<?php $this->load->view('admin/master_peta/kumuh/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="<?php echo site_url('master_peta/kumuh_detail/process/edit/'.$data['id_kumuh_detail']) ?>" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="inpKategori" value="<?php echo $kategori ?>" />
                    <fieldset>
                        <legend>A. Identifikasi Kondisi Kekumuhan</legend>

                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                <strong>1.Kondisi Bangunan Gedung</strong>
                            </label>
                        </div>

                        <!--ketidakteraturan bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                1a. Ketidakteraturan Bangunan
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpKetBang_prsn" value="1" <?php echo set_radio('inpKetBang_prsn', $data['ketidakteraturan_bangunan_prsn'], $data['ketidakteraturan_bangunan_prsn']==1)?> /> 25-50% 
                                <input type="radio" name="inpKetBang_prsn" value="3" <?php echo set_radio('inpKetBang_prsn', $data['ketidakteraturan_bangunan_prsn'], $data['ketidakteraturan_bangunan_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpKetBang_prsn" value="5" <?php echo set_radio('inpKetBang_prsn', $data['ketidakteraturan_bangunan_prsn'], $data['ketidakteraturan_bangunan_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_1">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>Tidak memenuhi ketentuan tata bangunan dalam RDTR, meliputi pengaturan bentuk, besaran, perletakan, dan tampilan bangunan pada suatu zona; dan/atau</li>
                                                        <li>Tidak memenuhi ketentuan tata bangunan dan tata kulaitas lingkunngan dalam RTBL, meliputi pengaturan blok lingkungan, kapling, bangunan, ketinggian dan evaluasi lantai, konsep identitas lingkungan, konsep orientasi lingkungan, dan wajah jalan.</li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan pada lokasi tidak memiliki keteraturan</li>
                                                        <li>51% - 75% bangunan pada lokasi tidak memiliki keteraturan</li>
                                                        <li>20% - 50% bangunan pada lokasi tidak memiliki keteraturan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpKetBang_kt" placeholder="Keterangan Tambahan"><?php echo $data['ketidakteraturan_bangunan_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpKetBang_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>
                        </div>

                        <!--tingkat kepadatan bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                1b. Tingkat Kepadatan Bangunan
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpKepBang_prsn" value="1" <?php echo set_radio('inpKepBang_prsn', $data['tingkat_kepadatan_bangunan_prsn'], $data['tingkat_kepadatan_bangunan_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpKepBang_prsn" value="3" <?php echo set_radio('inpKepBang_prsn', $data['tingkat_kepadatan_bangunan_prsn'], $data['tingkat_kepadatan_bangunan_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpKepBang_prsn" value="5" <?php echo set_radio('inpKepBang_prsn', $data['tingkat_kepadatan_bangunan_prsn'], $data['tingkat_kepadatan_bangunan_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_2">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpKepBang_kt" placeholder="Keterangan Tambahan"><?php echo $data['tingkat_kepadatan_bangunan_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpKepBang_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                1c. Ketidaksesuaian dengan Persyaratan Teknis Bangunan
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpKetPeTeBang_prsn" value="1" <?php echo set_radio('inpKetPeTeBang_prsn', $data['ketidaksesuaian_dg_persy_te_be_prsn'], $data['ketidaksesuaian_dg_persy_te_be_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpKetPeTeBang_prsn" value="3" <?php echo set_radio('inpKetPeTeBang_prsn', $data['ketidaksesuaian_dg_persy_te_be_prsn'], $data['ketidaksesuaian_dg_persy_te_be_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpKetPeTeBang_prsn" value="5" <?php echo set_radio('inpKetPeTeBang_prsn', $data['ketidaksesuaian_dg_persy_te_be_prsn'], $data['ketidaksesuaian_dg_persy_te_be_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_3">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                        Kondisi bangunan pada lokasi tidak memenuhi persyaratan
                                                    <ol>
                                                        <li>Pengendalian dampak lingkungan</li>						
                                                        <li>Pembangunan bangunan Gedung di atas dan/atau di bawah tanah, air dan/atau prasarana secara umum</li>	
                                                        <li>Keselamatan bangunan gedung</li>						
                                                        <li>Kesehatan bangunan gedung</li>						
                                                        <li>Kenyamanan bangunan gedung</li>						
                                                        <li>Kemudahan bangunan gedung</li>	
                                                    </ol> 

                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan pada lokasi tidak memenuhi persyaratan teknis</li>
                                                        <li>51% - 75% bangunan pada lokasi tidak memenuhi persyaratan teknis</li>	
                                                        <li>25% - 50% bangunan pada lokasi tidak memenuhi persyaratan teknis</li>			
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpKetPeTeBang_kt" placeholder="Keterangan Tambahan"><?php echo $data['ketidaksesuaian_dg_persy_te_be_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpKetPeTeBang_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                <strong>2.Kondisi Jalan Lingkungan</strong>
                            </label>
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                2a. Cakupan Pelayanan Jalan Lingkungan
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpCakPelJal_prsn" value="1" <?php echo set_radio('inpCakPelJal_prsn', $data['cakupan_pelayanan_jalan_prsn'], $data['cakupan_pelayanan_jalan_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpCakPelJal_prsn" value="3" <?php echo set_radio('inpCakPelJal_prsn', $data['cakupan_pelayanan_jalan_prsn'], $data['cakupan_pelayanan_jalan_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpCakPelJal_prsn" value="5" <?php echo set_radio('inpCakPelJal_prsn', $data['cakupan_pelayanan_jalan_prsn'], $data['cakupan_pelayanan_jalan_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_4">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>Sebagian lokasi perumahan atau permukiman tidak terlayani dengan jalan lingkungan yang sesuai dengan ketentuan teknis</p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% arca tidak terlayani oleh jaringan jalan lingkungan</li>
                                                        <li>51% - 75% arca tidak terlayani oleh jalan lingkungan</li>
                                                        <li>25% - 50% arca tidak terlayani oleh jaringan jalan lingkungan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpCakPelJal_kt" placeholder="Keterangan Tambahan"><?php echo $data['cakupan_pelayanan_jalan_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpCakPelJal_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>                            
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                2b. Kualitas Permukaan Jalan Lingkungan
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpKuaPerJal_prsn" value="1" <?php echo set_radio('inpKuaPerJal_prsn', $data['kualitas_permukaan_jalan_prsn'], $data['kualitas_permukaan_jalan_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpKuaPerJal_prsn" value="3" <?php echo set_radio('inpKuaPerJal_prsn', $data['kualitas_permukaan_jalan_prsn'], $data['kualitas_permukaan_jalan_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpKuaPerJal_prsn" value="5" <?php echo set_radio('inpKuaPerJal_prsn', $data['kualitas_permukaan_jalan_prsn'], $data['kualitas_permukaan_jalan_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_5">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>Sebagian atau seluruh jalan lingkungan terjadi kerusakan permukaan jalan pada lokasi perumahan atau permukiman</p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% area memiliki kualitas permukaan jalan yang buruk</li>	
                                                        <li>51%- 75% area memiliki kualitas permukaan jalan yang buruk</li>
                                                        <li>25% - 50% area memiliki kualitas permukaan jalan yang buruk</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpKuaPerJal_kt" placeholder="Keterangan Tambahan"><?php echo $data['kualitas_permukaan_jalan_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpKuaPerJal_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>                            
                        </div>

                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                <strong>3.Kondisi Penyedia Air Minum</strong>
                            </label>
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                3a. Ketidaktersedian Akses Aman Air Minum
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpKetAksAirMin_prsn" value="1" <?php echo set_radio('inpKetAksAirMin_prsn', $data['akses_air_minum_prsn'], $data['akses_air_minum_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpKetAksAirMin_prsn" value="3" <?php echo set_radio('inpKetAksAirMin_prsn', $data['akses_air_minum_prsn'], $data['akses_air_minum_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpKetAksAirMin_prsn" value="5" <?php echo set_radio('inpKetAksAirMin_prsn', $data['akses_air_minum_prsn'], $data['akses_air_minum_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_6">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>Masyarakat pada lokasi perumahn dan permukiman tidak dapat mengakses air minum yang memiliki kualitas tidak berwarna, tidak berbau, dan tidak berasa</p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100 % populasi tidak dapat mengakses air minum yang aman</li>
                                                        <li>51% - 75% populasi tidak dapat mengakses air minum yang aman</li>
                                                        <li>25% - 50% populasi tidak dapat mengakses air minum yang aman</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpKetAksAirMin_kt" placeholder="Keterangan Tambahan"><?php echo $data['akses_air_minum_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpKetAksAirMin_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>                            
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                3b. Tidak Terpenuhinya Kebutuhan Air Minum
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpTidTerKebAir_prsn" value="1" <?php echo set_radio('inpTidTerKebAir_prsn', $data['tidak_terpenuhi_kebutuhan_air_prsn'], $data['tidak_terpenuhi_kebutuhan_air_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpTidTerKebAir_prsn" value="3" <?php echo set_radio('inpTidTerKebAir_prsn', $data['tidak_terpenuhi_kebutuhan_air_prsn'], $data['tidak_terpenuhi_kebutuhan_air_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpTidTerKebAir_prsn" value="5" <?php echo set_radio('inpTidTerKebAir_prsn', $data['tidak_terpenuhi_kebutuhan_air_prsn'], $data['tidak_terpenuhi_kebutuhan_air_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_7">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>Kebutuhan air minum masyarakat pada lokasi perumahan atau permukiman tidak mencapai minimal sebanyak 60 liter/orang/hari</p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% populasi tidak terpenuhi kebutuhan air minum minimalnya</li>
                                                        <li>51%- 75% populasi tidak terpenuhi kebutuhan air minum minimalnya</li>
                                                        <li>25% -50% populasi tidak terpenuhi kebutuhan air minum minimalnya</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpTidTerKebAir_kt" placeholder="Keterangan Tambahan"><?php echo $data['tidak_terpenuhi_kebutuhan_air_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpTidTerKebAir_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>                            
                        </div>

                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                <strong>4.Kondisi Drainase Lingkungan</strong>
                            </label>
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                4a. Ketidakmampuan Mengalirkan Limpasan Air
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpKetMenLimAir_prsn" value="1" <?php echo set_radio('inpKetMenLimAir_prsn', $data['tidak_mampu_mengalirkan_air_prsn'], $data['tidak_mampu_mengalirkan_air_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpKetMenLimAir_prsn" value="3" <?php echo set_radio('inpKetMenLimAir_prsn', $data['tidak_mampu_mengalirkan_air_prsn'], $data['tidak_mampu_mengalirkan_air_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpKetMenLimAir_prsn" value="5" <?php echo set_radio('inpKetMenLimAir_prsn', $data['tidak_mampu_mengalirkan_air_prsn'], $data['tidak_mampu_mengalirkan_air_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_8">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>Jaringan drainase lingkungan tidak mampu mengalirkan limpasan air sehingga menimbulkan genangan dengan tinggi lebih dari 30 cm selama lebih dari 2 jam dan terjadi lebih dari 2 kali setahun</p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% area terjadi genangan > 30cm, > 2 jam dan > 2 x setahun</li>
                                                        <li>51% - 75% area terjadi genangan > 30cm, > 2 jam dan > 2 x setahun</li>
                                                        <li>25% - 50% area terjadi genangan > 30cm, > 2 jam dan > 2 x setahun</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpKetMenLimAir_kt" placeholder="Keterangan Tambahan"><?php echo $data['tidak_mampu_mengalirkan_air_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpKetMenLimAir_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>                            
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                4b. Ketidaktersediaan Drainase 
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpKetDra_prsn" value="1" <?php echo set_radio('inpKetDra_prsn', $data['tidak_tersedia_drainase_prsn'], $data['tidak_tersedia_drainase_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpKetDra_prsn" value="3" <?php echo set_radio('inpKetDra_prsn', $data['tidak_tersedia_drainase_prsn'], $data['tidak_tersedia_drainase_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpKetDra_prsn" value="5" <?php echo set_radio('inpKetDra_prsn', $data['tidak_tersedia_drainase_prsn'], $data['tidak_tersedia_drainase_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_9">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpKetDra_kt" placeholder="Keterangan Tambahan"><?php echo $data['tidak_tersedia_drainase_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpKetDra_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>                            
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                4c. Ketidakterhubungan dengan Sistem Drainase Perkotaan
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpKetSisDra_prsn" value="1" <?php echo set_radio('inpKetSisDra_prsn', $data['tidak_terhubung_sistem_drainase_prsn'], $data['tidak_terhubung_sistem_drainase_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpKetSisDra_prsn" value="3" <?php echo set_radio('inpKetSisDra_prsn', $data['tidak_terhubung_sistem_drainase_prsn'], $data['tidak_terhubung_sistem_drainase_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpKetSisDra_prsn" value="5" <?php echo set_radio('inpKetSisDra_prsn', $data['tidak_terhubung_sistem_drainase_prsn'], $data['tidak_terhubung_sistem_drainase_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_10">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpKetSisDra_kt" placeholder="Keterangan Tambahan"><?php echo $data['tidak_terhubung_sistem_drainase_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpKetSisDra_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>                            
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                4d. Tidak Terpeliharanya Drainase
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpKetPelDra_prsn" value="1" <?php echo set_radio('inpKetPelDra_prsn', $data['tidak_terpelihara_drainase_prsn'], $data['tidak_terpelihara_drainase_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpKetPelDra_prsn" value="3" <?php echo set_radio('inpKetPelDra_prsn', $data['tidak_terpelihara_drainase_prsn'], $data['tidak_terpelihara_drainase_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpKetPelDra_prsn" value="5" <?php echo set_radio('inpKetPelDra_prsn', $data['tidak_terpelihara_drainase_prsn'], $data['tidak_terpelihara_drainase_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_11">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpKetPelDra_kt" placeholder="Keterangan Tambahan"><?php echo $data['tidak_terpelihara_drainase_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpKetPelDra_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>                            
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                4e. Kualitas Konstruksi Drainase
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpKuaKonDra_prsn" value="1" <?php echo set_radio('inpKuaKonDra_prsn', $data['kualitas_konstruksi_drainase_prsn'], $data['kualitas_konstruksi_drainase_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpKuaKonDra_prsn" value="3" <?php echo set_radio('inpKuaKonDra_prsn', $data['kualitas_konstruksi_drainase_prsn'], $data['kualitas_konstruksi_drainase_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpKuaKonDra_prsn" value="5" <?php echo set_radio('inpKuaKonDra_prsn', $data['kualitas_konstruksi_drainase_prsn'], $data['kualitas_konstruksi_drainase_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_11">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpKuaKonDra_kt" placeholder="Keterangan Tambahan"><?php echo $data['kualitas_konstruksi_drainase_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpKuaKonDra_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>                            
                        </div>

                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                <strong>5.Kondisi Pengelolaan Air Limbah</strong>
                            </label>
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                5a. Sistem Pengelolaan Air Limbah Tidak Sesuai Standar Teknis
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpSisPenAirLim_prsn" value="1" <?php echo set_radio('inpSisPenAirLim_prsn', $data['sistem_pengelolaan_air_limbah_prsn'], $data['sistem_pengelolaan_air_limbah_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpSisPenAirLim_prsn" value="3" <?php echo set_radio('inpSisPenAirLim_prsn', $data['sistem_pengelolaan_air_limbah_prsn'], $data['sistem_pengelolaan_air_limbah_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpSisPenAirLim_prsn" value="5" <?php echo set_radio('inpSisPenAirLim_prsn', $data['sistem_pengelolaan_air_limbah_prsn'], $data['sistem_pengelolaan_air_limbah_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_12">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpSisPenAirLim_kt" placeholder="Keterangan Tambahan"><?php echo $data['sistem_pengelolaan_air_limbah_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpSisPenAirLim_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>                            
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                5b. Prasarana dan Sarana Pengelolaan Air Limbah Tidak Sesuai Dengan Persyaratan Teknis
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpPraPenAirLim_prsn" value="1" <?php echo set_radio('inpPraPenAirLim_prsn', $data['pras_pengelolaan_air_limbah_prsn'], $data['pras_pengelolaan_air_limbah_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpPraPenAirLim_prsn" value="3" <?php echo set_radio('inpPraPenAirLim_prsn', $data['pras_pengelolaan_air_limbah_prsn'], $data['pras_pengelolaan_air_limbah_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpPraPenAirLim_prsn" value="5" <?php echo set_radio('inpPraPenAirLim_prsn', $data['pras_pengelolaan_air_limbah_prsn'], $data['pras_pengelolaan_air_limbah_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_13">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpPraPenAirLim_kt" placeholder="Keterangan Tambahan"><?php echo $data['pras_pengelolaan_air_limbah_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpPraPenAirLim_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>                            
                        </div>

                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                <strong>6.Kondisi Pengelolaan Sampah</strong>
                            </label>
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                6a. Prasarana dan Sarana Persampahan Tidak Sesuai dengan Persyaratan Teknis
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpPraPerSamTid_prsn" value="1" <?php echo set_radio('inpPraPerSamTid_prsn', $data['pras_sampah_tidak_sesuai_prsn'], $data['pras_sampah_tidak_sesuai_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpPraPerSamTid_prsn" value="3" <?php echo set_radio('inpPraPerSamTid_prsn', $data['pras_sampah_tidak_sesuai_prsn'], $data['pras_sampah_tidak_sesuai_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpPraPerSamTid_prsn" value="5" <?php echo set_radio('inpPraPerSamTid_prsn', $data['pras_sampah_tidak_sesuai_prsn'], $data['pras_sampah_tidak_sesuai_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_kepbang">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_kepbang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpPraPerSamTid_kt" placeholder="Keterangan Tambahan"><?php echo $data['pras_sampah_tidak_sesuai_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpPraPerSamTid_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>                            
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                6b. Sistem Pengelolaan Persampahan yang Tidak Sesuai Standar Teknis
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpSisPenSamTid_prsn" value="1" <?php echo set_radio('inpSisPenSamTid_prsn', $data['sis_pen_sampah_tidak_sesuai_prsn'], $data['sis_pen_sampah_tidak_sesuai_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpSisPenSamTid_prsn" value="3" <?php echo set_radio('inpSisPenSamTid_prsn', $data['sis_pen_sampah_tidak_sesuai_prsn'], $data['sis_pen_sampah_tidak_sesuai_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpSisPenSamTid_prsn" value="5" <?php echo set_radio('inpSisPenSamTid_prsn', $data['sis_pen_sampah_tidak_sesuai_prsn'], $data['sis_pen_sampah_tidak_sesuai_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_14">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpSisPenSamTid_kt" placeholder="Keterangan Tambahan"><?php echo $data['sis_pen_sampah_tidak_sesuai_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpSisPenSamTid_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>                            
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                6c. Terpeliharanya Sarana dan Prasarana Pengelolaan Persampahan
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpPraPenPer_prsn" value="1" <?php echo set_radio('inpPraPenPer_prsn', $data['terpelihara_pras_sampah_prsn'], $data['terpelihara_pras_sampah_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpPraPenPer_prsn" value="3" <?php echo set_radio('inpPraPenPer_prsn', $data['terpelihara_pras_sampah_prsn'], $data['terpelihara_pras_sampah_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpPraPenPer_prsn" value="5" <?php echo set_radio('inpPraPenPer_prsn', $data['terpelihara_pras_sampah_prsn'], $data['terpelihara_pras_sampah_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_kepbang">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_kepbang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpPraPenPer_kt" placeholder="Keterangan Tambahan"><?php echo $data['terpelihara_pras_sampah_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpPraPenPer_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>                            
                        </div>

                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                <strong>7.Kondisi Proteksi Kebakaran</strong>
                            </label>
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                7a. Ketidaktersediaan Prasarana Proteksi Kebakaran
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpKetPraProKeb_prsn" value="1" <?php echo set_radio('inpKetPraProKeb_prsn', $data['tidak_tersedia_pras_prokeb_prsn'], $data['tidak_tersedia_pras_prokeb_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpKetPraProKeb_prsn" value="3" <?php echo set_radio('inpKetPraProKeb_prsn', $data['tidak_tersedia_pras_prokeb_prsn'], $data['tidak_tersedia_pras_prokeb_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpKetPraProKeb_prsn" value="5" <?php echo set_radio('inpKetPraProKeb_prsn', $data['tidak_tersedia_pras_prokeb_prsn'], $data['tidak_tersedia_pras_prokeb_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_kepbang">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_kepbang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpKetPraProKeb_kt" placeholder="Keterangan Tambahan"><?php echo $data['tidak_tersedia_pras_prokeb_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpKetPraProKeb_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>                            
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                7b. Ketersediaan Sarana Proteksi Kebakaran
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpKetSarProKeb_prsn" value="1" <?php echo set_radio('inpKetSarProKeb_prsn', $data['tidak_tersedia_sar_prokeb_prsn'], $data['tidak_tersedia_sar_prokeb_prsn']==1)?>/> 25-50% 
                                <input type="radio" name="inpKetSarProKeb_prsn" value="3" <?php echo set_radio('inpKetSarProKeb_prsn', $data['tidak_tersedia_sar_prokeb_prsn'], $data['tidak_tersedia_sar_prokeb_prsn']==3)?>/> 51-75%
                                <input type="radio" name="inpKetSarProKeb_prsn" value="5" <?php echo set_radio('inpKetSarProKeb_prsn', $data['tidak_tersedia_sar_prokeb_prsn'], $data['tidak_tersedia_sar_prokeb_prsn']==5)?>/> 76-100%
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_kepbang">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_kepbang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpKetSarProKeb_kt" placeholder="Keterangan Tambahan"><?php echo $data['tidak_tersedia_sar_prokeb_kt']?></textarea>
                            </div>
                            <div class="col-lg-3">                                
                                <input type="file" class="form-control fileinput-button" name="inpKetSarProKeb_ft" placeholder="foto2"/>
                                <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                            </div>                            
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>B. Identifikasi Pertimbangan Lain</legend>

                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                <strong>8. Pertimbangan Lain</strong>
                            </label>
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                8a. Nilai Strategis Lokasi
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpNilStrLok_prsn" value="5" <?php echo set_radio('inpNilStrLok_prsn', $data['nilai_strategis_lokasi_prsn'], $data['nilai_strategis_lokasi_prsn']==5)?>/> Ada
                                <input type="radio" name="inpNilStrLok_prsn" value="1" <?php echo set_radio('inpNilStrLok_prsn', $data['nilai_strategis_lokasi_prsn'], $data['nilai_strategis_lokasi_prsn']==1)?>/> Tidak
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_kepbang">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_kepbang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpNilStrLok_kt" placeholder="Keterangan Tambahan"><?php echo $data['nilai_strategis_lokasi_kt']?></textarea>
                            </div>                      
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                8b. Kependudukan 
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpKep_prsn" value="1" <?php echo set_radio('inpKep_prsn', $data['kependudukan_prsn'], $data['kependudukan_prsn']==1)?>/> Rendah 
                                <input type="radio" name="inpKep_prsn" value="3" <?php echo set_radio('inpKep_prsn', $data['kependudukan_prsn'], $data['kependudukan_prsn']==3)?>/> Sedang
                                <input type="radio" name="inpKep_prsn" value="5" <?php echo set_radio('inpKep_prsn', $data['kependudukan_prsn'], $data['kependudukan_prsn']==5)?>/> Tinggi
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_kepbang">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_kepbang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpKep_kt" placeholder="Keterangan Tambahan"><?php echo $data['kependudukan_kt']?></textarea>
                            </div>                      
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                8c. Kondisi Sosial, Ekonomi, dan Budaya
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpSosBud_prsn" value="5" <?php echo set_radio('inpSosBud_prsn', $data['sosial_budaya_prsn'], $data['sosial_budaya_prsn']==5)?>/> Ya
                                <input type="radio" name="inpSosBud_prsn" value="1" <?php echo set_radio('inpSosBud_prsn', $data['sosial_budaya_prsn'], $data['sosial_budaya_prsn']==1)?>/> Tidak
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_kepbang">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_kepbang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpSosBud_ft" placeholder="Keterangan Tambahan"><?php echo $data['sosial_budaya_kt']?></textarea>
                            </div>                      
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>C. Identifikasi Legalitas Lahan</legend>

                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                <strong>9. Legalitas Lahan</strong>
                            </label>
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                9a. Kejelasan Status Penguasaan Lahan
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpKejStaLah_prsn" value="0" <?php echo set_radio('inpKejStaLah_prsn', $data['kejelasan_status_lahan_prsn'], $data['kejelasan_status_lahan_prsn']==0)?>/> - 
                                <input type="radio" name="inpKejStaLah_prsn" value="1" <?php echo set_radio('inpKejStaLah_prsn', $data['kejelasan_status_lahan_prsn'], $data['kejelasan_status_lahan_prsn']==1)?>/> +
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_kepbang">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_kepbang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpKejStaLah_kt" placeholder="Keterangan Tambahan"><?php echo $data['kejelasan_status_lahan_kt']?></textarea>
                            </div>                      
                        </div>

                        <!--ketidak sesuaian dengan persyaratan teknis bangunan-->
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                9b. Kesesuaian RTR
                            </label>
                            <div class="col-lg-3">
                                <input type="radio" name="inpKesRtr_prsn" value="0" <?php echo set_radio('inpKesRtr_prsn', $data['ksesesuaian_rtr_prsn'], $data['ksesesuaian_rtr_prsn']==1)?>/> - 
                                <input type="radio" name="inpKesRtr_prsn" value="1" <?php echo set_radio('inpKesRtr_prsn', $data['ksesesuaian_rtr_prsn'], $data['ksesesuaian_rtr_prsn']==1)?>/> +
                                <br>
                                <div style="margin-top: 10px">
                                    <p class="help-block">
                                        <a data-toggle="modal" href="#myModal_kepbang">                                 
                                            <i class="icon-info-sign"> Info</i>     
                                        </a>  
                                    </p>
                                    <div class="modal fade" id="myModal_kepbang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Informasi</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Indikator</strong>
                                                    <p>
                                                    <ol>
                                                        <li>KDB melebihi ketentuan RDTR, dan/atau RTBL;</li>
                                                        <li>KLB melebihi ketentuan dalam RDTR, dan/atau RTBL; dan/atau</li>
                                                        <li>
                                                            Kepadatan bangunan yang tinggi pada lokasi, yaitu :
                                                            <ul>
                                                                <li>untuk kota metropolitan dan kota besar = 250 unit/ha</li>
                                                                <li>untuk kota sedang dan kota kecil = 200 unit/ha</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                    </p>
                                                    <strong>Parameter</strong>
                                                    <p>
                                                    <ol>
                                                        <li>76% - 100% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>51% - 75% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                        <li>20% - 50% bangunan memiliki kepadatan tidak sesuai ketentuan</li>
                                                    </ol>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <textarea class="form-control" name="inpKesRtr_kt" placeholder="Keterangan Tambahan"><?php echo $data['ksesesuaian_rtr_kt']?></textarea>
                            </div>                      
                        </div>

                    </fieldset>
                    <div class="form-group text-center">
                        <div class="col-lg-12">
                            <button type="submit" class="btn"><?php echo $text['txt']->button['save_edit'] ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>