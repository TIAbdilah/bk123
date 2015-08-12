<header class="header-frontend">
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img width="350" title="" src="<?php echo base_url().'assets/public/img/'?>en3.png" alt="">
                </a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Profil <b class=" icon-angle-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('publik/profil/about')?>">Tentang Kami</a></li>
                            <li><a href="<?php echo site_url('publik/profil/tupoksi')?>">Tugas Pokok & Fungsi</a></li>
                            <li><a href="<?php echo site_url('publik/profil/struktur_org')?>">Struktur Organisasi</a></li>
                            <li><a href="<?php echo site_url('publik/profil/contact')?>">Hubungi Kami</a></li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Pengaturan <b class=" icon-angle-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('publik/pengaturan/peraturan')?>">Peraturan</a></li>
                            <li><a href="<?php echo site_url('publik/pengaturan/pedoman')?>">Pedoman</a></li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Output Kegiatan <b class=" icon-angle-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('publik/output_kegiatan/sppip_rpkpp')?>">SPPIP & RKPPP</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('publik/output_kegiatan/perkotaan')?>">Perkotaan (Kumuh)</a></li>
                            <li><a href="<?php echo site_url('publik/output_kegiatan/perkotaan')?>">Perkotaan (RSH)</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('publik/output_kegiatan/pedesaan')?>">Pedesaan (Data Potensial)</a></li>
                            <li><a href="<?php echo site_url('publik/output_kegiatan/pedesaan')?>">Pedesaan (Pulau Kecil & Perbatasan)</a></li>
                            <li><a href="<?php echo site_url('publik/output_kegiatan/pedesaan')?>">Pedesaan (Rawan Bencana)</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('publik/output_kegiatan/rusunawa')?>">RUSUNAWA</a></li>
                            <li><a href="<?php echo site_url('publik/output_kegiatan/pedesaam#PISEW')?>">PISEW</a></li>
                            <li><a href="<?php echo site_url('publik/output_kegiatan/rpip_ris_pnpm')?>">RPIP/RIS PNPM</a></li>
                        </ul>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Berita & Agenda <b class=" icon-angle-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('berita')?>">Berita</a></li>
                            <li><a href="<?php echo site_url('publik/agenda')?>">Agenda Kegiatan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Gallery <b class=" icon-angle-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('gallery/download')?>">Download</a></li>
                            <li><a href="<?php echo site_url('gallery/ebook')?>">Ebook</a></li>
                            <li><a href="<?php echo site_url('gallery/foto_kegiatan')?>">Foto Kegiatan</a></li>
                            <li><a href="<?php echo site_url('gallery/film_dokumenter')?>">Film Dokumenter</a></li>
                        </ul>
                    </li>                    
                    <li><a href="<?php echo base_url().'maps'?>">Peta</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>