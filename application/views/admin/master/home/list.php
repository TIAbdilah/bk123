
<?php $this->load->view('admin/master/home/breadcrumbs') ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>
<!--<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Selamat Datang, <?php echo $this->session->userdata('username') ?>
            </header>
        </section>
    </div>
</div>-->
<div class="row">
    <div class="col-lg-4">
        <aside class="profile-nav  alt green-border">
            <section class="panel">
                <div class="user-heading round">
                    <a href="#">
                        <img src="<?php echo base_url() . 'assets/public/img/' ?>profile-avatar.png">
                    </a>
                    <h1><?php echo $this->session->userdata('username') ?></h1>
                    <p><?php echo $this->session->userdata('role') . ' | ' . $this->session->userdata('bagian') ?></p>
                </div>

                <ul class="nav nav-pills nav-stacked">
                    <li><a href="<?php echo site_url('utilitas/user')?>"> <i class="icon-user"></i> User Baru (belum aktif) <span class="label label-primary pull-right r-activity" id="intJml">0</span></a></li>
                </ul>

            </section>
        </aside>
    </div>    
    <div class="col-lg-8">
        <!--// data eksisting-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <div class="panel-heading">Data Eksisting</div>
                </section>
            </div>
            <div class="state-overview col-lg-6">
                <section class="panel">
                    <div class="symbol red">
                        <i class="icon-check-empty"></i>
                    </div>
                    <div class="value">
                        <h1><?php echo $count_empty_eks ?></h1>
                        <p>Data Kawasan Belum Diisi</p>
                    </div>
                </section>
            </div>
            <div class="state-overview col-lg-6">
                <section class="panel">
                    <div class="symbol terques">
                        <i class="icon-check"></i>
                    </div>
                    <div class="value">
                        <h1><?php echo $count_check_eks ?></h1>
                        <p>Data Kawasan Sudah Diisi</p>
                    </div>
                </section>
            </div>
        </div>
        <!--        // data perencanaan-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <div class="panel-heading">Data Perencanaan</div>
                </section>
            </div>
            <div class="state-overview col-lg-6">
                <section class="panel">
                    <div class="symbol red">
                        <i class="icon-check-empty"></i>
                    </div>
                    <div class="value">
                        <h1><?php echo $count_empty_per ?></h1>
                        <p>Data Kawasan Belum Diisi</p>
                    </div>
                </section>
            </div>
            <div class="state-overview col-lg-6">
                <section class="panel">
                    <div class="symbol terques">
                        <i class="icon-check"></i>
                    </div>
                    <div class="value">
                        <h1><?php echo $count_check_per ?></h1>
                        <p>Data Kawasan Sudah Diisi</p>
                    </div>
                </section>
            </div>
        </div>

        <!--// data penanganan-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <div class="panel-heading">Data Penanganan dan Pengendalian</div>
                </section>
            </div>
            <div class="state-overview col-lg-6">
                <section class="panel">
                    <div class="symbol red">
                        <i class="icon-check-empty"></i>
                    </div>
                    <div class="value">
                        <h1><?php echo $count_empty_pen ?></h1>
                        <p>Data Kawasan Belum Diisi</p>
                    </div>
                </section>
            </div>
            <div class="state-overview col-lg-6">
                <section class="panel">
                    <div class="symbol terques">
                        <i class="icon-check"></i>
                    </div>
                    <div class="value">
                        <h1><?php echo $count_check_pen ?></h1>
                        <p>Data Kawasan Sudah Diisi</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>



