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
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        <!-- APPLE TOUCH ICON -->
        <link rel="apple-touch-icon" href="img/webclip.png">
    </head>
    <body>
        <!-- GO TOP -->
        <div class="w-hidden-small w-hidden-tiny w-clearfix go-top" data-ix="move-top-btn">
            <a class="w-inline-block button btn-top" href="#top">
                <i class="fa fa-arrow-up"></i>
            </a>
        </div>
        <!-- END GO TOP -->

        <!-- START HEADER -->               

        <?php $this->load->view('public2/tile/header') ?> 

        <!-- END HEADER -->

        <?php
        if (!empty($page)) {
            $this->load->view($page);
        }
        ?>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.2/jquery.xdomainrequest.min.js"></script>
    
    <![endif]-->
        <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/jquery.moutheme.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/form.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/jquery.mixitup.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/affix.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/tweecool.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/jquery.stellar.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/public2/' ?>js/default.js"></script>

        <!--[if lte IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script>
    <![endif]-->

    </body>
</html>