<?php
    
	session_start();

    
	$result = $_SESSION['result'];
	



	$fp = fopen("name.txt", "r"); // ��������� ���� � ������ ������
	 
	$file_array = file("name.txt"); // ���������� ����� � ������ $file_array

	$result = count($file_array);
	
	fclose($fp);


    
    
	if($result == 1)
    
	{
	 
	   echo "<center>��� �������� ��������� ������ ���������.</center>";
	
   
	}
    
	if($result == 2)
    
	{
    	
	    echo "<center><h1>���� ��������! ���������� ����� � ����������� �� 	������������.</h1></center>";
	


?>

	

	<center>
	
	<form action="coordinates.php" method="post">
	
	<input type="submit" value="Ok">
	
	</form>
	</center>

<?php	 

    
	
	}

?>