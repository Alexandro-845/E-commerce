<?PHP 

	$hostname='localhost';	
	$username='root';	
	$pass='';		
	$banco='projeto_loja';	
	$db=Mysqli_Connect($hostname, $username, $pass);
	
	Mysqli_Select_db($db, $banco);
	
?>
	