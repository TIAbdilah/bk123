
<?php // $this->load->view('admin/master_peta/perbatasan_detail/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-heading"><?php echo $title_page ?></div>
            <div class="panel-body text-center">
                <form class="form-horizontal" action="<?php echo site_url('master_peta/perbatasan_detail/process/edit/'.$data->id_perb_detail) ?>" method="POST">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <textarea class="form-control ckeditor" name="inpIsu" rows="10"><?php echo $data->isu_strategis?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="pull-right" style="margin-right: 20px">
                            <button type="submit" class="btn">
                                <?php echo $text['txt']->button['save_edit'] ?>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>