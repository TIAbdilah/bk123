<div class="row">
    <div class="col-lg-12">
        <!--breadcrumbs start -->
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('master/home') ?>"><i class="icon-home"></i> Home</a></li>
            <li><a href="<?php echo site_url('master_peta/daerah') ?>">Daerah</a></li>
            <li class="active">
                <?php
                $active_page = "";
                if ($title_page != null) {
                    $active_page .= $title_page;
                }
                if (!empty($data_propinsi)) {
                    $active_page .= ' | <a href="' . site_url('master_peta/daerah/index/' . $data_propinsi->kode_daerah) . '">' . $data_propinsi->nm_daerah . '</a>';
                }
                if (!empty($data_kabupaten)) {
                    $active_page .= ' :: <a href="' . site_url('master_peta/daerah/index/' . $data_kabupaten->kode_daerah) . '">' . $data_kabupaten->nm_daerah . '</a>';
                }
                if (!empty($data_kecamatan)) {
                    $active_page .= ' :: <a href="' . site_url('master_peta/daerah/index/' . $data_kecamatan->kode_daerah) . '">' . $data_kecamatan->nm_daerah . '</a>';
                }
                if (!empty($data)) {
                    $active_page .= ' :: ' . $data->nm_daerah;
                }
                
                echo $active_page;
                ?>
                
            </li>

        </ul>
        <!--breadcrumbs end -->
    </div>
</div>