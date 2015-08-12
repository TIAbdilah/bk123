<div class="col-lg-3">
    <div class="blog-side-item"> 
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
                        <!--<img class="img-thumbnail" src="<?php echo $lt_news->foto?>" width="80px" height="80px" alt="">-->
                    </a>
                    <div class="media-body">
                        <h5 class="media-heading">
                            <a href="<?php echo site_url('berita/view/'.$lt_news->id_berita)?>"><?php echo substr($lt_news->judul, 0, 150).'...'?> </a>
                        </h5>
                        <p>
                            <?php echo $text['frmt_date']->format_date_dfy($lt_news->tanggal)?>
                        </p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>