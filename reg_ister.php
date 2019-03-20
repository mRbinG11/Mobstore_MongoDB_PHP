<?php
	require 'vendor/autoload.php';
	/*To insert a document in a collection*/
	$mclient = new MongoDB\Client;
	$msdb = $mclient->mobstore;
	$admincollection = $msdb->admin;
	$n=$_GET['name'];
	$u=$_GET['usr'];
	$p=$_GET['pwd'];
	$countinit=$admincollection->count();
	try
	{	$insertOneResult = $admincollection->insertOne(['name' => $n,'usr' => $u,'pwd'=> $p]);
		$countfin=$admincollection->count();
    	if($countfin>$countinit)
    	{
      		echo '<script type="text/javascript">'; 
	  		echo 'alert("Registered Successfully!");'; 
	  		echo 'window.location.href = "index.php";';
	  		echo '</script>';
		}
	}	
	catch(Exception $e)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Could not Register!");'; 
		echo '</script>';
	}
?>