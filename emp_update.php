<?php
	require 'vendor/autoload.php';
	/*To update a document from the collection*/
	$mclient = new MongoDB\Client;
	$msdb = $mclient->mobstore;
	$empcollection = $msdb->emp;
	$id = file_get_contents("file.txt");
	$valid = $empcollection->findOne(['_id' => $id]);
    if($valid)
    {
		$designation = $_POST['designation'];
		$salary = $_POST['salary'];
		$address = $_POST['address'];
		if($salary!="")
			$update_result1 = $empcollection->updateOne(['_id' => $id],['$set' =>['salary' =>$salary]]);
		if($designation!="")
			$update_result2 = $empcollection->updateOne(['_id' => $id],['$set' =>['designation' =>$designation]]);
		if($address!="")
			$update_result3 = $empcollection->updateOne(['_id' => $id],['$set' =>['address' =>$address]]);
		echo '<script type="text/javascript">'; 
	    echo 'alert("Updated Successfully!");'; 
	    echo 'window.location.href = "emp_query.php";';
	    echo '</script>';	
    }
	else echo "<script type='text/javascript'> alert('Invalid ID');";
    echo 'window.location.href = "main.php";';
    echo " </script>";

?>