
<?php $this->load->view('admin/master_peta/daerah/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="<?php echo site_url('master_peta/daerah/process/edit/'.$data->id_daerah) ?>" method="POST">
                    <div class="form-group">
                        <label for="inpTingkat" class="col-lg-2 col-sm-2 control-label">Tingkat Daerah</label>
                        <div class="col-lg-4">
                            <select name="inpTingkat" class="form-control" >     
                                <?php
                                $no = 1;
                                foreach ($SIList_tingkat_daerah as $row) {
                                    echo "<option value=\"" . $row->list_item . "\"" . set_select('inpTingkat', $row->list_item, $row->list_item == $data->kategori) . ">" . $row->list_item . "</option>";
                                    $no++;
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpKodeDaerah_prop" class="col-lg-2 col-sm-2 control-label">Kode Daerah</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpKodeDaerah_prop" name="inpKodeDaerah" value="<?php echo $data->kode_daerah?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpNamaDaerah_prop" class="col-lg-2 col-sm-2 control-label">Nama Daerah</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpNamaDaerah_prop" name="inpNamaDaerah" value="<?php echo $data->nm_daerah?>">
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