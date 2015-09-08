<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>Direktorat Pengembangan Permukiman</title>

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
                <div id="gallery" class="col-4">
                    <?php
                    foreach ($data_doc as $doc) {
                        echo '<div class="element design development item view view-tenth" data-zlname="reverse-effect">
                        <img src="' . base_url() . 'assets/admin/doc/thumb/' . $doc->thumb . '" width="140px" height="190px" alt="' . $doc->nm_doc . '">
                        <div class="mask">
                            <h2>Buku Panduan Quick Count Identifikasi Kawasan Permukiman Kumuh</h2>
                            <a data-zl-popup="link2" class="fancybox" rel="group[1]" target="_blank" href="' . base_url() . 'assets/admin/doc/' . $doc->nm_doc . '">
                                <i class="icon-download"></i>
                            </a>
                        </div>
                    </div>';
                    }
                    ?>
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
