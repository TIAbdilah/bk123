<?php $this->load->view('public/berita_agenda/berita/breadcrumb') ?>
<div class="container">
    <div class="row-fluid">
        <div class="col-lg-9">
            <div class="blog-item">
                <div class="row">
                    <div class="col-lg-2 col-sm-2">
                        <div class="date-wrap">
                            <span class="date"><?php echo $text['frmt_date']->get_date($data->tanggal)?></span>
                            <span class="month"><?php echo $text['frmt_date']->get_month($data->tanggal)?></span>
                        </div>
                    </div>
                    <div class="col-lg-10 col-sm-10">
                        <div class="blog-img">
                            <img src="<?php echo $data->foto?>" alt=""/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-sm-2 text-right">
                        <div class="author">
                            By <a href="#"><?php echo $data->pengirim?></a>
                        </div>
                        <ul class="list-unstyled">
                            <li><a href="javascript:;"><em><?php echo $data->nama_kategori?></em></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-10 col-sm-10">
                        <h1><a href="#"><?php echo $data->judul?></a></h1>
                        <?php echo $data->isi?>
                    </div>
                </div>
            </div>

        </div>
        <?php $this->load->view('public/content/sidebar') ?>
    </div>
</div>