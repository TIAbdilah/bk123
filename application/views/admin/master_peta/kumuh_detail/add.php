
<?php $this->load->view('admin/master_peta/kumuh/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="<?php echo site_url('master_peta/kumuh_detail/process/add/') ?>" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="inpKategori" value="<?php echo $kategori ?>" />
                    <input type="hidden" name="inpIdKawKumuh" value="<?php echo $id_kaw_kumuh ?>" />
                    <fieldset>
                        <legend>Data Pendukung</legend>
                        <div class="form-group">
                            <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">
                                <strong>KMZ File</strong>
                            </label>
                            <div class="form-group">
                                <div class="col-lg-3">                                
                                    <input type="file" class="form-control fileinput-button" name="inpKmz_file" placeholder="foto2"/>
                                    <p class="help-block">Filetype (jpg/jpeg) Maxsize (2 MB)</p>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group text-center">
                        <div class="col-lg-12">
                            <button type="submit" class="btn"><?php echo $text['txt']->button['save_add'] ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>