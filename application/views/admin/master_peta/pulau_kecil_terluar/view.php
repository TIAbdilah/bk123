<?php $this->load->view('admin/master_peta/pulau_kecil_terluar/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-4">
        <section class="panel">
            <div class="panel-heading">Data Pendukung</div>
            <div class="panel-body">
                <table class="table">
                    <tr><td>Provinsi</td><td>:</td><td>Prop1</td></tr>
                    <tr><td>Kabupaten / Kota</td><td>:</td><td>Kab Kot 1</td></tr>
                    <tr><td>Kecamatan</td><td>:</td><td>Kec 1</td></tr>
                    <tr><td>Desa / Kelurahan</td><td>:</td><td>Desa Kel 1</td></tr>
                    <tr><td>Pulau</td><td>:</td><td>Pulau 1</td></tr>
                    <tr><td>Jumlah Penduduk</td><td>:</td><td>2000</td></tr>
                    <tr><td>Jumlah KK</td><td>:</td><td>150</td></tr>
                </table>
            </div>
        </section>
    </div>
    <div class="col-lg-8">
        <section class="panel">
            <div class="panel-heading">Peta</div>
            <div class="panel-body text-center" style="height: 360px">
                <!--<img src="<?php echo base_url() . 'assets/public/' ?>img/peta indonesia.png" height="170px"/>-->
                <?php echo $map['js']; ?>
                <?php echo $map['html']; ?>
            </div>
        </section>
    </div>  
</div>
<div class="row">
    <div class="col-lg-12">

        <section class="panel">            
            <div class="panel-body">
                <div class="col-lg-12">
                    <div class="panel-heading">
                        <strong>Data Primer</strong>
                        <span class="pull-right">
                            <?php // if ($text['rg']['M01a']) { ?>
                            <a href="<?php echo site_url('master_peta/pulau_kecil_terluar_detail/add') ?>"><?php echo $text['txt']->button['add_data'] ?></a>
                            <?php // } ?>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="adv-table">
                            <table class="display table table-striped" id="example1" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th colspan="3">Kluster</th>
                                        <th colspan="5">Kependudukan</th>
                                        <th>Perda</th>
                                        <th rowspan="2" width="12%"></th>
                                    </tr>
                                    <tr>
                                        <th>A</th>
                                        <th>B</th>
                                        <th>C</th>
                                        <th>PKN</th>
                                        <th>PKSN</th>
                                        <th>WPS</th>
                                        <th>KSK</th>
                                        <th>RTRW</th>
                                        <th>BG</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td class="dt-body-center">                                            
                                            <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" 
                                               href="<?php echo site_url('master_peta/pulau_kecil_terluar_detail/edit/') ?>" class="btn btn-xs btn-default">
                                                   <?php echo $text['txt']->button['edit_data'] ?>
                                            </a>
                                            <a title="<?php echo $text['txt']->button_title['delete_data'] ?>" href="#" 
                                               onclick="if (confirm('<?php echo $text['msg']->get_message_text('delete-confirm', array('ini')) ?>')) {
                                                           window.location = '<?php echo site_url('master/dokumen/delete/') ?>';
                                                       }" class="btn btn-xs btn-default">
                                               <?php echo $text['txt']->button['delete_data'] ?>
                                            </a>                      
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="panel-heading">
                        <strong>Gambar</strong>
                    </div>
                    <div class="panel-body">
                        <?php
                        for ($i = 0; $i < 3; $i++) {
                            ?>
                            <div class="col-lg-2" style="padding-bottom: 10px">                                    
                                <img src="<?php echo base_url() . 'assets/admin/img/no_img.png' ?>" width="80px" height="80px" style="margin-bottom: 5px"/><br>                            
                                <a href="#myModal-eks" data-toggle="modal" class="btn btn-xs btn-warning btn-block">
                                    Edit
                                </a>
                                <div style="display: none;" aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-eks" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                <h4 class="modal-title">Edit Gambar</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal" role="form">
                                                    <div class="form-group">
                                                        <label for="inputPassword1" class="col-lg-3 col-sm-3 control-label">File Gambar</label>
                                                        <div class="col-lg-7">
                                                            <input id="exampleInputFile" type="file">
                                                            <p class="help-block">Filetype (jpg|png) min (2 MB)</p>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <button type="submit" class="btn btn-default">Edit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>