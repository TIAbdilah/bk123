<?php
include "conn.php";
    
		$query = "SELECT * from peta where kategori = 'existing'";
		$data = mysql_query($query);
		$name_file = "";
		$i = 0;
		
		while($rowlist = mysql_fetch_array($data)){
			$name_file .= $rowlist['nama_file']."/";
			
		}
		echo $name_file;
		
	
?>