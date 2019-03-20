<?php
	
	require 'vendor/autoload.php';
	/*To delete a document from a collection*/
	$mclient = new MongoDB\Client;
	$msdb = $mclient->mobstore;
	$mobcollection = $msdb->mob;

	$id = file_get_contents("file1.txt");
	$valid = $mobcollection->findOne(['_id' => $id]);

	if($valid)
	{
	$price = $_POST['price'];
	$stock = $_POST['stock'];
	if($price!="")
		$update_result1 = $mobcollection->updateOne(['_id' => $id],['$set' =>['price' =>$price]]);
	if($stock!="")
		$update_result2 = $mobcollection->updateOne(['_id' => $id],['$set' =>['stock' =>$stock]]);
	echo '<script type="text/javascript">'; 
	echo 'alert("Updated Successfully!");'; 
    echo 'window.location.href = "mob_query.php";';
	echo '</script>';
	}
	else {echo '<script type="text/javascript">'; 
	  echo 'alert("Could not Update!");'; 
	  echo 'window.location = "main.php";';
	  echo '</script>';}
?>