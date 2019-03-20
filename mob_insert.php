<?php
	
	require 'vendor/autoload.php';
	/*To insert a document in a collection*/
	$mclient = new MongoDB\Client;
	$msdb = $mclient->mobstore;
	$mobcollection = $msdb->mob;
	$countinit=$mobcollection->count();
	$id = $_GET['id'];
	$company = $_GET['company'];
	$model_name = $_GET['model_name'];
	$price = $_GET['price'];
	$stock = $_GET['stock'];
	try
	{	$insertOneResult = $mobcollection->insertOne(
    ['_id' => $id,'company' => $company,'model_name'=> $model_name,'price' => $price,'stock' => $stock]);
    $countfin=$mobcollection->count();
    	if($countfin>$countinit)
    	{	echo '<script type="text/javascript">'; 
	  		echo 'alert("Inserted Successfully!");'; 
	  		echo 'window.location.href = "mob_query.php";';
			echo '</script>';
		}
	}
	catch (Exception $e)
	{	echo '<script type="text/javascript">'; 
			echo 'alert("Could Not Insert because duplicate id!");';
			echo 'window.location.href = "insertmob.php";';
			echo '</script>';
	}
	
?>