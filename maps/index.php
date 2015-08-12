<?php 
	include "conn.php";  
	
	$q = mysql_query('SELECT MAX(id) as id from `peta`');
	$row = mysql_fetch_assoc($q);
	$batas = $row['id'];
	
	$query = "SELECT * from peta where kategori = 'existing'";
	$data = mysql_query($query);
	$name_file = array();
	$i = 0;
	
	while($rowlist = mysql_fetch_array($data)){
		$name_file[$i] = $rowlist['nama_file'];
		$i++;
	}		
	$stojson = json_encode((array)$name_file);
	
	$queryp = "SELECT * from peta where kategori = 'pemberdayaan'";
	$datap = mysql_query($queryp);
	$name_filep = array();
	$a = 0;
	while($rowlistp = mysql_fetch_array($datap)){
		$name_filep[$a] = $rowlistp['nama_file'];
		$a++;
	}		
	$pemberdayaan = json_encode((array)$name_filep);
	
	$base = "http://ciptakarya.pu.go.id/bangkim/v2/kml/";	
?>		
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="Direkorat Kawasan Pengembangan Pemukiman, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Direktorat Kawasan Pengembangan Pemukiman</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>  
  <script language="javascript"> 
  	var i;
	//var url;
	var batas = "<?php echo $batas; ?>";
	var base = "<?php echo $base; ?>";
	var fromPhp = <?php echo $stojson; ?>;	
	var fromPemberdayaan = <?php echo $pemberdayaan; ?>;	
  </script>
  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
          </div>
          <!--logo start-->
          <a href="index.html" class="logo" >Direkorat Kawasan Pengembangan Pemukiman</a>
          <!--logo end-->
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a href="index.html">
                          <i class="icon-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-laptop"></i>
                          <span>Perkotaan</span>
                      </a>
                      <ul class="sub">
                          <li>
                          	<label class="checkbox-inline">
                            	<input id="existing" value="existing" type="checkbox" onClick="myFunction()">Existing
                            </label>
                          </li>
                          <li>
                          	<label class="checkbox-inline">
                            	<input id="pemberdayaan" value="pemberdayaan" type="checkbox">Pemberdayaan
                            </label>
                          </li>
                          <li>
                          	<label class="checkbox-inline">
                            	<input id="penanganan" value="penanganan" type="checkbox">Penanganan
                            </label>
                          </li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-cogs"></i>
                          <span>Perdesaan</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="javascript:;">Perdesaan Potensial</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-book"></i>
                          <span>Khusus</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="javascript:;">Perbatasan</a></li>
                          <li><a  href="javascript:;">Pulau Kecil Terluar</a></li>
                          <li><a  href="javascript:;">Kawasan Bencana</a></li>
                      </ul>
                  </li>  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-tasks"></i>
                          <span>Pemberdayaan</span>
                      </a>
                      <ul class="sub">
                          <li class="sub-menu">
                              <a  href="boxed_page.html">Perkotaan</a>
                              <ul class="sub">
                                  <li><a  href="javascript:;">P2KP</a></li>
                                  <li><a  href="javascript:;">NUSP2</a></li>
                              </ul>
                          </li>
                           <li class="sub-menu">
                              <a  href="boxed_page.html">Perdesaan</a>
                              <ul class="sub">
                                  <li><a  href="javascript:;">PPIP</a></li>
                                  <li><a  href="javascript:;">PISEW</a></li>
                              </ul>
                          </li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Peta Kawasan Indonesia
                              <span class="tools pull-right">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                          </header>
                          <div class="panel-body">
                              <div id="gmap_basic" class="gmaps"></div>
                          </div>
                      </section>
                  </div>
              </div> 
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 &copy; Direkorat Kawasan Pengembangan Pemukiman.
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/gmaps.js"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
	<script src="js/gmaps-scripts.js" type="text/javascript"></script>
    <script src="js/gmaps-scripts.js"></script>

    <script type="text/javascript"> 
	 $('#existing').click(function() {
		if ($(this).prop('checked')) {
			//checked
			$(document).ajaxStop(function(){
			  window.location.reload();
			});
			$(document).ready(function() {				  
			  GoogleMaps1.init ();
			});	
		}else{
			location.reload();
		}
	 });
	 $('#pemberdayaan').click(function() {
		if ($(this).prop('checked')) {
			//checked
			$(document).ajaxStop(function(){
			  window.location.reload();
			});
			$(document).ready(function() {
			  GoogleMaps2.init ();
			});	
		}
	 }); 
	 
    </script>


  </body>
</html>
