
<?php
$this->load->view('admin/master/karusel/breadcrumbs');
?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" role="form" enctype="multipart/form-data" action="<?php echo site_url('master/karusel/process/edit/' . $data->id_karusel) ?>" method="POST">                    
                    <div class="form-group">
                        <label for="inpJudul" class="col-lg-2 col-sm-2 control-label">Judul</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpJudul" name="inpJudul" value="<?php echo $data->judul ?>">
                        </div>
                    </div>   
                    <div class="form-group">
                        <label for="inpIsi" class="col-lg-2 col-sm-2 control-label">Isi</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="inpIsi" name="inpIsi" value="<?php echo $data->isi ?>">
                        </div>
                    </div>   
                    <div class="form-group">
                        <label for="inpGbr" class="col-lg-2 col-sm-2 control-label">Gambar</label>
                        <div class="col-lg-4">
                            <input type="file" class="form-control" id="inpGbr" name="inpGbr">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-4">
                            <img src="<?php echo base_url() . 'assets/admin/img/news/' . $data->gambar ?>" width="240px">
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