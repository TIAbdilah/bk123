<div class="sidebar">
    <div>
        <div>
            <form id="email-form" name="email-form" data-name="Email Form" action="<?php echo site_url('berita/search') ?>" method="POST">
                <input class="w-input blog-search" id="inpKeyword" name="inpKeyword" placeholder="Cari Berita" type="text" data-name="Search">
            </form>
        </div>
    </div>
    <div class="space x2">
        <div class="tittle-line tittle-sml-mg">
            <h5>Login</h5>
            <div class="divider-1 small">
                <div class="divider-small"></div>
            </div>
        </div>
        <p>
        <form id="email-form" name="email-form" data-name="Email Form" action="<?php echo site_url('berita/search') ?>" method="POST">
            <i class="fa fa-user"> Nama Akun</i><input class="w-input fa fa-user" id="inpUsername" name="inpUsername" placeholder="Nama Akun" required type="text" data-name="inpUsername">
            <i class="fa fa-key"> Kata Kunci</i><input class="w-input" id="inpPassword" name="inpPassword" placeholder="Kata Kunci" required type="password" data-name="inpPassword">
            <input class="btn-success pull-right" type="submit" value="Login"/>
        </form> 
        </p>
    </div>    
    <div class="space x2">
        <div class="tittle-line tittle-sml-mg">
            <h5>Berita Terbaru</h5>
            <div class="divider-1 small">
                <div class="divider-small"></div>
            </div>
        </div>
        <div>
            <ul class="w-list-unstyled">
                <?php
            foreach ($text['latest_news'] as $lt_news) {
                ?>
                <li class="li-post" data-ix="show-dt-blog">
                    <div class="w-clearfix">
                        <?php
                            if($lt_news->foto != null){
                                $foto = $lt_news->foto;
                            }else {
                                $foto = base_url() . 'assets/public2/images/no_img_little.jpg';
                            }
                        ?>
                        <a class="w-inline-block blog-item blog-popular-sidebar" href="#">
                            <img src="<?php echo $foto ?>" alt="">
                            <div class="dt-blog" data-ix="move-dt-blog">
                                <div><?php echo $text['frmt_date']->get_date($lt_news->tanggal).' '.$text['frmt_date']->get_month($lt_news->tanggal) ?></div>
                            </div>
                        </a>
                        <div class="blog-wrapper">
                            <h5 class="portfolio-tittle blog-tittle">
                                <a class="blog-link" href="<?php echo site_url('berita/view/' . $lt_news->id_berita) ?>">
                                    <?php echo substr($lt_news->judul, 0, 150) . '...' ?>
                                </a>
                            </h5>
                        </div>
                    </div>
                </li>
                <?php
            }
            ?>  
            </ul>
        </div>
    </div>
</div>