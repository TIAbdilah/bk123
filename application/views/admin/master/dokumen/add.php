
<?php $this->load->view('admin/master/dokumen/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" role="form" enctype="multipart/form-data" action="<?php echo site_url('master/dokumen/process/add/') ?>" method="POST">                    
                    <div class="form-group">
                        <label for="inpDok" class="col-lg-2 col-sm-2 control-label">Dokumen</label>
                        <div class="col-lg-6">
                            <input type="file" class="form-control" id="inpDok" name="inpDok">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpKategori" class="col-lg-2 col-sm-2 control-label">Kategori</label>
                        <div class="col-lg-4">
                            <select name="inpKategori" class="form-control" >     
                                <?php
                                foreach ($SIList_tipe_dokumen as $row) {
                                    echo "<option value=\"" . $row->list_item . "\">" . $row->list_item . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>    
                    <div class="form-group">
                        <label for="inpThumb" class="col-lg-2 col-sm-2 control-label">Thumbnail</label>
                        <div class="col-lg-4">
                            <input type="file" class="form-control" id="inpThumb" name="inpThumb">
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