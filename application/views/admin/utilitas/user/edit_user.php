
<?php $this->load->view('admin/utilitas/user/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo site_url('utilitas/user/process_edit_user/'.$data->id_user) ?>" method="POST">                    
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpNama">Nama</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" id="inpNama" name="inpNama" value="<?php echo $data->nama?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpNoTlp">No Telp</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" id="inpNoTlp" name="inpNoTlp" value="<?php echo $data->no_telp?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 col-sm-3 control-label" for="inpEmail">Email</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" id="inpEmail" name="inpEmail" value="<?php echo $data->email?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-9">
                            <button type="submit" class="btn"><?php echo $text['txt']->button['save_add'] ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
