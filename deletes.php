<?php

require('db.php');
//include("auth.php");

$invoice_id = $_GET['invoice'];



$query ="DELETE FROM invoice WHERE Invoice_ID='$invoice_id'";
$data =mysqli_query($con , $query);

	


	if($data)
	{
		echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
		header('location:displayinvoice.php');
	}
	
	else
	{
		echo "not deleted";
		header('location:displayinvoice.php');
		
	}

?>