
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

            <form class="form-signin" action="<?php echo site_url('login/process/add') ?>" method="POST">
                <h2 class="form-signin-heading">Daftar Akun Baru</h2>
                <div class="login-wrap">
                    Role
                    <select name="inpIdRole" class="form-control">                                                
                        <option value="">-Pilih Role-</option>
                        <?php
                        foreach ($SIList_role as $row) {
                            echo "<option value=\"" . $row->id_role . "\">" . $row->nama_role . "</option>";
                        }
                        ?>
                    </select>
                    Wilayah Kerja
                    <select name="inpWilayahKerja" class="form-control">                                                
                        <option value="">-Pilih Kabupaten / Kota-</option>
                        <?php
                        foreach ($SIList_kabupaten as $row) {
                            echo "<option value=\"" . $row->kode_daerah . "\">" . $row->nm_daerah . ' ( ' . $row->kode_daerah . ' )' . "</option>";
                        }
                        ?>
                    </select>
                    Username
                    <input class="form-control" type="text" id="inpUsername" name="inpUsername" placeholder="Username">
                    Email
                    <input class="form-control" type="text" id="inpEmail" name="inpEmail" placeholder="Email">
                    Password
                    <input class="form-control" type="password" id="inpPassword" name="inpPassword" placeholder="Password">
                    <button class="btn btn-lg btn-login btn-block" type="submit">Daftar</button>  
                </div>
            </form>
        </div>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/bootstrap.min.js"></script>


    </body>
</html>
