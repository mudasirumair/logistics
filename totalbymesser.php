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



	<div class="card">

		<div class="card-header bg-dark ">
			<h1 class="text-info text-center" class="col-lg-2"> Search total by Messer </h1><br><br>
		</div>

		
		<tr><br><br>						
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label> <b>Messer :&nbsp;&nbsp;</b> </tr>
		<tr> <input type="textarea" name="messe" required ><br><br>
		</tr>
		<tr><br>							 							 								
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success" name="submit" type="submit"> Search</button>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-info" name="submithead" type="submit"> <a href="index.html" class="text-white">Go back</a></button>
		</tr>
	</div>

	
</form>

</table>


							<?php 
							require('db.php');
							/**include("auth.php");**/





							if (isset($_POST['submit'])) {



							$name = $_POST['messe'];
											

											$query = "SELECT sum(In_total_amo) as 'rec'  FROM invoice where In_messer='$name' ";
											$run = $con->query($query);
											$query1 = "SELECT sum(In_rec_amo) as 'recc'  FROM invoice where In_messer='$name' ";
											$run1 = $con->query($query1);

											if($run)
											{

												echo "";

											}
								
											else
											{
												echo "error";
											}
												

								$display = $run->fetch_assoc();	
								$display1 = $run1->fetch_assoc();
								?>

							<div class="card">
							<div class="card-header bg-dark text-white ">
								<table class="col-lg-2 m-auto">
										<th> Total Amount  </th><br>
										<th> Paid Amount </th><br>
										<tr>
										<td> <?php	echo $display['rec'];	?></td>	
										<td> <?php	echo $display1['recc']; ?></td>	

										</tr>

								</table>
							</div>
							</div>










							<?php 


							}
							?>






 

			









