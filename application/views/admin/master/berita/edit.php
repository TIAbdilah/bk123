
<?php $this->load->view('admin/master/berita/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="<?php echo site_url('master/berita/process/edit/'.$data->id_berita) ?>" method="POST">
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Kategori</label>
                        <div class="col-lg-4">
                            <select name="inpKategori" class="form-control" >                                                
                                <option value="">-</option>
                                <?php
                                foreach ($SIList_kategori as $row) {
                                    echo "<option value=\"" . $row->nm_kategori . "\"" . set_select('inpKategori', $row->nm_kategori, $row->nm_kategori == $data->id_kategori) . ">" . $row->nm_kategori . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpJudul" class="col-lg-2 col-sm-2 control-label">Judul</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="inpJudul" name="inpJudul" value="<?php echo $data->judul?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpHeadline" class="col-lg-2 col-sm-2 control-label">Headline</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="inpHeadline" name="inpHeadline" value="<?php echo $data->headline?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpIsi" class="col-lg-2 col-sm-2 control-label">Isi</label>
                        <div class="col-lg-10">
                            <textarea class="form-control ckeditor" name="inpIsi" rows="6"><?php echo $data->isi?></textarea>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="inpGbr" class="col-lg-2 col-sm-2 control-label">URL Foto</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpGbr" name="inpGbr" value="<?php echo $data->foto?>">
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