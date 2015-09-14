<ul class="sidebar-menu" id="nav-accordion">
    <li>
        <a class="active" href="<?php echo site_url('master/home') ?>">
            <i class="icon-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <?php if ($text['rg']['M03b'] || $text['rg']['M04b'] || $text['rg']['M07b']) { ?>
        <li class="sub-menu">
            <a href="javascript:;" >
                <i class="icon-list-alt"></i>
                <span>Master</span>
            </a>
            <ul class="sub">
                <?php
                if ($text['rg']['M03b']) {
                    echo '<li><a  href="' . site_url('master/content') . '">Content</a></li>';
                }
//                if ($text['rg']['M03b']) {
                    echo '<li><a  href="' . site_url('master/karusel') . '">Karusel</a></li>';
//                }
                if ($text['rg']['M04b']) {
                    echo '<li><a  href="' . site_url('master/berita') . '">Berita</a></li>';
                }
                if ($text['rg']['M07b']) {
                    echo '<li><a  href="' . site_url('master/foto_kegiatan') . '">Foto Kegiatan</a></li>';
                }
                if ($text['rg']['M06b']) {
                    echo '<li><a  href="' . site_url('master/dokumen') . '">Dokumen</a></li>';
                }
                ?>
            </ul>
        </li>
    <?php } ?>

    <?php if ($text['rg']['M01b'] || $text['rg']['M02b']) { ?>
        <li class="sub-menu">
            <a href="javascript:;" >
                <i class="icon-list-alt"></i>
                <span>Master Peta</span>
            </a>
            <ul class="sub">    
                <?php
                if ($text['rg']['M01b']) {
                    echo '<li><a  href="' . site_url('master_peta/daerah') . '">Daerah</a></li>';
                }
                if ($text['rg']['M02b']) {
                    echo '<li><a  href="' . site_url('master_peta/kumuh') . '">Kawasan Kumuh</a></li>';
                }
                ?>
            </ul>
        </li>
    <?php } ?>

    <!--multi level menu start-->
    <?php if ($text['rg']['U01b'] || $text['rg']['U02b'] || $text['rg']['U03b'] || $text['rg']['U04b'] || $text['rg']['U05b']) { ?>
        <li class="sub-menu">
            <a href="javascript:;" >
                <i class="icon-sitemap"></i>
                <span>Utility</span>
            </a>
            <ul class="sub">
                <?php if ($text['rg']['U01b']) { ?>
                    <li><a href="<?php echo site_url('utilitas/listcode') ?>"><i class="icon-list-alt"></i> Listcode</a></li>
                <?php } ?>
                <li class="sub-menu">
                    <?php if ($text['rg']['U02b'] || $text['rg']['U03b'] || $text['rg']['U04b'] || $text['rg']['U05b']) { ?>
                        <a  href="#">User & Role</a>
                        <ul class="sub">
                            <?php
                            if ($text['rg']['U02b']) {
                                echo '<li><a href="' . site_url('utilitas/user') . '"><i class="icon-user"></i> User</a></li>';
                            }
                            if ($text['rg']['U03b']) {
                                echo '<li><a href="' . site_url('utilitas/role') . '"><i class="icon-qrcode"></i> Role</a></li>';
                            }
                            if ($text['rg']['U04b']) {
                                echo '<li><a href="' . site_url('utilitas/right') . '"><i class="icon-puzzle-piece"></i> Right</a></li>';
                            }
                            if ($text['rg']['U05b']) {
                                echo '<li><a href="' . site_url('utilitas/modul') . '"><i class="icon-list"></i> Modu</a></li>';
                            }
                            ?>
                        </ul>
                    <?php } ?> 
                </li>
            </ul>
        </li>
    <?php } ?> 
    <!--multi level menu end-->

</ul>