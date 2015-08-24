
<?php $this->load->view('admin/master/berita/breadcrumbs') ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Selamat Datang, <?php echo $this->session->userdata('username') ?>
            </header>
        </section>
    </div>
</div>
<?php
$count_empty = 0;
$count_check = 0;
foreach ($data_kumuh as $data) {
    if (substr($data->kode_daerah, 0, 2) == substr($this->session->userdata('role_propinsi'), 0, 2)) {
        if (strpos($this->session->userdata('username'), 'eksisting') !== FALSE) {
            if ($data->eks == 1) {
                $count_check += 1;
            } else {
                $count_empty += 1;
            }
        }
        if (strpos($this->session->userdata('username'), 'perencanaan') !== FALSE) {
            if ($data->per == 1) {
                $count_check += 1;
            } else {
                $count_empty += 1;
            }
        }
        if (strpos($this->session->userdata('username'), 'penanganan') !== FALSE) {
            if ($data->pen == 1) {
                $count_check += 1;
            } else {
                $count_empty += 1;
            }
        }
    }
}
?>
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
                    <li><a href="javascript:;"> <i class="icon-user"></i> User Baru (belum aktif) <span class="label label-primary pull-right r-activity">19</span></a></li>
                </ul>

            </section>
        </aside>
    </div>
    <div class="col-lg-8">
        <!--// data eksisting-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <div class="panel-heading">Data <?php echo $this->session->userdata('bagian') ?></div>
                </section>
            </div>
            <div class=" state-overview col-lg-6">
                <section class="panel">
                    <div class="symbol red">
                        <i class="icon-check-empty"></i>
                    </div>
                    <div class="value">
                        <h1><?php echo $count_empty ?></h1>
                        <p>Data Kawasan Belum Diisi</p>
                    </div>
                </section>
            </div>
            <div class=" state-overview col-lg-6">
                <section class="panel">
                    <div class="symbol terques">
                        <i class="icon-check"></i>
                    </div>
                    <div class="value">
                        <h1><?php echo $count_check ?></h1>
                        <p>Data Kawasan Sudah Diisi</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>