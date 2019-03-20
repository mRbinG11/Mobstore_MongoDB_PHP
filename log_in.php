<?php
	$u=$_GET['usr'];
	$p=$_GET['pwd'];
	require 'vendor/autoload.php';
	$mclient = new MongoDB\Client;
	$msdb = $mclient->mobstore;
	$admincollection = $msdb->admin;
	$valid = $admincollection->findOne(['$and' =>[['usr' => $u],['pwd' => $p]]]);
	if($valid)
	{
		echo '<script type="text/javascript">'; 
    	echo 'window.location.href = "main.php";';
		echo '</script>';
	}
	else
	{
	  echo '<script type="text/javascript">'; 
	  echo 'alert("Invalid Username or Password!");'; 
	  echo 'window.location = "index.php";';
	  echo '</script>';
	}
	
?>