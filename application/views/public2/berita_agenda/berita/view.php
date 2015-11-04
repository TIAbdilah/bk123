<?php $this->load->view('public2/berita_agenda/berita/breadcrumb') ?>
<div class="w-section section">
    <div class="w-container">
        <div class="w-row">
            <div class="w-col w-col-9 w-col-stack">
                <div class="normal-blog-wrapper">
                    <div class="blog-post">
                        <?php
                        if ($data->foto != null) {
                            $foto = $data->foto;
                        } else {
                            $foto = base_url() . 'assets/public2/images/no_img.jpg';
                        }
                        ?>
                        <div>
                            <div class="w-slider carousel-project" data-animation="slide" data-duration="500" data-infinite="1" data-nav-spacing="5">
                                <div class="w-slider-mask">
                                    <div style="transform: translateX(0px); opacity: 1;" class="w-slide">
                                        <img src="<?php echo $foto ?>" alt="blog1.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space">
                            <h3 class="portfolio-tittle"><a class="blog-link" href="#"><?php echo $data->judul ?></a></h3>
                            <div class="meta-tag">
                                <div>
                                    By&nbsp;<a href="#" class="email"><?php echo $data->pengirim ?></a> 
                                    <span class="blue">/</span> <?php echo $text['frmt_date']->format_date_ldfy($data->tanggal) ?> 
                                </div>
                            </div>
                            <div class="space">
                                <?php echo $data->isi ?>
                            </div>
                        </div>
                    </div>
                    <div class="divider-space less-space">
                        <div class="divider-1-pattern"></div>
                    </div>
                </div>
            </div>
            <div class="w-col w-col-3 w-col-stack">
                <?php $this->load->view('public2/content/sidebar') ?>
            </div>
        </div>
    </div>
</div>
