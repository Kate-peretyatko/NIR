<?php
	
	session_start();
	
    	
	$sbm = $_POST['sbm_data']; 
    	
	$name = $_POST['name_user'];
	
 
   	
	if(isset($sbm))
    	
	{
	 
	    // ���� ��� �� �������
         
	    if(empty($name))
 
        {
           
	     echo "������� ���� ���!";
 
        }
	 
	// ���� ��� ��������� 10 ��������
         
	elseif(strlen($name)>10)
         
	{
            
	     echo "��� ��������� 10 ��������!";
  
        }	

	
	
	$_SESSION['user_number'] = 1; 
	
	$str = $name;	
      	
	echo "<center><h2>",$str,", �� ������� ������������������</h2></center>";
	

?>
	
	<br>	
	

<?php
	
	
 
	$file = fopen("name.txt","a+");
  	 
	fwrite ( $file, $str."\n");
  	
	 
	fclose ($file);
         
	 
	$fp = fopen("name.txt", "r"); 

	// ��������� ���� � ������ ������
	 
	$file_array = file("name.txt"); // ���������� ����� � ������ $file_array
	 
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