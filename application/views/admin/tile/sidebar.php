<ul class="sidebar-menu" id="nav-accordion">
    <li>
        <a class="active" href="<?php echo site_url('master/home') ?>">
            <i class="icon-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <?php if ($text['rg']['M03b'] || $text['rg']['M04b']) { ?>
        <li class="sub-menu">
            <a href="javascript:;" >
                <i class="icon-list-alt"></i>
                <span>Master</span>
            </a>
            <ul class="sub">
                <?php if ($text['rg']['M03b']) { ?>
                    <li><a  href="<?php echo site_url('master/content') ?>">Content</a></li>
                <?php } ?>
                <?php if ($text['rg']['M04b']) { ?>
                    <li><a  href="<?php echo site_url('master/berita') ?>">Berita</a></li>
                <?php } ?>
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
                <?php if ($text['rg']['M01b']) { ?>
                    <li><a  href="<?php echo site_url('master_peta/daerah') ?>">Daerah</a></li>
                <?php } ?>
                <?php if ($text['rg']['M02b']) { ?>
                    <li><a  href="<?php echo site_url('master_peta/kumuh') ?>">Kawasan Kumuh</a></li>
                <?php } ?>
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
                            <?php if ($text['rg']['U02b']) { ?>
                                <li><a href="<?php echo site_url('utilitas/user') ?>"><i class="icon-user"></i> User</a></li>
                            <?php } ?>
                            <?php if ($text['rg']['U03b']) { ?>
                                <li><a href="<?php echo site_url('utilitas/role') ?>"><i class="icon-asterisk"></i> Role</a></li>                        
                            <?php } ?>
                            <?php if ($text['rg']['U04b']) { ?>
                                <li><a href="<?php echo site_url('utilitas/right') ?>"><i class="icon-check"></i> Rights</a></li>  
                            <?php } ?>
                            <?php if ($text['rg']['U05b']) { ?>
                                <li><a href="<?php echo site_url('utilitas/modul') ?>"><i class="icon-tasks"></i> Modul</a></li>  
                                <?php } ?> 
                        </ul>
                    <?php } ?> 
                </li>
            </ul>
        </li>
    <?php } ?> 
    <!--multi level menu end-->

</ul>