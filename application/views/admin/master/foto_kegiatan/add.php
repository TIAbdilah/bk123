
<?php $this->load->view('admin/master/foto_kegiatan/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" role="form" enctype="multipart/form-data" action="<?php echo site_url('master/foto_kegiatan/process/add/') ?>" method="POST">                    
                    <div class="form-group">
                        <label for="inpKategori" class="col-lg-2 col-sm-2 control-label">Kategori</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpKategori" name="inpKategori" placeholder="Kategori">
                        </div>
                    </div>   
                    <div class="form-group">
                        <label for="inpGbr" class="col-lg-2 col-sm-2 control-label">Foto</label>
                        <div class="col-lg-4">
                            <input type="file" class="form-control" id="inpGbr" name="inpGbr">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn"><?php echo $text['txt']->button['save_add'] ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>