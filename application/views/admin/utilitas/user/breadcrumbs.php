<div class="row">
    <div class="col-lg-12">
        <!--breadcrumbs start -->
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('master/home')?>">Home</a></li>
            <?php if (($this->session->userdata('role') == 'super admin') || ($this->session->userdata('role') == 'admin')) { ?>
                <li><a href="<?php echo site_url('utilitas/user') ?>">User</a></li>
            <?php } else { ?>
                <li><a href="#">User</a></li>
            <?php } ?>
            <li><?php echo $title_page ?></li>
        </ul>
        <!--breadcrumbs end -->
    </div>
</div>