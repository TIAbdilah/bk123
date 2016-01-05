<?php $this->load->view('admin/master_peta/perbatasan/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-4">
        <section class="panel">
            <header class="panel-heading tab-bg-dark-navy-blue">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#x1" title="Eksisting">Ekisting</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" href="#x2" title="Perencanaan">Perencanaan</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" href="#x3" title="Penanganan dan Pengendalian">Penanganan</a>
                    </li>           
                </ul>
            </header>
            <div class="tab-content">
                <div id="x1" class="tab-pane active">
                    <section class="panel">
                        <div class="panel-heading">Data Pendukung Eksisting</div>
                        <div class="panel-body">
                            <table class="table">
                                <tr><td>Nama Kawasan</td><td>:</td><td><?php echo $perbatasan->nama_kawasan ?></td></tr>
                                <tr><td>Luas Kawasan</td><td>:</td><td><?php echo $perbatasan->luas_kawasan ?></td></tr>
                            </table>
                        </div>
                    </section>
                </div>
                <div id="x2" class="tab-pane">
                    <section class="panel">
                        <div class="panel-heading">Data Pendukung Perencanaan</div>
                        <div class="panel-body">
                            <table class="table">
                                <tr><td>Nama Kawasan</td><td>:</td><td><?php echo $perbatasan->nama_kawasan ?></td></tr>
                                <tr><td>Luas Kawasan</td><td>:</td><td><?php echo $perbatasan->luas_kawasan ?></td></tr>
                            </table>
                        </div>
                    </section>
                </div>
                <div id="x3" class="tab-pane">
                    <section class="panel">
                        <div class="panel-heading">Data Pendukung Penanganan</div>
                        <div class="panel-body">
                            <table class="table">
                                <tr><td>Nama Kawasan</td><td>:</td><td><?php echo $perbatasan->nama_kawasan ?></td></tr>
                                <tr><td>Luas Kawasan</td><td>:</td><td><?php echo $perbatasan->luas_kawasan ?></td></tr>
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
            <div class="panel-body text-center" style="height: 200px">
                <img src="<?php echo base_url() . 'assets/public/' ?>img/peta indonesia.png" height="170px"/>

            </div>
        </section>
    </div>  
</div>
<div class="row">
    <div class="col-lg-12">

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
                        <div class="col-lg-8">
                            <div class="panel-heading">
                                <strong>Isu Strategis</strong>
                                <?php
                                if ($perbatasan_eks != null) {
                                    ?>
                                    <a href="<?php echo site_url('master_peta/perbatasan_detail/edit/' . $perbatasan->id_perbatasan . '/eksisting') ?>">
                                        <span class="pull-right"><i class="icon-pencil"></i></span>
                                    </a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="<?php echo site_url('master_peta/perbatasan_detail/add/' . $perbatasan->id_perbatasan . '/eksisting') ?>">
                                        <span class="pull-right"><i class="icon-plus"></i></span>
                                    </a>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="panel-body">
                                <?php
                                if ($perbatasan_eks != null) {
                                    echo $perbatasan_eks['isu_strategis'];
                                } else {
                                    echo 'Data Masih Kosong';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel-heading">
                                <strong>Gambar Master Plan</strong>
                            </div>
                            <div class="panel-body">
                                <?php
                                if ($perbatasan_eks != NULL) {
                                    for ($i = 1; $i <= 5; $i++) {

                                        if ($perbatasan_eks['gambar' . $i] != NULL) {
                                            ?>
                                            <div class="col-lg-6 text-center" style="padding-bottom: 10px">                                    
                                                <img src="#" width="80px" height="80px" style="margin-bottom: 5px"/><br>
                                                <button class="btn btn-xs ">Edit</button>
                                                <button class="btn btn-xs ">Delete</button>
                                            </div>
                                            <?php
                                        } else {
                                            ?>
                                            <div class="col-lg-6 text-center" style="padding-bottom: 10px">                                    
                                                <img src="<?php echo base_url() . 'assets/admin/img/no_img.png' ?>" width="80px" height="80px" style="margin-bottom: 5px"/><br>
                                                <button class="btn btn-xs ">Edit</button>
                                                <button class="btn btn-xs ">Delete</button>
                                            </div>
                                            <?php
                                        }
                                    }
                                } else {
                                    echo 'Data Masih Kosong';
                                }
                                ?>            
                            </div>

                        </div>
                    </div>
                    <div id="a2" class="tab-pane">
                        <div class="col-lg-8">
                            <div class="panel-heading">
                                <strong>Isu Strategis</strong>
                                <?php
                                if ($perbatasan_per != null) {
                                    ?>
                                    <a href="<?php echo site_url('master_peta/perbatasan_detail/edit/' . $perbatasan->id_perbatasan . '/perencanaan') ?>">
                                        <span class="pull-right"><i class="icon-pencil"></i></span>
                                    </a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="<?php echo site_url('master_peta/perbatasan_detail/add/' . $perbatasan->id_perbatasan . '/perencanaan') ?>">
                                        <span class="pull-right"><i class="icon-plus"></i></span>
                                    </a>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="panel-body">
                                <?php
                                if ($perbatasan_per != null) {
                                    echo $perbatasan_per['isu_strategis'];
                                } else {
                                    echo 'Data Masih Kosong';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel-heading">
                                <strong>Gambar Master Plan</strong>
                                <span class="pull-right"><i class="icon-plus"></i> </span>
                            </div>
                            <div class="panel-body">
                                <?php
                                if ($perbatasan_per != NULL) {
                                    for ($i = 1; $i <= 5; $i++) {

                                        if ($perbatasan_per['gambar' . $i] != NULL) {
                                            ?>
                                            <div class="col-lg-6 text-center" style="padding-bottom: 10px">                                    
                                                <img src="#" width="80px" height="80px" style="margin-bottom: 5px"/><br>
                                                <button class="btn btn-xs ">Edit</button>
                                                <button class="btn btn-xs ">Delete</button>
                                            </div>
                                            <?php
                                        } else {
                                            ?>
                                            <div class="col-lg-6 text-center" style="padding-bottom: 10px">                                    
                                                <img src="<?php echo base_url() . 'assets/admin/img/no_img.png' ?>" width="80px" height="80px" style="margin-bottom: 5px"/><br>
                                                <button class="btn btn-xs ">Edit</button>
                                                <button class="btn btn-xs ">Delete</button>
                                            </div>
                                            <?php
                                        }
                                    }
                                } else {
                                    echo 'Data Masih Kosong';
                                }
                                ?>   
                            </div>

                        </div>
                    </div>
                    <div id="a3" class="tab-pane">
                        <div class="col-lg-8">
                            <div class="panel-heading">
                                <strong>Isu Strategis</strong>
                                <?php
                                if ($perbatasan_pen != null) {
                                    ?>
                                    <a href="<?php echo site_url('master_peta/perbatasan_detail/edit/' . $perbatasan->id_perbatasan . '/penanganan') ?>">
                                        <span class="pull-right"><i class="icon-pencil"></i></span>
                                    </a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="<?php echo site_url('master_peta/perbatasan_detail/add/' . $perbatasan->id_perbatasan . '/penanganan') ?>">
                                        <span class="pull-right"><i class="icon-plus"></i></span>
                                    </a>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="panel-body">
                                <?php
                                if ($perbatasan_pen != null) {
                                    echo $perbatasan_pen['isu_strategis'];
                                } else {
                                    echo 'Data Masih Kosong';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel-heading">
                                <strong>Gambar Master Plan</strong>
                                <span class="pull-right"><i class="icon-plus"></i> </span>
                            </div>
                            <div class="panel-body">
                                <?php
                                if ($perbatasan_pen != NULL) {
                                    for ($i = 1; $i <= 5; $i++) {

                                        if ($perbatasan_pen['gambar' . $i] != NULL) {
                                            ?>
                                            <div class="col-lg-6 text-center" style="padding-bottom: 10px">                                    
                                                <img src="#" width="80px" height="80px" style="margin-bottom: 5px"/><br>
                                                <button class="btn btn-xs ">Edit</button>
                                                <button class="btn btn-xs ">Delete</button>
                                            </div>
                                            <?php
                                        } else {
                                            ?>
                                            <div class="col-lg-6 text-center" style="padding-bottom: 10px">                                    
                                                <img src="<?php echo base_url() . 'assets/admin/img/no_img.png' ?>" width="80px" height="80px" style="margin-bottom: 5px"/><br>
                                                <button class="btn btn-xs ">Edit</button>
                                                <button class="btn btn-xs ">Delete</button>
                                            </div>
                                            <?php
                                        }
                                    }
                                } else {
                                    echo 'Data Masih Kosong';
                                }
                                ?>     
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>