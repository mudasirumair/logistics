<?php
ini_set('display_errors', '1');
require('db.php');
//include("session.php");

//

session_start();

    if(isset($_SESSION['username']))
    {
        echo '';
    }
    else
    {
        header("location:login.php");
    }

//
$query = "select * from invoice";
$run = $con->query($query);
?>
<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="ins.css">
  <link rel="stylesheet" href="css/style.css" />
  <!--<h1 id="myHeader">Create Invoice</h1>-->
  <div class="card">

		<div class="card-header bg-dark ">
			<br>
			<h1 class="text-primery text-center" class="col-lg-6"> New Abid Goods<br> All records </h1><br>
		</div>
</head>
<body>

		
			
									<!--custom-widgets start-->
			

									<!--custom-widgets end-->















<table class="table table-stripe table-hover table-bordered">


<tr class="bg-dark text-info text-center" >

<th>Date</th>
<th>Messer</th>
<th>Location_to</th>
<th>Location_from</th>
<th>Date</th>
<th>Invoice_num</th>
<th>truck</th>
<th>Container</th>
<th>Shipping</th>
<th>Particular</th>
<th>received amo</th>
<th>total amo</th>
<th>Action</th>
<th>Action</th>
<th>Action</th>
</tr>
<?php
while($display = $run->fetch_assoc())
{
									$display['In_truck2'];
									$display['In_truck3'];
									$display['In_truck4'];
									$display['In_truck5'];
									$display['In_truck6'];
									$display['In_truck7'];
									$display['In_truck8'];
									$display['In_truck9'];
									$display['In_truck10'];
									$display['In_con2'];
									$display['In_con3'];
									$display['In_con4'];
									$display['In_con5'];
									$display['In_con6'];
									$display['In_con7'];
									$display['In_con8'];
									$display['In_con9'];
									$display['In_con10'];
									$display['In_ship2'];
									$display['In_ship3'];
									$display['In_ship4'];
									$display['In_ship5'];
									$display['In_ship6'];
									$display['In_ship7'];
									$display['In_ship8'];
									$display['In_ship9'];
									$display['In_ship10'];
									$display['In_part2'];
									$display['In_part3'];
									$display['In_part4'];
									$display['In_part5'];
									$display['In_part6'];
									$display['In_part7'];
									$display['In_part8'];
									$display['In_part9'];
									$display['In_part10'];
									$display['In_builti2'];
									$display['In_builti3'];
									$display['In_builti4'];
									$display['In_builti5'];
									$display['In_builti6'];
									$display['In_builti7'];
									$display['In_builti8'];
									$display['In_builti9'];
									$display['In_builti10'];
									$display['In_amount1'];
									$display['In_amount2'];
									$display['In_amount3'];
									$display['In_amount4'];
									$display['In_amount5'];
									$display['In_amount6'];
									$display['In_amount7'];
									$display['In_amount8'];
									$display['In_amount9'];
									$display['In_amount10'];
									


								
				
				echo"	<tr align='center'>
				
				        
						<td>        ".$display['In_date']."				</td>
						<td > 		".$display['In_messer']."			</td>
						<td > 		".$display['In_to_loc']."		 	</td>
						<td > 		".$display['In_from_loc']." 		</td>
						<td>        ".$display['In1_date']."			</td>
						<td > 	 	".$display['Invoice_ID']."			</td>
						<td > 	 	".$display['In_truck1']." 			</td>
						<td > 	 	".$display['In_con1']." 			</td>
						<td > 	 	".$display['In_ship1']." 			</td>
						<td > 	 	".$display['In_part1']." 			</td>
						<td > 	 	".$display['In_rec_amo']."			</td>
						<td > 	 	".$display['In_total_amo']."		</td> 

						<td><button class='btn btn-info' class='text-white'> <a href='update1.php?da=$display[In_date]&me=$display[In_messer]&t=$display[In_to_loc]&fr=$display[In_from_loc]&da1=$display[In1_date]&inv=$display[Invoice_ID]&tr1=$display[In_truck1]&tr2=$display[In_truck2]&tr3=$display[In_truck3]&tr4=$display[In_truck4]&tr5=$display[In_truck5]&tr6=$display[In_truck6]&tr7=$display[In_truck7]&tr8=$display[In_truck8]&tr9=$display[In_truck9]&tr10=$display[In_truck10]&cn1=$display[In_con1]&cn2=$display[In_con2]&cn3=$display[In_con3]&cn4=$display[In_con4]&cn5=$display[In_con5]&cn6=$display[In_con6]&cn7=$display[In_con7]&cn8=$display[In_con8]&cn9=$display[In_con9]&cn10=$display[In_con10]&shi1=$display[In_ship1]&shi2=$display[In_ship2]&shi3=$display[In_ship3]&shi4=$display[In_ship4]&shi5=$display[In_ship5]&shi6=$display[In_ship6]&shi7=$display[In_ship7]&shi8=$display[In_ship8]&shi9=$display[In_ship9]&shi10=$display[In_ship10]&par1=$display[In_part1]&par2=$display[In_part2]&par3=$display[In_part3]&par4=$display[In_part4]&par5=$display[In_part5]&par6=$display[In_part6]&par7=$display[In_part7]&par8=$display[In_part8]&par9=$display[In_part9]&par10=$display[In_part10]&bui1=$display[In_builti1]&bui2=$display[In_builti2]&bui3=$display[In_builti3]&bui4=$display[In_builti4]&bui5=$display[In_builti5]&bui6=$display[In_builti6]&bui7=$display[In_builti7]&bui8=$display[In_builti8]&bui9=$display[In_builti9]&bui10=$display[In_builti10]&amo1=$display[In_amount1]&amo2=$display[In_amount2]&amo3=$display[In_amount3]&amo4=$display[In_amount4]&amo5=$display[In_amount5]&amo6=$display[In_amount6]&amo7=$display[In_amount7]&amo8=$display[In_amount8]&amo9=$display[In_amount9]&amo10=$display[In_amount10]&ramo=$display[In_rec_amo]&tamo=$display[In_total_amo] 'class='text-white'> <b> Update </b> </a></button></td>

						<td><button class='btn btn-danger' > <a href='deletes.php?invoice=$display[Invoice_ID]' class='text-white'> <b> Delete </b> </a></button></td>

						<td><button class='btn btn-success'> <a href='printinvoicesrc.php?da=$display[In_date]&me=$display[In_messer]&t=$display[In_to_loc]&fr=$display[In_from_loc]&inv=$display[Invoice_ID]&tr1=$display[In_truck1]&tr2=$display[In_truck2]&tr3=$display[In_truck3]&tr4=$display[In_truck4]&tr5=$display[In_truck5]&tr6=$display[In_truck6]&tr7=$display[In_truck7]&tr8=$display[In_truck8]&tr9=$display[In_truck9]&tr10=$display[In_truck10]&cn1=$display[In_con1]&cn2=$display[In_con2]&cn3=$display[In_con3]&cn4=$display[In_con4]&cn5=$display[In_con5]&cn6=$display[In_con6]&cn7=$display[In_con7]&cn8=$display[In_con8]&cn9=$display[In_con9]&cn10=$display[In_con10]&shi1=$display[In_ship1]&shi2=$display[In_ship2]&shi3=$display[In_ship3]&shi4=$display[In_ship4]&shi5=$display[In_ship5]&shi6=$display[In_ship6]&shi7=$display[In_ship7]&shi8=$display[In_ship8]&shi9=$display[In_ship9]&shi10=$display[In_ship10]&par1=$display[In_part1]&par2=$display[In_part2]&par3=$display[In_part3]&par4=$display[In_part4]&par5=$display[In_part5]&par6=$display[In_part6]&par7=$display[In_part7]&par8=$display[In_part8]&par9=$display[In_part9]&par10=$display[In_part10]&bui1=$display[In_builti1]&bui2=$display[In_builti2]&bui3=$display[In_builti3]&bui4=$display[In_builti4]&bui5=$display[In_builti5]&bui6=$display[In_builti6]&bui7=$display[In_builti7]&bui8=$display[In_builti8]&bui9=$display[In_builti9]&bui10=$display[In_builti10]&amo1=$display[In_amount1]&amo2=$display[In_amount2]&amo3=$display[In_amount3]&amo4=$display[In_amount4]&amo5=$display[In_amount5]&amo6=$display[In_amount6]&amo7=$display[In_amount7]&amo8=$display[In_amount8]&amo9=$display[In_amount9]&amo10=$display[In_amount10]&ramo=$display[In_rec_amo]&tamo=$display[In_total_amo] 'class='text-white'> <b> Print </b> </a></button></td>
						
				


				</tr>";


}
?>
</table>
<table>
	<tr>
		<td>
		<button type="submit" name="submit2" class = "btn btn-info" style="color:white"><a href="index.html " class="text-white">Go back</a></button>
		</td>
</tr>
</table>