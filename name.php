<?php
	
	session_start();
	
    	
	$sbm = $_POST['sbm_data']; 
    	
	$name = $_POST['name_user'];
	
 
   	
	if(isset($sbm))
    	
	{
	 
	    // Если имя не введено
         
	    if(empty($name))
 
        {
           
	     echo "Введите ваше имя!";
 
        }
	 
	// Если имя превышает 10 символов
         
	elseif(strlen($name)>10)
         
	{
            
	     echo "Имя превышает 10 символов!";
  
        }	

	
	
	$_SESSION['user_number'] = 1; 
	
	$str = $name;	
      	
	echo "<center><h2>",$str,", вы успешно зарегистрировались</h2></center>";
	

?>
	
	<br>	
	

<?php
	
	
 
	$file = fopen("name.txt","a+");
  	 
	fwrite ( $file, $str."\n");
  	
	 
	fclose ($file);
         
	 
	$fp = fopen("name.txt", "r"); 

	// Открываем файл в режиме чтения
	 
	$file_array = file("name.txt"); // Считывание файла в массив $file_array
	 
	$result = count($file_array);
	 
	$_SESSION['result'] = $result;
	 
	fclose($fp);
	

	
	if ($result == 2)
	
	{
	 
	     $_SESSION['user_number'] = 2;
	  
	     header ('Location: play.php');
	  
	     exit(); 
	
	}
	
	if($_SESSION['user_number'] == 1)
	
	{
	  
		header ('Location: play.php');
	  
		exit(); 
	
	}
	
	
	}
	

?>