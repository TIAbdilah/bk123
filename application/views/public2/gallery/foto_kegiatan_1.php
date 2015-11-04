
<?php $this->load->view('public2/gallery/breadcrumb') ?>
<div class="w-section section">
    <div class="w-container">
        <div class="filters">
            <ul class="w-list-unstyled filter-ul">
                <li class="filter active" data-filter="all"><a class="flt-lnk" href="#">All</a></li>
                <?php
                $tag = '';
                foreach ($data_foto as $foto) {
                    $kat = ucwords(str_replace('_', ' ', $foto->kategori));
                    if ($tag != $kat) {
                        echo '<li class="filter" data-filter=".' . $foto->kategori . '"><a class="flt-lnk" href="#">' . $kat . '</a></li>';
                    }
                    $tag = $kat;
                }
                ?>                
            </ul>
        </div>
        <div class="w-clearfix grid" id="Grid">
            <?php
            foreach ($data_foto as $foto) {
                $thumb = str_replace('.', '_thumb.', $foto->nm_foto);
                $kat1 = ucwords(str_replace('_', ' ', $foto->kategori));
                ?>
                <article style="display: inline-block;" class="mix <?php echo $foto->kategori?>" data-ix="show-portfolio-overlay">
                    <div class="portfolio-wrapper">
                        <div>
                            <img src="<?php echo base_url() . 'assets/admin/img/foto_kegiatan/' . $foto->nm_foto ?>" alt="" />
                            <a style="transition: opacity 500ms ease 0s; opacity: 0;" class="w-inline-block portfolio-overlay" href="#">
                                <div class="pico-wrp">
                                    <div style="opacity: 0; transform: scale(1.3); transition: opacity 400ms ease 0s, transform 200ms ease 0s;" class="portfolio-ico" data-ix="zom-out-pico">
                                        <div class="w-embed"><i class="fa fa-share"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a class="w-inline-block portfolio-text-wrapper" href="#">
                        <!--<h5 class="portfolio-tittle">NUSSP Baubau</h5>-->
                        <div class="portfolio-sub"><?php echo $kat1?></div>
                    </a>
                </article>
                <?php
            }
            ?>
        </div>
    </div>
</div>          