<div class="col-lg-3">
    <div class="blog-side-item">         
        <div class="blog-post">            
            <h3>Cari Berita</h3>
            <form class="form-inline" role="form" action="<?php echo site_url('berita/search')?>" method="POST">
                <div class="form-group">
                    <input class="form-control" id="inpKeyword" name="inpKeyword" placeholder="Kata Kunci" type="text">
                </div>
                <button type="submit" class="btn btn-success"><i class="icon-search"></i></button>
            </form>
            <br>
        </div>
        <div class="blog-post">            
            <h3>Kalender</h3>
            <?php echo $text['cal'] ?>
        </div>

        <div class="blog-post">
            <h3>Berita Terbaru</h3>
            <?php
            foreach ($text['latest_news'] as $lt_news) {
                ?>
                <div class="media">
                    <a class="pull-left" href="javascript:;">
                        <?php
                            if($lt_news->foto != null){
                                $foto = $lt_news->foto;
                            }else {
                                $foto = base_url() . 'assets/admin/img/no_img.png';
                            }
                        ?>
                        <img class="img-thumbnail" src="<?php echo $foto ?>" width="80px" height="80px" alt="">
                    </a>
                    <div class="media-body">
                        <h5 class="media-heading">
                            <a href="<?php echo site_url('berita/view/' . $lt_news->id_berita) ?>"><?php echo substr($lt_news->judul, 0, 150) . '...' ?> </a>
                        </h5>
                        <p>
                            <?php echo $text['frmt_date']->format_date_dfy($lt_news->tanggal) ?>
                        </p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>