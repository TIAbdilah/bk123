<?php
//ini_set('display_errors',FALSE);
$host="localhost";
$user="root";
$pass=""; //
$db="test";
//$entries=3;

$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);

//$tanggal=date("Y-m-d H:i:s");
//$hari_ini=date("d-m-Y", time()+60*60*5);
//$jam_skrg=date("H:i:s", time()+60*60*5);


if (!$koneksi)
{
	echo "Gagal Koneksi Database MySQL!";
}

?>