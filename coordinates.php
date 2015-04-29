	<center>

<?php	
	
	$fm = fopen("matrix.txt", "r"); // Открываем файл в режиме чтения
	$f = file_get_contents("matrix.txt"); 
	
	fclose($fm);
$file = fopen("coordinates.txt","a+");

		
	fwrite ( $file, "gkjsgsl"); 	
	 	fclose ($file);   

?>	
    
    
	<script type="text/javascript">
	
	var ar = [2, 3, 4]
    	
	var arr = [<?php $f; ?>]
	
	alert( arr )
   
	 </script>

	

	<form action="xy.php" method = "post">
  
	X: <input type="number" name="x">
	
	Y: <input type="number" name="y">
   	
	<input type="submit" name="cordinate" value="Отправить кординаты">
	
	</form>	

	
	</center>