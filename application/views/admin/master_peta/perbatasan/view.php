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
            <div class="panel-body text-center" style="height: 400px">
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
                    <?php $this->load->view('admin/master_peta/perbatasan/table_eksisting')?>
                    <?php $this->load->view('admin/master_peta/perbatasan/table_perencanaan')?>
                    <?php $this->load->view('admin/master_peta/perbatasan/table_penanganan')?>
                </div>
            </div>
        </section>
    </div>
</div>