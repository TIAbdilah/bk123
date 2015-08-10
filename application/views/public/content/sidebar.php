<div class="col-lg-3">
    <div class="blog-side-item"> 
        <div class="blog-post">            
            <h3>Kalender</h3>
            <?php echo $text['cal'] ?>
        </div>

        <div class="blog-post">
            <h3>Berita Terbaru</h3>
            <?php
            foreach ($text['latest_news'] as $data) {
                ?>
                <div class="media">
                    <a class="pull-left" href="javascript:;">
                        <img class="img-thumbnail" src="#" alt="">
                    </a>
                    <div class="media-body">
                        <h5 class="media-heading"><a href="javascript:;"><?php echo $data->tanggal?> </a></h5>
                        <p>
                            <?php echo substr($data->judul, 0, 150).'...'?>
                        </p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>