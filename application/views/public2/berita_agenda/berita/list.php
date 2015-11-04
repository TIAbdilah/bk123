<?php $this->load->view('public2/berita_agenda/berita/breadcrumb') ?>
<div class="w-section section">
    <div class="w-container">
        <div class="w-row">
            <div class="w-col w-col-9 w-col-stack">
                <?php
                foreach ($list_data as $data) {

                    if ($data->foto != null) {
                        $foto = $data->foto;
                    } else {
                        $foto = base_url() . 'assets/public2/images/no_img.jpg';
                    }
                    ?>
                    <div class="blog-post">
                        <div class="w-row">
                            <div class="w-col w-col-6">
                                <div>
                                    <div class="blog-img" data-ix="show-portfolio-overlay">
                                        <img src="<?php echo $foto ?>" alt="blog1.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="w-col w-col-6">
                                <div class="padd-right">
                                    <h4 class="portfolio-tittle r-mp"><a class="blog-link" href="#"><?php echo $data->judul ?></a></h4>
                                    <div class="meta-tag">
                                        <div>
                                            By&nbsp;<a class="email" href="#"><?php echo $data->pengirim ?></a> 
                                            <span class="blue">/</span> <?php echo $format_date->format_date_ldfy($data->tanggal) ?>
                                        </div>
                                    </div>
                                    <div class="space">
                                        <p>
                                            <?php echo substr($data->isi, 0, 250) . '...' ?>
                                            <a class="link" href="<?php echo site_url('berita/view/' . $data->id_berita) ?>">Read More →</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider-space less-space">
                        <div class="divider-1-pattern"></div>
                    </div>
                    <?php
                }
                ?>
                <div class="space x2">
                    <?php echo $page_link ?>                    
                </div>
            </div>
            <div class="w-col w-col-3 w-col-stack">
                <?php $this->load->view('public2/content/sidebar') ?>
            </div>
        </div>
    </div>
</div>
