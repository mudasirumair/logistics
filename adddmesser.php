<!DOCTYPE html>
<html>

<head>
	<title></title>
	 <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="ins.css">
  <!--<h1 id="myHeader">Create Invoice</h1>-->
  <div class="card">

        <div class="card-header bg-dark ">
            <br>
            <h1 class="text-warning text-center" class="col-lg-6"> New Abid Goods<br>Add Messer </h1><br>
            
    </div>

</head>
<body>
</head>
<body>




	<form method="POST" action="#">
		<br><br><br>
		
		<label><b class="text-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Add Messer :&nbsp;&nbsp;&nbsp;</b></label><input class="text-warning-info" type="text" name="messer" placeholder="Enter Messer Name"  maxlength="100" required>

		<br><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   						 <button type="submit" name="submit" class="btn btn-info">Add messer</button> 
                          
                           
                                 &nbsp;&nbsp;&nbsp;
                                <button type="submit" name="submit2" class = "btn btn-info" style="color:white"><a href="adddmesser.php " class="text-white">Refresh</a></button>

                                &nbsp;&nbsp;&nbsp;

                                <button type="submit" name="submit2" class = "btn btn-info" style="color:white"><a href="index.html " class="text-white">Go back</a></button>
                            </form>
                            <br> 
	</form>

</body>
</html>


<?php 
require('db.php');
//include("auth.php");


if (isset($_POST['submit'])) 
 	{
$messer = $_POST['messer'];


$query = "INSERT INTO add_messer(In_messer) VALUES('$messer')";
$run = mysqli_query($con,$query);


if ($run)
 {
 	
 		
	echo "inserted";
	}
	else{
		echo "not inserted";
	}

}




 ?>