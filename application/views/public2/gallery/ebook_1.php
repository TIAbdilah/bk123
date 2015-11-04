
<?php $this->load->view('public2/gallery/breadcrumb') ?>
<div class="w-section section">
    <div class="w-container">

        <div class="w-clearfix grid" id="Grid">            
            <?php
            foreach ($data_doc as $doc) {
                ?>
                <article style="display: inline-block;" class="mix agro" data-ix="show-portfolio-overlay">
                    <div class="portfolio-wrapper">
                        <div>
                            <img src="<?php echo base_url() . 'assets/admin/doc/thumb/'.$doc->thumb ?>" alt="Agropolitan Cianjur" />
                            <a style="transition: opacity 500ms ease 0s; opacity: 0;" class="w-inline-block portfolio-overlay" href="<?php echo base_url() . 'assets/admin/doc/' . $doc->nm_doc ?>">
                                <div class="pico-wrp">
                                    <div style="opacity: 0; transform: scale(1.3); transition: opacity 400ms ease 0s, transform 200ms ease 0s;" class="portfolio-ico" data-ix="zom-out-pico">
                                        <div class="w-embed"><i class="fa fa-share"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>
                <?php
            }
            ?>
        </div>
    </div>
</div>          