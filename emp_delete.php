	<?php
	require 'vendor/autoload.php';
	/*To delete a document from the collection*/
	$mclient = new MongoDB\Client;
	$msdb = $mclient->mobstore;
	$empcollection = $msdb->emp;

	$delete_id = $_GET['delete_id'];
	$valid = $empcollection->findOne(
     ['_id' => $delete_id]
    );
	if($valid)
	{
		$delete_result = $empcollection->deleteOne(['_id' => $delete_id]);
		echo '<script type="text/javascript">'; 
		echo 'alert("Deleted Successfully!");'; 
    	echo 'window.location.href = "emp_query.php";';
		echo '</script>';
	}
	else 
	{	
		echo '<script type="text/javascript">'; 
  		echo 'alert("Could not Delete!");'; 
  		echo 'window.location = "main.php";';
  		echo '</script>';
  	}
?>