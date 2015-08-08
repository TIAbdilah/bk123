
<?php $this->load->view('admin/master/berita/breadcrumbs') ?>

<?php
if ($this->session->flashdata('message') != ''):echo $this->session->flashdata('message');
endif;
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Selamat Datang, <?php echo $this->session->userdata('username')?>
            </header>
        </section>
    </div>
</div>



