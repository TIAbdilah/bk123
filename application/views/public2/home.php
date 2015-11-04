<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- SITE TITTLE -->
        <meta charset="utf-8">
        <title>Direkorat Pengembangan Kawasan Permukiman</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="generator" content="HTML Template">

        <!-- CSS STYLE -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/public2/' ?>css/normalize.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/public2/' ?>css/base.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/public2/' ?>css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/public2/' ?>css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/public2/' ?>css/animate.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/public2/' ?>css/fontastic.css">

        <!-- CALL THE COLOR -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/public2/' ?>css/colors/blue.css" id="colors">

        <!-- JAVA SCRIPT -->
        <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/modernizr.js">
        </script>
        <script src="<?php echo base_url() . 'assets/public2/' ?>chart/Chart.js">
        </script>
        <script src="<?php echo base_url() . 'assets/public2/' ?>js/webfont.js">
        </script>
        <script>
            WebFont.load({
                google: {
                    families: ["PT Sans:400,400italic,700,700italic", "Open                  Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "Raleway:200,300,regular,500,600,700,800", "Shadows Into Light:regular", "Josefin Sans:300,300italic,regular,italic,600,600italic,700,700italic"]
                }
            }
            );
        </script>

        <link href="<?php echo base_url() . 'assets/public2/' ?>css/bootstrap.min.css" rel="stylesheet" />
        <script src="<?php echo base_url() . 'assets/public2/' ?>js/jquery.min.js"></script>
        <script src="<?php echo base_url() . 'assets/public2/' ?>js/bootstrap.min.js"></script>
        <link href="<?php echo base_url() . 'assets/public2/' ?>css/jquerysctipttop.css" rel="stylesheet" type="text/css">

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() . 'assets/public2/' ?>images/favicon.ico">
        <!-- APPLE TOUCH ICON -->
        <link rel="apple-touch-icon" href="<?php echo base_url() . 'assets/public2/' ?>img/webclip.png">
    </head>
    <body>
        <!-- GO TOP -->
        <div class="w-hidden-small w-hidden-tiny w-clearfix go-top" data-ix="move-top-btn">
            <a class="w-inline-block button btn-top" href="#top">
                <i class="fa fa-arrow-up">
                </i>
            </a>
        </div>
        <!-- END GO TOP -->

        <!-- START HEADER -->
        <?php $this->load->view('public2/tile/header') ?> 
        <!-- END HEADER -->

        <!-- START BUSINESS SLIDER -->

        <div class="banner" id="top" data-ix="show-top-btn">
            <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active"><img src="<?php echo base_url() . 'assets/public2/' ?>images/1.jpg" style="width:100%; height:420px;" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Slide 1</h1>
                                <p>Aenean a rutrum nulla. Vestibulum a arcu at nisi tristique pretium.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="http://lorempixel.com/1200/400/people" style="width:100%; height:420px;" data-src="" alt="Second    slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Slide 2</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae egestas purus. </p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item"> <img src="http://lorempixel.com/1200/400/abstract" style="width:100%; height:420px;" data-src="" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Slide 3</h1>
                                <p>Donec sit amet mi imperdiet mauris viverra accumsan ut at libero.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> </div>
        </div>
        <!-- START BUSINESS SLIDER -->

        <!-- START SECTION 1 -->    
        <section class="w-section w-clearfix">
            <div class="procces-text-wrapper">
                <div class="w-container">
                </div>
            </div>

            <section class="w-section w-clearfix">   	  
                <div class="procces-wrapper" data-ix="process-effect">
                    <div>
                        <div style="transform: translateX(0px) translateY(40px); transition: transform 400ms ease 0s;" class="procc-ico" data-ix="move-titte-procces">
                            <img src="<?php echo base_url() . 'assets/public2/' ?>images/perkotaan.png" alt="logo">
                        </div>
                        <div style="transform: translateX(0px) translateY(40px); transition: transform 400ms ease 0s;" class="process-title" data-ix="move-titte-procces">
                            <h4 class="h-process">Perkotaan</h4>
                        </div>
                    </div>
                </div>
                <div class="procces-wrapper color-2" data-ix="process-effect">
                    <div class="arrow-proccess"></div>
                    <div>
                        <div style="transform: translateX(0px) translateY(40px); transition: transform 400ms ease 0s;" class="procc-ico" data-ix="move-titte-procces">
                            <img src="<?php echo base_url() . 'assets/public2/' ?>images/perkotaan.png" alt="logo">
                        </div>
                        <div style="transform: translateX(0px) translateY(40px); transition: transform 400ms ease 0s;" class="process-title" data-ix="move-titte-procces">
                            <h4 class="h-process">Perdesaan</h4>
                        </div>
                    </div>
                </div>
                <div class="procces-wrapper color-3" data-ix="process-effect">
                    <div class="arrow-proccess color-2"></div>
                    <div>
                        <div style="transform: translateX(0px) translateY(40px); transition: transform 400ms ease 0s;" class="procc-ico" data-ix="move-titte-procces">
                            <img src="<?php echo base_url() . 'assets/public2/' ?>images/khusus.png" alt="logo">
                        </div>
                        <div style="transform: translateX(0px) translateY(40px); transition: transform 400ms ease 0s;" class="process-title" data-ix="move-titte-procces">
                            <h4 class="h-process">Khusus</h4>
                        </div>
                    </div>
                </div>
                <div class="procces-wrapper color-4" data-ix="process-effect">
                    <div class="arrow-proccess color-3"></div>
                    <div>
                        <div style="transform: translateX(0px) translateY(40px);" class="procc-ico" data-ix="move-titte-procces">
                            <img src="<?php echo base_url() . 'assets/public2/' ?>images/pemberdayaan.png" alt="logo">
                        </div>
                        <div style="transform: translateX(0px) translateY(40px);" class="process-title" data-ix="move-titte-procces">
                            <h4 class="h-process">Pemberdayaan</h4>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SECTION 1 -->

            <!-- START SECTION 2 -->
            <section class="w-section section light-gray">
                <div class="w-container">
                    <div class="w-row">
                        <div class="w-col w-col-7 w-col-stack">
                            <div>
                                <h5>
                                    GRAFIK PER TAHUN KAWASAN KUMUH
                                </h5>  
                                <table style="display: none" id="datagrafik">
                                    <tr><td></td><td>Jumlah Data</td></tr>
                                    <tr><td>2015</td><td>30000</td></tr>
                                    <tr><td>2016</td><td>20000</td></tr>
                                    <tr><td>2017</td><td>10000</td></tr>
                                    <tr><td>2018</td><td>5000</td></tr>
                                    <tr><td>2019</td><td>0</td></tr>
                                </table>
                                <div id="container1" style="width: 100%; margin: 0 auto"></div>
                            </div>
                        </div>         
                        <div class="w-col w-col-5 w-col-stack">
                            <div class="space x1">
                                <a class="w-clearfix w-inline-block button wow flipInX" data-wow-delay="0.3s" href="#">
                                    <div class="btn-txt">
                                        SK PENETEPAN LOKASI PERMUKIMAN KUMUH
                                    </div>
                                </a>
                                <div style="text-decoration:none; overflow:hidden; max-width:100%;">
                                    <div id="canvas-for-google-map" style="height:100%; width:100%;max-width:100%;">
                                        <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=bandung&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="w-col w-col-6">
                                <div class="icobox wow bounceIn" data-wow-delay="0.7s">
                                    <img src="<?php echo base_url() . 'assets/public2/' ?>images/1.png">                         
                                    <h5>
                                        <strong>Jumlah KK = 38.380</strong>
                                    </h5>            
                                </div>
                            </div>
                            <div class="w-col w-col-6">
                                <div class="icobox wow bounceIn" data-wow-delay="0.7s">
                                    <img src="<?php echo base_url() . 'assets/public2/' ?>images/5.png">                   
                                    <h5>
                                        <strong>Luas Kawasan = 38.38.1 (Ha)</strong>
                                    </h5>          
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>        
                </div>
            </section>
            <!-- END SECTION 2 -->

            <!-- START SECTION 6 -->
            <section class="w-section section light-gray">
                <div class="w-container">
                    <div class="w-row">
                        <div class="w-col w-col-6 w-col-stack">
                            <div class="tittle-line">
                                <h5>
                                    Berita Terbaru
                                </h5>
                                <div class="divider-1 small">
                                    <div class="divider-small">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="w-slider carousel-project" data-animation="slide" data-duration="500" data-infinite="1" data-nav-spacing="5">
                                    <div class="w-slider-mask">
                                        <div class="w-slide">
                                            <ul class="w-list-unstyled">
                                                <?php
//                                                print_r($latest_news);
                                                foreach ($latest_news as $news) {
                                                    ?>
                                                    <li class="w-clearfix li-blog" data-ix="show-dt-blog">
                                                        <a class="w-inline-block blog-item" href="#">
                                                            <?php
                                                            if ($news->foto != null || !empty($news->foto)) {
                                                                echo '<img src="' . $news->foto . '" alt="">';
                                                            } else {
                                                                echo '<img src="' . base_url() . 'assets/public2/images/blog4.jpg" alt="blog4.jpg">';
                                                            }
                                                            ?>

                                                            <div class="dt-blog" data-ix="move-dt-blog">
                                                                <div>
                                                                    <?php
                                                                    echo $text['frmt_date']->get_date($news->tanggal) . ''
                                                                    . '&nbsp;'
                                                                    . '' . $text['frmt_date']->get_month($news->tanggal)
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="blog-wrapper">
                                                            <h5 class="portfolio-tittle blog-tittle">
                                                                <a class="blog-link" href="#">
                                                                    <?php echo $news->judul ?>
                                                                </a>
                                                            </h5>
                                                            <p>
                                                                <?php echo substr($news->headline, 0, 100) ?>...&nbsp;
                                                                <a class="link" href="#">
                                                                    See More →
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <?php
                                                }
                                                ?>                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="w-slider-nav w-slider-nav-invert w-round carousel-dots">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-col w-col-6 w-col-stack res-space">
                            <div class="tittle-line">
                                <h5>
                                    Video
                                </h5>
                                <div class="divider-1 small">
                                    <div class="divider-small">
                                    </div>
                                </div>
                                <div>
                                    <div class="w-embed w-video" style="padding-top: 56.20608899297424%;">
                                        <iframe class="embedly-embed" src="https://www.youtube.com/embed/B7orHAWoP5k" scrolling="no" allowfullscreen="" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SECTION 6 -->

            <!-- START SECTION 3 -->
            <?php $this->load->view('public2/tile/other_site') ?>
            <!-- END SECTION 3 -->    

            <!-- START FOOTER -->
            <?php $this->load->view('public2/tile/footer') ?>
            <!-- END FOOTER -->

            <!-- JQUERY SCRIPTS -->
            <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/jquery-1.11.2.min.js"></script>

            <script src="<?php echo base_url() . 'assets/admin/' ?>js/highchart/highcharts.js"></script>
            <script src="<?php echo base_url() . 'assets/admin/' ?>js/highchart/highcharts-more.js"></script>
            <script src="<?php echo base_url() . 'assets/admin/' ?>js/highchart/modules/data.js"></script>
            <script src="<?php echo base_url() . 'assets/admin/' ?>js/highchart/modules/exporting.js"></script>
            <!--[if lte IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.2/jquery.xdomainrequest.min.js">
        </script>
        
        <![endif]-->
            <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/jquery.moutheme.js"></script>
            <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/form.js"></script>
            <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/jquery.mixitup.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/wow.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/affix.js"></script>
            <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/tweecool.js"></script>
            <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/jquery.stellar.js"></script>
            <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/default.js"></script>

            <script type="text/javascript">
            $(function() {
                $('#container1').highcharts({
                    data: {
                        table: document.getElementById('datagrafik')
                    },
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Tingkat Kekumuhan'
                    },
                    colors: [
                        '#FEC928'
                    ],
                    pane: {
                        size: '80%'
                    },
                    xAxis: {
                        tickmarkPlacement: 'on',
                        lineWidth: 0
                    },
                    yAxis: {
                        gridLineInterpolation: 'polygon',
                        lineWidth: 0,
                        min: 0
                    },
                    tooltip: {
                        shared: true,
                        pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.2f}</b><br/>'
                    }
                });
            });
            </script>
            <!--[if lte IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js">
        </script>
        <![endif]-->

    </body>
</html>