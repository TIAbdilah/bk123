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
<!--        <div class="fullwidthbanner-container main-slider">
            <div class="fullwidthabnner">
                <ul id="revolutionul" style="display:none;">
                     1st slide 
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="">
                        <div class="caption lfl slide_item_left"
                             data-x="10"
                             data-y="70"
                             data-speed="400"
                             data-start="1500"
                             data-easing="easeOutBack">
                            <img src="img/banner/ban2.png" alt="Image 1">
                        </div>
                        <div class="caption lfr slide_title"
                             data-x="670"
                             data-y="120"
                             data-speed="400"
                             data-start="1000"
                             data-easing="easeOutExpo">
                            Clean & Creative
                        </div>

                        <div class="caption lfr slide_subtitle dark-text"
                             data-x="670"
                             data-y="190"
                             data-speed="400"
                             data-start="2000"
                             data-easing="easeOutExpo">
                            A Responsive Frontend Template
                        </div>
                        <div class="caption lfr slide_desc"
                             data-x="670"
                             data-y="260"
                             data-speed="400"
                             data-start="2500"
                             data-easing="easeOutExpo">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br>
                            accusantium doloremque laudantium, totam rem aperiam,<br>
                            eaque ipsa quae ablic jiener.
                        </div>
                        <a class="caption lfr btn yellow slide_btn" href="http://thevectorlab.net/flatlab" target="_blank"
                           data-x="670"
                           data-y="400"
                           data-speed="400"
                           data-start="3500"
                           data-easing="easeOutExpo">
                            Watch Dashboard
                        </a>

                    </li>

                     2nd slide  
                    <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="">
                         THE MAIN IMAGE IN THE FIRST SLIDE 
                        <img src="img/banner/banner_bg.jpg" alt="">
                        <div class="caption lft slide_title"
                             data-x="10"
                             data-y="125"
                             data-speed="400"
                             data-start="1500"
                             data-easing="easeOutExpo">
                            YAHOOOOO. TWO IN ONE
                        </div>
                        <div class="caption lft slide_subtitle dark-text"
                             data-x="10"
                             data-y="180"
                             data-speed="400"
                             data-start="2000"
                             data-easing="easeOutExpo">
                            Admin & Fronend in a single bundle
                        </div>
                        <div class="caption lft slide_desc dark-text"
                             data-x="10"
                             data-y="240"
                             data-speed="400"
                             data-start="2500"
                             data-easing="easeOutExpo">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br>
                            accusantium doloremque laudantium, totam rem aperiam,<br>
                            eaque ipsa quae ablic jiener.
                        </div>
                        <a class="caption lft slide_btn btn red slide_item_left" href="#" target="_blank"
                           data-x="10"
                           data-y="360"
                           data-speed="400"
                           data-start="3000"
                           data-easing="easeOutExpo">
                            Purchase Now
                        </a>
                        <div class="caption lft start"
                             data-x="640"
                             data-y="55"
                             data-speed="400"
                             data-start="2000"
                             data-easing="easeOutBack"  >
                            <img src="img/banner/man.png" alt="man">
                        </div>
                        <div class="caption lft slide_item_right"
                             data-x="330"
                             data-y="20"
                             data-speed="500"
                             data-start="5000"
                             data-easing="easeOutBack">
                            <img src="img/banner/test_man.png" id="rev-hint2" alt="txt img">
                        </div>

                    </li>

                     3rd slide  
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb="">
                        <img src="img/banner/red-bg.jpg" alt="">
                        <div class="caption lfl slide_item_right"
                             data-x="10"
                             data-y="105"
                             data-speed="1200"
                             data-start="1500"
                             data-easing="easeOutBack">
                            <img src="img/banner/imac.png" alt="Image 1">
                        </div>
                        <div class="caption lfl slide_item_right"
                             data-x="25"
                             data-y="345"
                             data-speed="1200"
                             data-start="2000"
                             data-easing="easeOutBack">
                            <img src="img/banner/tab.png" alt="Image 1">
                        </div>
                        <div class="caption lfl slide_item_right"
                             data-x="200"
                             data-y="330"
                             data-speed="1200"
                             data-start="2500"
                             data-easing="easeOutBack">
                            <img src="img/banner/mobile.png" alt="Image 1">
                        </div>
                        <div class="caption lfl slide_item_right"
                             data-x="250"
                             data-y="230"
                             data-speed="1200"
                             data-start="3000"
                             data-easing="easeOutBack">
                            <img src="img/banner/laptop.png" alt="Image 1">
                        </div>
                        <div class="caption lfl slide_item_right"
                             data-x="165"
                             data-y="30"
                             data-speed="500"
                             data-start="5000"
                             data-easing="easeOutBack">
                            <img src="img/banner/text_imac.png" id="rev-hint1" alt="Image 1">
                        </div>

                        <div class="caption lfr slide_title slide_item_left yellow-txt"
                             data-x="670"
                             data-y="145"
                             data-speed="400"
                             data-start="3500"
                             data-easing="easeOutExpo">
                            Full Responsive
                        </div>
                        <div class="caption lfr slide_subtitle slide_item_left"
                             data-x="670"
                             data-y="200"
                             data-speed="400"
                             data-start="4000"
                             data-easing="easeOutExpo">
                            And Awesome Flat Design
                        </div>
                        <div class="caption lfr slide_desc slide_item_left"
                             data-x="670"
                             data-y="280"
                             data-speed="400"
                             data-start="4500"
                             data-easing="easeOutExpo">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br>
                            accusantium doloremque laudantium, totam rem aperiam,<br>
                            eaque ipsa quae ablic jiener.
                        </div>


                    </li>

                </ul>
                <div class="tp-bannertimer tp-top"></div>
            </div>
        </div>-->
        <!-- revolution slider end -->

        <!--container start-->
        <div class="container">
            <div class="row">
                <!--feature start-->
                <div class="text-center feature-head">
                    <h1>Selamat Datang di Direktorat Pengembangan Permukiman</h1>
                    <p>Mewujudkan Permukiman Layak Huni dan Berkelanjutan</p>
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
                        <h1>flat & modern trend design</h1>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener. natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener. natus error sit voluptatem accusantiu.</p>
                        <a href="javascript:;" class="btn btn-purchase">Purchase now</a>
                    </div>
                </div>
            </div>
        </div>
        <!--property end-->

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
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
                                    <a data-toggle="tab" href="#events">
                                        Events
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content tasi-tab">
                                <div id="news" class="tab-pane active">
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                        ?>
                                        <article class="media col-lg-4">
                                            <a class="pull-left thumb p-thumb">
                                                <img src="img/product1.jpg" alt="">
                                            </a>
                                            <div class="media-body">
                                                <a href="#" class=" p-head">News Tittle goes here</a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </article>
                                        <?php
                                    }
                                    ?>

                                </div>
                                <div id="events" class="tab-pane">
                                    <?php
                                    for ($i = 0; $i < 6; $i++) {
                                        ?>
                                         <article class="media col-lg-4">
                                        <a class="pull-left thumb p-thumb">
                                            <!--image goes here-->
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="cmt-head">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                            <p> <i class="icon-time"></i> 1 hours ago</p>
                                        </div>
                                    </article>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--tab end-->
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
