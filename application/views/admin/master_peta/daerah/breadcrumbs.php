<div class="row">
    <div class="col-lg-12">
        <!--breadcrumbs start -->
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url() ?>"><i class="icon-home"></i> Home</a></li>
            <li><a href="<?php echo site_url('master_peta/daerah') ?>">Daerah</a></li>
            <li class="active">
                <?php
                if ($title_page != null) {
                    echo $title_page.' ( ';
                }
                if (!empty($data_propinsi)) {
                    echo '<a href="' . site_url('master_peta/daerah/index/' . $data_propinsi->kode_daerah) . '">' . $data_propinsi->nm_daerah . '</a>';
                }
                if (!empty($data_kabupaten)) {
                    echo ' :: <a href="' . site_url('master_peta/daerah/index/' . $data_kabupaten->kode_daerah) . '">' . $data_kabupaten->nm_daerah . '</a>';
                }
                if (!empty($data_kecamatan)) {
                    echo ' :: <a href="' . site_url('master_peta/daerah/index/' . $data_kecamatan->kode_daerah) . '">' . $data_kecamatan->nm_daerah . '</a>';
                }
                if (!empty($data)) {
                    echo ' :: ' . $data->nm_daerah . '</a>';
                }
                ?>
                )
            </li>

        </ul>
        <!--breadcrumbs end -->
    </div>
</div>