
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
        <link href="<?php echo base_url() . 'assets/admin/' ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'assets/admin/' ?>css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo base_url() . 'assets/admin/' ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() . 'assets/admin/' ?>css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'assets/admin/' ?>css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/html5shiv.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-body">

        <div class="container">

            <form class="form-signin" action="<?php echo site_url('login/process_login') ?>" method="POST">
                <h2 class="form-signin-heading">Masuk</h2>
                <div class="login-wrap">                    
                    <?php
                    if ($this->session->flashdata('message') != ''):echo '<div class="alert alert-block alert-danger fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"></i>
                        </button>
                        ' . $this->session->flashdata('message') .
                        '</div>';
                    endif;
                    ?>
                    <?php
                    if ($this->session->flashdata('message2') != ''):echo '<div class="alert alert-block alert-success fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"></i>
                        </button>
                        ' . $this->session->flashdata('message2') .
                        '</div>';
                    endif;
                    ?>
                    <input type="text" class="form-control" name="inpUsername" placeholder="Nama Akun" required autofocus>
                    <input type="password" class="form-control" name="inpPassword" placeholder="Password" required>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Masuk</button>            
                    <div class="registration">
                        Belum memiliki akun ?
                        <a class="" href="<?php echo site_url('login/sign_up') ?>">
                            Buat Akun
                        </a>
                    </div>

                </div>

                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Lupa password ?</h4>
                            </div>
                            <div class="modal-body">
                                <p>Masukan email Anda untuk mereset password.</p>
                                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                <button class="btn btn-success" type="button">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->

            </form>

        </div>



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
//                $.delay(1000, function() {
//                    alert('test');
//                });
//                   setInterval(function(){
//                       alert('test');
//                   }, 2000);
            });
        </script>

    </body>
</html>
