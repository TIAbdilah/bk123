<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>FlatLab Frontend | Portfolio</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() . 'assets/public/' ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'assets/public/' ?>css/theme.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'assets/public/' ?>css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo base_url() . 'assets/public/' ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo base_url() . 'assets/public/' ?>assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />

        <link href="<?php echo base_url() . 'assets/public/' ?>css/superfish.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'assets/public/' ?>css/superfish-vertical.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() . 'assets/public/' ?>css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'assets/public/' ?>css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!--header start-->
        <?php $this->load->view('public/tile/header') ?>
        <!--header end-->

        <!--breadcrumbs start-->
        <?php $this->load->view('public/gallery/breadcrumb') ?>
        <!--breadcrumbs end-->

        <!--container start-->
        <div class="container">
            <!--portfolio start-->
            <div class="gallery-container">
                <ul id="filters" class="list-unstyled">
                    <li><a href="#" data-filter="*"> All</a></li>
                    <li><a href="#" data-filter=".rusunawa">Rusunawa</a></li>
                    <li><a href="#" data-filter=".pisew">PISEW</a></li>
                    <li><a href="#" data-filter=".agropolitan">Agropolitan</a></li>
                </ul>
                <div id="gallery" class="col-4">
                    <div class="element rusunawa item view view-tenth" data-zlname="reverse-effect">
                        <img src="<?php echo base_url() . 'assets/public/img/' ?>gallery/rusun_surakarta_2011_1.jpg"  alt="">
                        <div class="mask">
                            <h2></h2>
                            <a data-zl-popup="link2" class="fancybox" rel="group[1]" href="<?php echo base_url() . 'assets/public/img/' ?>gallery/rusun_surakarta_2011_1.jpg">
                                <i class="icon-search"></i>
                            </a>
                        </div>
                    </div>

                    <div class="element rusunawa item view view-tenth" data-zlname="reverse-effect">
                        <img src="<?php echo base_url() . 'assets/public/img/' ?>gallery/rusun_surakarta_2011_2.jpg"  alt="">
                        <div class="mask">
                            <h2></h2>
                            <a data-zl-popup="link2" class="fancybox" rel="group[1]" href="<?php echo base_url() . 'assets/public/img/' ?>gallery/rusun_surakarta_2011_2.jpg">
                                <i class="icon-search"></i>
                            </a>
                        </div>
                    </div>

                    <div class="element rusunawa item view view-tenth" data-zlname="reverse-effect">
                        <img src="<?php echo base_url() . 'assets/public/img/' ?>gallery/rusun_surakarta_2011_3.jpg"  alt="">
                        <div class="mask">
                            <h2></h2>
                            <a data-zl-popup="link2" class="fancybox" rel="group[1]" href="<?php echo base_url() . 'assets/public/img/' ?>gallery/rusun_surakarta_2011_3.jpg">
                                <i class="icon-search"></i>
                            </a>
                        </div>
                    </div>

                    <div class="element rusunawa item view view-tenth" data-zlname="reverse-effect">
                        <img src="<?php echo base_url() . 'assets/public/img/' ?>gallery/rusun_surakarta_2011_4.jpg"  alt="">
                        <div class="mask">
                            <h2></h2>
                            <a data-zl-popup="link2" class="fancybox" rel="group[1]" href="<?php echo base_url() . 'assets/public/img/' ?>gallery/rusun_surakarta_2011_4.jpg">
                                <i class="icon-search"></i>
                            </a>
                        </div>
                    </div>

                    <!--<h3>PISEW</h3>-->                
                    <div class="element pisew item view view-tenth" data-zlname="reverse-effect">
                        <img src="<?php echo base_url() . 'assets/public/img/' ?>gallery/pisew_sinjai1.jpg"  alt="">
                        <div class="mask">
                            <h2></h2>
                            <a data-zl-popup="link2" class="fancybox" rel="group[2]" href="<?php echo base_url() . 'assets/public/img/' ?>gallery/pisew_sinjai1.jpg">
                                <i class="icon-search"></i>
                            </a>
                        </div>
                    </div>

                    <div class="element pisew item view view-tenth" data-zlname="reverse-effect">
                        <img src="<?php echo base_url() . 'assets/public/img/' ?>gallery/pisew_sinjai2.jpg"  alt="">
                        <div class="mask">
                            <h2></h2>
                            <a data-zl-popup="link2" class="fancybox" rel="group[2]" href="<?php echo base_url() . 'assets/public/img/' ?>gallery/pisew_sinjai2.jpg">
                                <i class="icon-search"></i>
                            </a>
                        </div>
                    </div>

                    <div class="element pisew item view view-tenth" data-zlname="reverse-effect">
                        <img src="<?php echo base_url() . 'assets/public/img/' ?>gallery/pisew_sinjai3.jpg"  alt="">
                        <div class="mask">
                            <h2></h2>
                            <a data-zl-popup="link2" class="fancybox" rel="group[2]" href="<?php echo base_url() . 'assets/public/img/' ?>gallery/pisew_sinjai3.jpg">
                                <i class="icon-search"></i>
                            </a>
                        </div>
                    </div>

                    <!--<h3>Agropolitan/Minapolitan</h3>-->             
                    <div class="element agropolitan item view view-tenth" data-zlname="reverse-effect">
                        <img src="<?php echo base_url() . 'assets/public/img/' ?>gallery/agropolitan_payakumbuh1.jpg"  alt="">
                        <div class="mask">
                            <h2></h2>
                            <a data-zl-popup="link2" class="fancybox" rel="group[3]" href="<?php echo base_url() . 'assets/public/img/' ?>gallery/agropolitan_payakumbuh1.jpg">
                                <i class="icon-search"></i>
                            </a>
                        </div>
                    </div>

                    <div class="element agropolitan item view view-tenth" data-zlname="reverse-effect">
                        <img src="<?php echo base_url() . 'assets/public/img/' ?>gallery/agropolitan_payakumbuh2.jpg"  alt="">
                        <div class="mask">
                            <h2></h2>
                            <a data-zl-popup="link2" class="fancybox" rel="group[3]" href="<?php echo base_url() . 'assets/public/img/' ?>gallery/agropolitan_payakumbuh2.jpg">
                                <i class="icon-search"></i>
                            </a>
                        </div>
                    </div>

                    <div class="element agropolitan item view view-tenth" data-zlname="reverse-effect">
                        <img src="<?php echo base_url() . 'assets/public/img/' ?>gallery/minapolitan_jambi1.jpg"  alt="">
                        <div class="mask">
                            <h2></h2>
                            <a data-zl-popup="link2" class="fancybox" rel="group[3]" href="<?php echo base_url() . 'assets/public/img/' ?>gallery/minapolitan_jambi1.jpg">
                                <i class="icon-search"></i>
                            </a>
                        </div>
                    </div>

                    <div class="element agropolitan item view view-tenth" data-zlname="reverse-effect">
                        <img src="<?php echo base_url() . 'assets/public/img/' ?>gallery/minapolitan_jambi2.jpg"  alt="">
                        <div class="mask">
                            <h2></h2>
                            <a data-zl-popup="link2" class="fancybox" rel="group[3]" href="<?php echo base_url() . 'assets/public/img/' ?>gallery/minapolitan_jambi2.jpg">
                                <i class="icon-search"></i>
                            </a>
                        </div>
                    </div>

                    <div class="element agropolitan item view view-tenth" data-zlname="reverse-effect">
                        <img src="<?php echo base_url() . 'assets/public/img/' ?>gallery/minapolitan_jambi3.jpg"  alt="">
                        <div class="mask">
                            <h2></h2>
                            <a data-zl-popup="link2" class="fancybox" rel="group[3]" href="<?php echo base_url() . 'assets/public/img/' ?>gallery/minapolitan_jambi3.jpg">
                                <i class="icon-search"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <!--portfolio end-->
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


        <script src="<?php echo base_url() . 'assets/public/' ?>js/superfish.js"></script>
        <script src="<?php echo base_url() . 'assets/public/' ?>js/jquery.isotope.js"></script>

        <script src="<?php echo base_url() . 'assets/public/' ?>js/jquery.easing.min.js"></script>
        <script src="<?php echo base_url() . 'assets/public/' ?>js/link-hover.js"></script>

        <script src="<?php echo base_url() . 'assets/public/' ?>assets/fancybox/source/jquery.fancybox.pack.js"></script>


        <!--common script for all pages-->
        <script src="<?php echo base_url() . 'assets/public/' ?>js/common-scripts.js"></script>



        <script>


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

            $(function() {
                var $container = $('#gallery');
                $container.isotope({
                    itemSelector: '.item',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                // filter items when filter link is clicked
                $('#filters a').click(function() {
                    var selector = $(this).attr('data-filter');
                    $container.isotope({filter: selector});
                    return false;
                });
            });



        </script>

    </body>
</html>
