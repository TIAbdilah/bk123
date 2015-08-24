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
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/admin/' ?>assets/nestable/jquery.nestable.css" />
        <!--<link href="<?php echo base_url() . 'assets/admin/' ?>assets/advanced-datatable/css/jquery.dataTables.css" rel="stylesheet" />-->
        <link href="<?php echo base_url() . 'assets/admin/' ?>assets/advanced-datatable/css/demo_page.css" rel="stylesheet" />
        <link href="<?php echo base_url() . 'assets/admin/' ?>assets/advanced-datatable/css/demo_table.css" rel="stylesheet" />

        <link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/' ?>css/owl.carousel.css" type="text/css">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() . 'assets/admin/' ?>css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'assets/admin/' ?>css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <section id="container" >
            <!--header start-->
            <?php $this->load->view('admin/tile/header') ?>
            <!--header end-->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <?php $this->load->view('admin/tile/sidebar') ?>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <?php
                    if (!empty($page_content)) {
                        $this->load->view($page_content);
                    }
                    ?>
                </section>
            </section>
            <!--main content end-->
            <!--footer start-->
            <?php $this->load->view('admin/tile/footer') ?>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/bootstrap.min.js"></script>

        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery.sparkline.js" type="text/javascript"></script>

        <script src="<?php echo base_url() . 'assets/admin/' ?>assets/advanced-datatable/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>assets/nestable/jquery.nestable.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/admin/' ?>assets/ckeditor/ckeditor.js"></script>

        <script src="<?php echo base_url() . 'assets/admin/' ?>js/owl.carousel.js" ></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/jquery.customSelect.min.js" ></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/respond.min.js" ></script>

        <script class="include" type="text/javascript" src="<?php echo base_url() . 'assets/admin/' ?>js/jquery.dcjqaccordion.2.7.js"></script>

        <!--common script for all pages-->
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/common-scripts.js"></script>

        <!--script for this page-->
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/sparkline-chart.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/count.js"></script>


        <script src="<?php echo base_url() . 'assets/admin/' ?>js/highchart/highcharts.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/highchart/highcharts-more.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/highchart/modules/data.js"></script>
        <script src="<?php echo base_url() . 'assets/admin/' ?>js/highchart/modules/exporting.js"></script>

        <script type="text/javascript" language="javascript" class="init">

            $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                    navigation: true,
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true,
                    autoPlay: true

                });

                $('#example').dataTable({
                });
                $('#example1').dataTable({
                    "columnDefs": [{
                            "visible": false,
                            "targets": -1
                        }]
                });

                $('#select-all').click(function(event) {
                    $(':checkbox').each(function() {
                        this.checked = true;
                    });
                });
                $('#unselect-all').click(function(event) {
                    $(':checkbox').each(function() {
                        this.checked = false;
                    });
                });
            });

            //custom select box

            $(function() {
                $('select.styled').customSelect();
            });

            $('#inpWilayahKerjaK').hide();

            $('#inpIdRole').change(function() {
                var role = $('#inpIdRole option:selected').text();
                if (role == 'operator') {
                    $('#inpWilayahKerjaK').show();
                } else if (role == 'admin') {
                    $('#inpWilayahKerjaK').hide();
                }

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

                $('#inpUsername').val($('#inpIdRole option:selected').text() + '_' + $('#inpBagian option:selected').val() + '_' + $('#inpWilayahKerjaP option:selected').val());
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

            $('#inpKodeDaerah').change(function() {
                $.ajax({
                    url: "<?php echo base_url(); ?>master_peta/daerah/populateKecamatan",
                    data: {kode_kab: $('#inpKodeDaerah option:selected').val()},
                    type: "POST",
                    dataType: "json",
                    success: function(data) {
                        $("#pilihan").html(data[0]);
                    },
                    error: function(xhr, status, kesalahan) {
                        alert(kesalahan);
                    }
                });
            });

            $('#btnKec').click(function() {
                var txtKec = [];
                var $ck1 = $('input[name="inpKec[]"]:checked');
                $.each($ck1, function() {
                    txtKec.push($(this).val());
                });
                $('#inpKecamatan').val(txtKec.join(","));
            });
        </script>
        <script type="text/javascript">
            $(function() {
                $('#container1').highcharts({
                    data: {
                        table: document.getElementById('datatable1')
                    },
                    chart: {
                        polar: true,
                        type: 'line'
                    },
                    title: {
                        text: 'Tingkat Kekumuhan'
                    },
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
                        pointFormat: '<span style="color:{series.color}">{series.name}: <b>${point.y:,.0f}</b><br/>'
                    }
                });
            });
        </script>
    </body>

</html>
