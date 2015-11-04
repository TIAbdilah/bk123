
<?php $this->load->view('public2/gallery/breadcrumb') ?>
<div class="w-section section">
    <div class="w-container">
        <div class="filters">
            <ul class="w-list-unstyled filter-ul">
                <li class="filter active" data-filter="all"><a class="flt-lnk" href="#">All</a></li>
                <li class="filter" data-filter=".perkotaan"><a class="flt-lnk" href="#">Perkotaan</a></li>
                <li class="filter" data-filter=".perdesaan"><a class="flt-lnk" href="#">Perdesaan</a></li>
                <li class="filter" data-filter=".agro"><a class="flt-lnk" href="#">Agropolitan/Minapolitan</a></li>
            </ul>
        </div>
        <div class="w-clearfix grid" id="Grid">
            <article style="display: inline-block;" class="mix perkotaan" data-ix="show-portfolio-overlay">
                <div class="portfolio-wrapper">
                    <div>
                        <img src="<?php echo base_url().'assets/public/img/'?>thumbnails/film/nussp_baubau.jpg" alt="NUSSP Baubau" />
                        <a style="transition: opacity 500ms ease 0s; opacity: 0;" class="w-inline-block portfolio-overlay" href="http://www.youtube.com/watch?v=B7orHAWoP5k?rel=0">
                            <div class="pico-wrp">
                                <div style="opacity: 0; transform: scale(1.3); transition: opacity 400ms ease 0s, transform 200ms ease 0s;" class="portfolio-ico" data-ix="zom-out-pico">
                                    <div class="w-embed"><i class="fa fa-share"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a class="w-inline-block portfolio-text-wrapper" href="http://www.youtube.com/watch?v=B7orHAWoP5k?rel=0">
                    <h5 class="portfolio-tittle">NUSSP Baubau</h5>
                    <div class="portfolio-sub">Perkotaan</div>
                </a>
            </article>
            <article style="display: inline-block;" class="mix perdesaan" data-ix="show-portfolio-overlay">
                <div class="portfolio-wrapper">
                    <div>
                        <img src="<?php echo base_url().'assets/public/img/'?>thumbnails/film/film_perdesaan_2012.jpg" alt="Pengembangan Kws. Permukiman Perdesaan" />
                        <a style="transition: opacity 500ms ease 0s; opacity: 0;" class="w-inline-block portfolio-overlay" href="http://www.youtube.com/watch?v=dIPW-ixuffk?rel=0">
                            <div class="pico-wrp">
                                <div style="opacity: 0; transform: scale(1.3); transition: opacity 400ms ease 0s, transform 200ms ease 0s;" class="portfolio-ico" data-ix="zom-out-pico">
                                    <div class="w-embed"><i class="fa fa-share"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a class="w-inline-block portfolio-text-wrapper" href="http://www.youtube.com/watch?v=dIPW-ixuffk?rel=0">
                    <h5 class="portfolio-tittle">Pengembangan Kws. Permukiman Perdesaan</h5>
                    <div class="portfolio-sub">Perdesaan</div>
                </a>
            </article>
            <article style="display: inline-block;" class="mix agro" data-ix="show-portfolio-overlay">
                <div class="portfolio-wrapper">
                    <div>
                        <img src="<?php echo base_url().'assets/public/img/'?>thumbnails/film/Film_Mina_Jambi.jpg" alt="Minapolitan Jambi" />
                        <a style="transition: opacity 500ms ease 0s; opacity: 0;" class="w-inline-block portfolio-overlay" href="http://www.youtube.com/watch?v=_bN8-niiz5A?rel=0">
                            <div class="pico-wrp">
                                <div style="opacity: 0; transform: scale(1.3); transition: opacity 400ms ease 0s, transform 200ms ease 0s;" class="portfolio-ico" data-ix="zom-out-pico">
                                    <div class="w-embed"><i class="fa fa-share"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a class="w-inline-block portfolio-text-wrapper" href="http://www.youtube.com/watch?v=_bN8-niiz5A?rel=0">
                    <h5 class="portfolio-tittle">Minapolitan Jambi</h5>
                    <div class="portfolio-sub">Agropolitan/Minapolitan</div>
                </a>
            </article>
            <article style="display: inline-block;" class="mix agro" data-ix="show-portfolio-overlay">
                <div class="portfolio-wrapper">
                    <div>
                        <img src="<?php echo base_url().'assets/public/img/'?>thumbnails/film/film_agro_cianjur.jpg" alt="Agropolitan Cianjur" />
                        <a style="transition: opacity 500ms ease 0s; opacity: 0;" class="w-inline-block portfolio-overlay" href="http://www.youtube.com/watch?v=13CEmpHNxjk?rel=0">
                            <div class="pico-wrp">
                                <div style="opacity: 0; transform: scale(1.3); transition: opacity 400ms ease 0s, transform 200ms ease 0s;" class="portfolio-ico" data-ix="zom-out-pico">
                                    <div class="w-embed"><i class="fa fa-share"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a class="w-inline-block portfolio-text-wrapper" href="http://www.youtube.com/watch?v=13CEmpHNxjk?rel=0">
                    <h5 class="portfolio-tittle">Agropolitan Cianjur</h5>
                    <div class="portfolio-sub">Agropolitan/Minapolitan</div>
                </a>
            </article>
            
        </div>
    </div>
</div>          