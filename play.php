<?php
    
	session_start();

    
	$result = $_SESSION['result'];
	



	$fp = fopen("name.txt", "r"); // Открываем файл в режиме чтения
	 
	$file_array = file("name.txt"); // Считывание файла в массив $file_array

	$result = count($file_array);
	
	fclose($fp);


    
    
	if($result == 1)
    
	{
	 
	   echo "<center>Вам придется подождать вашего соперника.</center>";
	
   
	}
    
	if($result == 2)
    
	{
    	
	    echo "<center><h1>Игра началась! Открывайте карты и запоминайте их 	расположение.</h1></center>";
	


?>

	

	<center>
	
	<form action="coordinates.php" method="post">
	
	<input type="submit" value="Ok">
	
	</form>
	</center>

<?php	 

    
	
	}

?>