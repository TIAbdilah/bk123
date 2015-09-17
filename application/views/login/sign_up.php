
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

            <form class="form-signin" style="max-width: 600px" action="<?php echo site_url('master_peta/daerah/populateKabkota') ?>" method="POST">
                <h2 class="form-signin-heading">Daftar Akun Baru</h2>
                <div class="login-wrap">
                    <div class="col-lg-6">
                        <input class="form-control" type="text" id="inpNama" name="inpNama" placeholder="Nama" required>
                        <input class="form-control" type="text" id="inpNoTlp" name="inpNoTlp" placeholder="No Tlp" required>
                        <input class="form-control" type="text" id="inpEmail" name="inpEmail" placeholder="Email" required>
                        <input class="form-control" type="password" id="inpPassword" name="inpPassword" placeholder="Password" required>
                        <input class="form-control" type="password" id="inpPassword" name="inpKonfirmPassword" placeholder="Konfirmasi Password" required>
                    </div>
                    <div class="col-lg-6">
                        <select id="inpModul" name="inpModul" class="form-control" required>                                                
                            <option value="">-Pilih Modul-</option>
                            <?php
                            foreach ($SIList_modul as $row) {
                                echo "<option value=\"" . $row->list_item . "\">" . $row->list_item . "</option>";
                            }
                            ?>
                        </select>
                        <input class="form-control" type="text" id="inpUsername" name="inpUsername" placeholder="Username" readonly>                    
                        <div id="bag_perkotaan">
                            <select id="inpIdRole" name="inpIdRole" class="form-control">                                                
                                <option value="">-Pilih Kategori Pengguna-</option>
                                <?php
                                foreach ($SIList_role as $row) {
                                    if ($row->tingkat > 1) {
                                        echo "<option value=\"" . $row->id_role . "\">" . $row->nama_role . "</option>";
                                    }
                                }
                                ?>
                            </select>                       
                            <select id="inpBagian" name="inpBagian" class="form-control">                                                
                                <option value="">-Pilih Penanggung Jawab Data-</option>
                                <option value="eksisting">Data Eksisting</option>
                                <option value="perencanaan">Data Perencanaan</option>
                                <option value="penanganan">Data Penanganan dan Pengendalian</option>
                            </select>
                            <select id="inpWilayahKerjaP" name="kode_propinsi" class="form-control">                                                
                                <option value="">-Pilih Propinsi-</option>
                                <?php
                                foreach ($SIList_propinsi as $row) {
                                    echo "<option value=\"" . $row->kode_daerah . "\">" . $row->nm_daerah . ' ( ' . $row->kode_daerah . ' )' . "</option>";
                                }
                                ?>
                            </select>
                            <select id="inpWilayahKerjaK" name="inpWilayahKerjaK" class="form-control">                                                
                                <option value="">-Pilih Kabupaten / Kota-</option>
                                <?php
                                foreach ($SIList_kabupaten as $row) {
                                    echo "<option value=\"" . $row->kode_daerah . "\">" . $row->nm_daerah . ' ( ' . $row->kode_daerah . ' )' . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div id="bag_perdesaan" class="col-lg-6">
                        <input type="text" class="form-control"/>
                    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Daftar</button>  
                </div>
            </form>
        </div>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/bootstrap.min.js"></script>

        <script type="text/javascript" language="javascript">
            $(document).ready(function() {
                var usr = "";
                $('#inpWilayahKerjaK').hide();
                $('#bag_perdesaan').hide();
                
                $('#inpModul').change(function(){
                   var mdl = $('#inpModul option:selected').text();
                   if(mdl == 'Perkotaan'){
                       $('#bag_perdesaan').hide();
                       $('#bag_perkotaan').show();
                   } else if(mdl == 'Perdesaan'){
                       $('#bag_perdesaan').show();
                       $('#bag_perkotaan').hide();
                   }
                });

                $('#inpIdRole').change(function() {
                    var role = $('#inpIdRole option:selected').text();
                    if (role == 'operator') {
                        $('#inpWilayahKerjaK').show();
                    } else if (role == 'admin') {
                        $('#inpWilayahKerjaK').hide();
                    }
                    $('#inpUsername').val(usr + $('#inpIdRole option:selected').text());

                });

                $('#inpBagian').change(function() {
                    $('#inpUsername').val($('#inpIdRole option:selected').text() + '_' + $('#inpBagian option:selected').val());
                });

                $('#inpWilayahKerjaP').change(function() {
                    $('#inpUsername').val($('#inpIdRole option:selected').text() + '_' + $('#inpBagian option:selected').val() + '_' + $('#inpWilayahKerjaP option:selected').val());
                });

                $('#inpWilayahKerjaK').change(function() {
                    $('#inpUsername').val($('#inpIdRole option:selected').text() + '_' + $('#inpBagian option:selected').val() + '_' + $('#inpWilayahKerjaK option:selected').val());
                });

                $("#inpWilayahKerjaP").change(function() {
                    $.ajax({
                        url: "<?php echo base_url(); ?>login/populateKabKota",
                        data: {kode_propinsi: $('#inpWilayahKerjaP option:selected').val()},
                        type: "POST",
                        dataType: "json",
                        success: function(data) {
                            $("#inpWilayahKerjaK").html(data[0]);
                        },
                        error: function(xhr, status, kesalahan) {
                            alert(kesalahan);
                        }
                    });
                });
            });
        </script>
    </body>
</html>
