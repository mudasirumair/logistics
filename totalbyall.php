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





  					
</head>
<body>

</body>
</html>

<table class="col-lg-2 m-auto">

<form action="#" method="POST">


<table class="col-lg-2 m-auto">
	<div class="card">

		<div class="card-header bg-dark ">
			<h1 class="text-info text-center" class="col-lg-2"> Search Total by All Date </h1><br>





		</div>



	<form method="POST">
		<tr><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<!--<label> <b>Messer :</b> &nbsp;&nbsp; </label><input type="text" name="name" required> --><br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label class="text-gray"><b>Start date :</b> &nbsp;&nbsp; </label><input type="date" name="txtstartdate" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label><b>End date :</b> &nbsp;&nbsp; </label><input type="date" name="txtenddate" required><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="btn btn-success" type="submit" name="submit" value="search"> <h>search</h> </button>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-info" name="submithead" type="submit"> <a href="index.html" class="text-white">Go back</a></button><br><br>
	</form>
</table>
</body>
</html>

<br><br><br><br><br><br>



						<?php	


						require('db.php');
						/**include("auth.php");**/

						if(isset($_POST['submit'])){

						
						$txt1 =$_POST['txtstartdate'];
						$txt2 =$_POST['txtenddate'];

										$query = "SELECT sum(In_total_amo) as 'rec'  FROM invoice where In_date between '$txt1' and '$txt2' order by In_date  ";
										$run = mysqli_query($con,$query);

										$query1 = "SELECT sum(In_rec_amo) as 'recc'  FROM invoice where In_date between '$txt1' and '$txt2' order by In_date  ";
										$run1 = mysqli_query($con,$query1);







										if($run)
										{

											echo "";

										}
							
										else
										{
											echo "error";
										}
											

							$display2 = mysqli_fetch_assoc($run);

							$display1 = mysqli_fetch_assoc($run1);

							?>

						<div class="card">
						<div class="card-header bg-dark text-white ">
							<table class="col-lg-2 m-auto">
									<th> Total Amount  </th><br>
									<th> Paid Amount </th><br>
									<tr>
									<td> <?php	echo $display2['rec'];	?></td>	<br>
									<td> <?php	echo $display1['recc']; ?></td>	<br>
									</tr>
							</table>
						</div>
						</div>










						<?php 
						}
						?>
