<?php $this->load->view('admin/master_peta/perbatasan/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-4">
        <section class="panel">
            <header class="panel-heading tab-bg-dark-navy-blue">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#x1" title="Eksisting">Data Pendukung</a>
                    </li> 
                </ul>
            </header>
            <div class="tab-content">
                <div id="x1" class="tab-pane active">
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
            </div>
        </section>
    </div>
    <div class="col-lg-8">
        <section class="panel">
            <div class="panel-heading">Peta</div>
            <div class="panel-body text-center" style="height: 360px">
                <img src="<?php echo base_url() . 'assets/public/' ?>img/peta indonesia.png" height="170px"/>

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
                                            <a title="<?php echo $text['txt']->button_title['view_data'] ?>" 
                                               href="<?php echo site_url('master_peta/pulau_kecil_terluar/view/' ) ?>" class="btn btn-xs btn-default">
                                                   <?php echo $text['txt']->button['view_data'] ?>
                                            </a>
                                            <a title="<?php echo $text['txt']->button_title['edit_data'] ?>" 
                                               href="<?php echo site_url('master_peta/pulau_kecil_terluar/edit/' ) ?>" class="btn btn-xs btn-default">
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
                        for ($i = 1; $i <= 3; $i++) {
                            if ($perbatasan_eks != NULL) {
                                if ($perbatasan_eks['gambar' . $i] != NULL) {
                                    ?>
                                    <div class="col-lg-4 text-center" style="padding-bottom: 10px">                                    
                                        <img src="#" width="80px" height="80px" style="margin-bottom: 5px"/><br>
                                        <button class="btn btn-xs ">Edit</button>
                                        <button class="btn btn-xs ">Delete</button>
                                    </div>
                                    <?php
                                } else {
                                    ?>
                                    <div class="col-lg-4 text-center" style="padding-bottom: 10px">                                    
                                        <img src="<?php echo base_url() . 'assets/admin/img/no_img.png' ?>" width="80px" height="80px" style="margin-bottom: 5px"/><br>
                                        <button class="btn btn-xs ">Edit</button>
                                        <button class="btn btn-xs ">Delete</button>
                                    </div>
                                    <?php
                                }
                            } else {
                                echo 'Data Masih Kosong';
                            }
                        }
                        ?>            
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>