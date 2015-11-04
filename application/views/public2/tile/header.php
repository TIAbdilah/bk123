<header>
    <!-- START NAVIGATION -->

    <div class="w-nav normal-header" id="myaffix" data-collapse="medium" data-animation="default" data-duration="400" data-contain="1">
        <div class="w-container">
            <a class="w-nav-brand brand-logo" href="#">
                <img src="<?php echo base_url() . 'assets/public2/' ?>images/logo.png" width="246" alt="logo.png">
            </a>
            <nav class="w-nav-menu w-clearfix nav-menu" role="navigation"> 
                <div class="w-dropdown-toggle nav-link active">
                    <div>
                        <a href="<?php echo base_url() ?>">Home</a>
                    </div>
                </div>
                <div class="w-dropdown w-clearfix" data-delay="0" data-ix="move-dropdown-arrow">
                    <div class="w-dropdown-toggle nav-link">
                        <div>
                            Profil
                        </div>
                        <div class="w-icon-dropdown-toggle drop-arrow">
                        </div>
                    </div>
                    <nav class="w-dropdown-list drop-down-list">
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('publik/profil/about') ?>">Tentang Kami</a>
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('publik/profil/tupoksi') ?>">Tugas Pokok & Fungsi</a>
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('publik/profil/struktur_org') ?>">Struktur Organisasi</a>
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('publik/profil/contact') ?>">Hubungi Kami</a>
                    </nav>
                </div>
                <div class="w-dropdown w-clearfix" data-delay="0" data-ix="move-dropdown-arrow">
                    <div class="w-dropdown-toggle nav-link">
                        <div>
                            Pengaturan
                        </div>
                        <div class="w-icon-dropdown-toggle drop-arrow">
                        </div>
                    </div>
                    <nav class="w-dropdown-list drop-down-list">
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('publik/pengaturan/peraturan') ?>">Peraturan</a>
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('publik/pengaturan/pedoman') ?>">Pedoman</a>
                    </nav>
                </div>
                <div class="w-dropdown w-clearfix" data-delay="0" data-ix="move-dropdown-arrow">
                    <div class="w-dropdown-toggle nav-link">
                        <div>
                            Output Kegiatan
                        </div>
                        <div class="w-icon-dropdown-toggle drop-arrow">
                        </div>
                    </div>
                    <nav class="w-dropdown-list drop-down-list">
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('publik/output_kegiatan/sppip_rpkpp') ?>">SPPIP & RKPPP</a>

                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('publik/output_kegiatan/perkotaan') ?>">Perkotaan (Kumuh)</a></li>
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('publik/output_kegiatan/perkotaan') ?>">Perkotaan (RSH)</a></li>

                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('publik/output_kegiatan/pedesaan') ?>">Pedesaan (Data Potensial)</a>
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('publik/output_kegiatan/pedesaan') ?>">Pedesaan (Pulau Kecil & Perbatasan)</a>
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('publik/output_kegiatan/pedesaan') ?>">Pedesaan (Rawan Bencana)</a>

                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('publik/output_kegiatan/rusunawa') ?>">RUSUNAWA</a>
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('publik/output_kegiatan/pedesaam#PISEW') ?>">PISEW</a>
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('publik/output_kegiatan/rpip_ris_pnpm') ?>">RPIP/RIS PNPM</a>
                    </nav>
                </div>
                <div class="w-dropdown w-clearfix" data-delay="0" data-ix="move-dropdown-arrow">
                    <div class="w-dropdown-toggle nav-link">
                        <div>
                            Berita & Agenda
                        </div>
                        <div class="w-icon-dropdown-toggle drop-arrow">
                        </div>
                    </div>
                    <nav class="w-dropdown-list drop-down-list">
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('berita') ?>">Berita</a>
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('publik/agenda') ?>">Agenda Kegiatan</a>
                    </nav>
                </div>
                <div class="w-dropdown w-clearfix" data-delay="0" data-ix="move-dropdown-arrow">
                    <div class="w-dropdown-toggle nav-link">
                        <!-- mega menu -->
                        <div>
                            Gallery
                        </div>
                        <div class="w-icon-dropdown-toggle drop-arrow">
                        </div>
                    </div> 
                    <nav class="w-dropdown-list drop-down-list">
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('gallery/download') ?>">Download</a>
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('gallery/ebook') ?>">Ebook</a>
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('gallery/foto_kegiatan') ?>">Foto Kegiatan</a>
                        <a class="w-dropdown-link dropdown-link" href="<?php echo site_url('gallery/film_dokumenter') ?>">Film Dokumenter</a>
                    </nav>
                </div> 
                <div class="w-hidden-medium w-hidden-small w-hidden-tiny search-wrapper" data-ix="show-search">
                    <a href="<?php echo site_url('login/')?>"><i class="fa fa-user"></i></a>
                </div>

            </nav>
            <!-- END NAVIGATION -->
            <div class="w-nav-button hamburger">
                <div class="w-icon-nav-menu">
                </div>
            </div>
        </div>
    </div>
</header>