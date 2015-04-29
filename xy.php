<?php

	
	$xx = $_POST['x']; 
	
	$cordinatee = $_POST['cordinate']; 
    	
	$yy = $_POST['y'];

	
	if(isset($cordinatee))
    	
	{
		
	    $file = fopen("coordinates.txt","a+");
  	 	
	    fwrite ( $file, $xx."\n");
		
	    fwrite ( $file, $yy."\n");  

	    fwrite ( $file, "gkjsgsl"); 
	    fclose ($file);    	
	
	

	header ('Location: coordinates.php');
	
	exit(); 
	
	}

?>