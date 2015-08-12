<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/admin/' ?>img/favicon.ico">

        <title>Direktorat Pengembangan Permukiman</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() . 'assets/public/' ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'assets/public/' ?>css/theme.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'assets/public/' ?>css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo base_url() . 'assets/public/' ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/public/' ?>css/flexslider.css"/>
        <link href="<?php echo base_url() . 'assets/public/' ?>assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
        <link href="<?php echo base_url() . 'assets/public/' ?>assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />

        <link rel="stylesheet" href="<?php echo base_url() . 'assets/public/' ?>assets/revolution_slider/css/rs-style.css" media="screen">
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/public/' ?>assets/revolution_slider/rs-plugin/css/settings.css" media="screen">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() . 'assets/public/' ?>css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'assets/public/' ?>css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="<?php echo base_url() . 'assets/public/' ?>js/html5shiv.js"></script>
          <script src="<?php echo base_url() . 'assets/public/' ?>js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!--header start-->
        <?php $this->load->view('public/tile/header') ?>
        <!--header end-->

        <!-- revolution slider start -->
        <div class="fullwidthbanner-container main-slider">
            <div class="fullwidthabnner">
                <ul id="revolutionul" style="display:none;">
                    <!--1st slide-->                     
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="">
                        <img src="http://localhost/mybangkim/assets/public/img/gallery/minapolitan_jambi2.jpg" width="60%" alt="Image 1">
                        <div class="caption lfr slide_title"
                             data-x="670"
                             data-y="120"
                             data-speed="400"
                             data-start="1000"
                             data-easing="easeOutExpo">
                            Dokumen referensi
                        </div>
                        <div class="caption lfr slide_desc"
                             data-x="670"
                             data-y="260"
                             data-speed="400"
                             data-start="2500"
                             data-easing="easeOutExpo">
                            Undang-undang, Peraturan Pemerintah, <br>
                            Peraturan / Keputusan Presiden, dan Peraturan Menteri
                        </div>
                        <a class="caption lfr btn yellow slide_btn" href="#" target="_blank"
                           data-x="670"
                           data-y="400"
                           data-speed="400"
                           data-start="3500"
                           data-easing="easeOutExpo">
                            Lihat Dokumen
                        </a>
                    </li>
                    
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="">
                        <img src="http://localhost/mybangkim/assets/public/img/gallery/minapolitan_jambi1.jpg" width="60%" alt="Image 1">
                        <div class="caption lfr slide_title"
                             data-x="670"
                             data-y="120"
                             data-speed="400"
                             data-start="1000"
                             data-easing="easeOutExpo">
                            Peta Permukiman
                        </div>
                        <div class="caption lfr slide_desc"
                             data-x="670"
                             data-y="260"
                             data-speed="400"
                             data-start="2500"
                             data-easing="easeOutExpo">
                            Peta persebaran permukiman di seluruh indonsia. <br>
                            Terdiri dari Perkotaan, Pedesaan, Batas terluar dan lain-lain.
                        </div>
                        <a class="caption lfr btn yellow slide_btn" href="#" target="_blank"
                           data-x="670"
                           data-y="400"
                           data-speed="400"
                           data-start="3500"
                           data-easing="easeOutExpo">
                            Lihat Peta
                        </a>
                    </li>

                </ul>
                <!--<div class="tp-bannertimer tp-top"></div>-->
            </div>
        </div>
        <!-- revolution slider end -->

        <div class="container">
            <div class="row">
                <!--feature start-->
                <div class="text-center feature-head">
                    <h1>Selamat Datang di Direktorat Pengembangan Permukiman</h1>
                    <p>Mewujudkan Permukiman Layak Huni dan Berkelanjutan</p>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <section>
                        <div class="f-box">
                            <i class=" icon-file"></i>
                            <h2>Dokumen Referensi</h2>
                        </div>
                        <p class="f-text">Undang-undang, Peraturan Pemerintah, Peraturan / Keputusan Presiden, dan Peraturan Menteri</p>
                    </section>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <section>
                        <div class="f-box active">
                            <i class=" icon-globe"></i>
                            <h2>Peta Permukiman</h2>
                        </div>
                        <p class="f-text">Peta persebaran permukiman di seluruh indonsia. Terdiri dari Perkotaan, Pedesaan, Batas terluar dan lain-lain.</p>
                    </section>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <section>
                        <div class="f-box">
                            <i class="icon-book"></i>
                            <h2>Ebook</h2>
                        </div>
                        <p class="f-text">Tersedia beberapa ebook yang bisa di download secaa gratis</p>
                    </section>
                </div>
                <!--feature end-->
            </div>
        </div>

        <!--property start-->
        <div class="property gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 text-center">
                        <img src="<?php echo base_url() . 'assets/public/' ?>img/Sayembara Karya Tulis - Kumuh.jpg" alt="">
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <h1>Sayembara Karya Tulis Inovasi</h1>
                        <p>Ikutilah sayembara karya tulis inovasi bertemakan "Penanganan Permukiman Kumuh". Batas pendaftaran tanggal 25 Januari 2015.</p>
                        <a href="javascript:;" class="btn btn-purchase">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
        <!--property end-->

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <!--tab start-->
                    <section class="panel tab">
                        <header class="panel-heading tab-bg-dark-navy-blue">
                            <ul class="nav nav-tabs nav-justified ">
                                <li class="active">
                                    <a data-toggle="tab" href="#news">
                                        News
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#aaa">
                                        Agenda
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content tasi-tab">
                                <div id="news" class="tab-pane active">
                                    <?php
                                    foreach ($latest_news as $lt_nws) {
                                        ?>
                                        <article class="media col-lg-12">
                                            <a class="pull-left thumb p-thumb">
                                                <img src="img/product1.jpg" alt="">
                                            </a>
                                            <div class="media-body">
                                                <a href="#" class=" p-head"><?php echo $lt_nws->judul ?></a>
                                                <p><?php echo substr($lt_nws->headline, 0, 100) . '...' ?></p>
                                            </div>
                                        </article>
                                        <?php
                                    }
                                    ?>

                                </div>
                                <div id="aaa" class="tab-pane active">


                                </div>
                            </div>
                        </div>
                    </section>
                    <!--tab end-->
                </div>
                <div class="col-lg-6">
                    <!--testimonial start-->
                    <div class="about-testimonial boxed-style about-flexslider ">
                        <section class="slider">
                            <div class="flexslider">
                                <ul class="slides about-flex-slides">
                                    <li>
                                        <div class="about-testimonial-image ">
                                            <img alt="" src="img/testimonial-img-1.jpg">
                                        </div>
                                        <a class="about-testimonial-author" href="#">Ericson Reagan</a>
                                        <span class="about-testimonial-company">ABC Realestate LLC</span>
                                        <div class="about-testimonial-content">
                                            <p class="about-testimonial-quote">

                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-testimonial-image ">
                                            <img alt="" src="img/avatar2.jpg">
                                        </div>
                                        <a class="about-testimonial-author" href="#">Jonathan Smith</a>
                                        <span class="about-testimonial-company">DEF LLC</span>
                                        <div class="about-testimonial-content">
                                            <p class="about-testimonial-quote">

                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <!--testimonial end-->
                </div>
            </div>


            <!--recent work start-->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="r-work">WEB LINKS</h2>
                    <ul class="bxslider">
                        <li>
                            <section>
                                <div class="f-box">
                                    <img class="img-thumbnail" style="margin: auto; width: 140px; height: 140px;" 
                                         src="<?php echo base_url() . 'assets/public/' ?>img/site/site_pu_net.png" alt="" />                            
                                    <a href="http://www.pu.go.id/"><h2>PU-Net</h2> </a>                                                                       
                                </div>
                                <p class="f-text">Kementerian Pekerjaan Umum</p>
                            </section>
                        </li>
                        <li>
                            <section>
                                <div class="f-box">
                                    <img class="img-thumbnail" style="margin: auto; width: 140px; height: 140px;" 
                                         src="<?php echo base_url() . 'assets/public/' ?>img/site/site_ciptakarya.png" alt="" />                            
                                    <a href="http://www.ciptakarya.pu.go.id/"><h2>Ditjen Cipta Karya</h2></a>                                    
                                </div>                                
                                <p class="f-text">Direktorat Jenderal Cipta Karya.</p>
                            </section>
                        </li>
                        <li>
                            <section>
                                <div class="f-box">
                                    <img class="img-thumbnail" style="margin: auto; width: 140px; height: 140px;" 
                                         src="<?php echo base_url() . 'assets/public/' ?>img/site/site_sppip_rpkpp.png" alt="" />                            
                                    <a href="http://www.ciptakarya.pu.go.id/bangkim/sppip"><h2>SPPIP & RPKPP</h2></a>
                                </div>
                                <p class="f-text">Penyusunan SPPIP & RPKPP.</p>
                            </section>
                        </li>
                        <li>
                            <section>
                                <div class="f-box">
                                    <img class="img-thumbnail" style="margin: auto; width: 140px; height: 140px;" 
                                         src="<?php echo base_url() . 'assets/public/' ?>img/site/site_ppip.png" alt="" />                            
                                    <a href="http://www.pu-ppip.org/"><h2>PPIP</h2></a>
                                </div>
                                <p class="f-text">PPIP bertujuan menciptakan dan meningkatkan kualitas kehidupan masyarakat, baik secara individu maupun kelompok.</p>
                            </section>
                        </li>
                        <li>
                            <section>
                                <div class="f-box">
                                    <img class="img-thumbnail" style="margin: auto; width: 140px; height: 140px;" 
                                         src="<?php echo base_url() . 'assets/public/' ?>img/site/site_rispnpm.png" alt="" />                            
                                    <a href="http://www.rispnpm.org/"><h2>RIS PNPM Mandiri</h2></a>
                                </div>                                
                                <p class="f-text">Merupakan program berbasis pemberdayaan dalam pembangunan infrastruktur desa.</p>
                            </section>
                        </li>
                        <li>
                            <section>
                                <div class="f-box">
                                    <img class="img-thumbnail" style="margin: auto; width: 140px; height: 140px;" 
                                         src="<?php echo base_url() . 'assets/public/' ?>img/site/site_pisew.png" alt="" />                            
                                    <a href="http://www.ciptakarya.pu.go.id/pisew"><h2>PISEW</h2></a>
                                </div>                                
                                <p class="f-text">Pengembangan Infrastruktur Sosial Ekonomi Wilayah (Regional Infrastructure for Social and Economic Development/RISE).</p>
                            </section>
                        </li>
                        <li>
                            <section>
                                <div class="f-box">
                                    <img class="img-thumbnail" style="margin: auto; width: 140px; height: 140px;" 
                                         src="<?php echo base_url() . 'assets/public/' ?>img/site/site_miskot.png" alt="" />                            
                                    <a href="http://www.ciptakarya.pu.go.id/bangkim/miskot"><h2>Database Miskot</h2></a>
                                </div>                                
                                <p class="f-text">Database Masyarakat Miskin Perkotaan ini adalah sistem penyimpanan data kemiskinan bersumber dari PPLS 2011 & Podes 2011.</p>
                            </section>
                        </li>
                    </ul>
                </div>
            </div>
            <!--recent work end-->

        </div>



        <!--container end-->

        <!--footer start-->
        <?php $this->load->view('public/tile/footer') ?>
        <!--footer end-->

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url() . 'assets/public/' ?>js/jquery.js"></script>
        <script src="<?php echo base_url() . 'assets/public/' ?>js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo base_url() . 'assets/public/' ?>js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/public/' ?>js/hover-dropdown.js"></script>
        <script defer src="<?php echo base_url() . 'assets/public/' ?>js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/public/' ?>assets/bxslider/jquery.bxslider.js"></script>

        <script type="text/javascript" src="<?php echo base_url() . 'assets/public/' ?>js/jquery.parallax-1.1.3.js"></script>

        <script src="<?php echo base_url() . 'assets/public/' ?>js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url() . 'assets/public/' ?>js/link-hover.js"></script>

        <script src="<?php echo base_url() . 'assets/public/' ?>assets/fancybox/source/jquery.fancybox.pack.js"></script>

        <script type="text/javascript" src="<?php echo base_url() . 'assets/public/' ?>assets/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/public/' ?>assets/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!--common script for all pages-->
        <script src="<?php echo base_url() . 'assets/public/' ?>js/common-scripts.js"></script>

        <script src="<?php echo base_url() . 'assets/public/' ?>js/revulation-slide.js"></script>


        <script>

            RevSlide.initRevolutionSlider();

            $(window).load(function() {
                $('[data-zlname = reverse-effect]').mateHover({
                    position: 'y-reverse',
                    overlayStyle: 'rolling',
                    overlayBg: '#fff',
                    overlayOpacity: 0.7,
                    overlayEasing: 'easeOutCirc',
                    rollingPosition: 'top',
                    popupEasing: 'easeOutBack',
                    popup2Easing: 'easeOutBack'
                });
            });

            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider) {
                        $('body').removeClass('loading');
                    }
                });
            });

            //    fancybox
            jQuery(".fancybox").fancybox();



        </script>

    </body>
</html>
