<div id="a1" class="tab-pane active">
    <div class="col-lg-8">
        <div class="panel-heading">
            <strong>Isu Strategis</strong>
            <?php
            if ($perbatasan_eks != null) {
                ?>
                <a href="<?php echo site_url('master_peta/perbatasan_detail/edit/' . $perbatasan->id_perbatasan . '/eksisting') ?>">
                    <span class="pull-right"><i class="icon-pencil"></i></span>
                </a>
                <?php
            } else {
                ?>
                <a href="<?php echo site_url('master_peta/perbatasan_detail/add/' . $perbatasan->id_perbatasan . '/eksisting') ?>">
                    <span class="pull-right"><i class="icon-plus"></i></span>
                </a>
                <?php
            }
            ?>
        </div>
        <div class="panel-body">
            <?php
            if ($perbatasan_eks != null) {
                echo $perbatasan_eks['isu_strategis'];
            } else {
                echo 'Data Masih Kosong';
            }
            ?>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel-heading">
            <strong>Gambar Master Plan</strong>
        </div>
        <div class="panel-body">
            <?php
            if ($perbatasan_eks != NULL) {
                for ($i = 1; $i <= 5; $i++) {
                    if ($perbatasan_eks['gambar' . $i] != NULL) {
                        ?>
                        <div class="col-lg-6 text-center" style="padding-bottom: 10px">                                    
                            <img src="#" width="80px" height="80px" style="margin-bottom: 5px"/><br>
                            <!--<a href="<?php echo site_url('master_peta/perbatasan_detail/edit_pic/' . $i) ?>" class="btn btn-xs"> Edit</a>-->
                            <!--<a href="<?php echo site_url('master_peta/perbatasan_detail/delete_pic/' . $i) ?>" class="btn btn-xs"> Delete</a>-->
                            <a href="#myModal-eks" data-toggle="modal" class="btn btn-xs btn-warning">
                                Edit
                            </a>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="col-lg-6" style="padding-bottom: 10px">                                    
                            <img src="<?php echo base_url() . 'assets/admin/img/no_img.png' ?>" width="80px" height="80px" style="margin-bottom: 5px"/><br>                            
                            <a href="#myModal-eks" data-toggle="modal" class="btn btn-xs btn-warning btn-block">
                                Edit
                            </a>
                            <div style="display: none;" aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-eks" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                            <h4 class="modal-title">Edit Gambar</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" role="form">
                                                <div class="form-group">
                                                    <label for="inputPassword1" class="col-lg-3 col-sm-3 control-label">File Gambar</label>
                                                    <div class="col-lg-7">
                                                        <input id="exampleInputFile" type="file">
                                                        <p class="help-block">Filetype (jpg|png) min (2 MB)</p>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <button type="submit" class="btn btn-default">Edit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            } else {
                echo 'Data Masih Kosong';
            }
            ?>            
        </div>

    </div>
</div>