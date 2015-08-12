<?php $this->load->view('public/berita_agenda/berita/breadcrumb') ?>
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <section class="panel gray-bg">
                <div class="panel-body">
                    <h1>Berita</h1>
                    <?php
                    foreach ($list_data as $data) {
                        ?>
                        <article class="media">
                            <a class="pull-left thumb p-thumb">
                                <img src="<?php echo $data->foto ?>" alt="">
                            </a>
                            <div class="media-body">
                                <a href="<?php echo site_url('berita/view/' . $data->id_berita) ?>" class=" p-head"><?php echo $data->judul ?></a> 
                                <p><?php echo $format_date->format_date_ldfy($data->tanggal) . ' ( ' . $data->nama_kategori . ' )' ?></p>
                                <p><?php echo substr($data->isi, 0, 250) . '...' ?></p>
                                <p class="pull-right"><a href="<?php echo site_url('berita/view/' . $data->id_berita) ?>" class=" p-head">more</a></p>
                            </div>
                        </article>
                        <?php
                    }
                    ?>
                    <div class="text-center">
                        <?php echo $page_link ?>
                    </div>
                </div>
            </section>
        </div>
        <?php $this->load->view('public/content/sidebar') ?>
    </div>
</div>