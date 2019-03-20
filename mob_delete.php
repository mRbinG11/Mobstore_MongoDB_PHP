<?php
	
	require 'vendor/autoload.php';
	/*To delete a document from a collection*/
	$mclient = new MongoDB\Client;
	$msdb = $mclient->mobstore;
	$mobcollection = $msdb->mob;


	$delete_id = $_GET['idtext'];
	$valid = $mobcollection->findOne(
     ['_id' => $delete_id]
    );
    if($valid)
    {
	$delete_result = $mobcollection->deleteOne(['_id' => $delete_id]);
	echo '<script type="text/javascript">'; 
	echo 'alert("Deleted Successfully!");'; 
    echo 'window.location.href = "mob_query.php";';
	echo '</script>';
	}
	else {echo '<script type="text/javascript">'; 
	  echo 'alert("Could not Delete!");'; 
	  echo 'window.location = "main.php";';
	  echo '</script>';}

?>