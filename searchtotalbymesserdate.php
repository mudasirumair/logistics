<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
	

	<style>
#div6{
	margin-bottom:px;
	margin-left: 650px;
	opacity: 5px;
}

#h1{
	opacity: 0.1;
}
	</style>

	<script>
		function printcontent(el){

			var restorepage = document.body.innerHTML;
			var printcontent = document.getElementById(el).innerHTML;
			document.body.innerHTML = printcontent;
			window.print();
			document.body.innerHTML = restorepage;

		}
	</script>


  

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
			<h1 class="text-info text-center" class="col-lg-2"> Search total by Messer & Date</h1><br>





		</div>



	<form method="POST">
		<tr><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label> <b> Messer :</b> &nbsp;&nbsp; </label><input type="text" name="name" required><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
						session_start();

    if(isset($_SESSION['username']))
    {
        echo ' Well Come ' . $_SESSION['username'].'<br/>';
    }
    else
    {
        header("location:login.php");
    }


						require('db.php');
						//include("auth.php");

						if(isset($_POST['submit'])){

						$name =$_POST['name'];
						$txt1 =$_POST['txtstartdate'];
						$txt2 =$_POST['txtenddate'];

										$query = "SELECT sum(In_total_amo) as 'rec'  FROM invoice where In_messer='$name' and In_date between '$txt1' and '$txt2' order by In_date  ";
										$run = mysqli_query($con,$query);

										$query1 = "SELECT sum(In_rec_amo) as 'recc'  FROM invoice where In_messer='$name' and In_date between '$txt1' and '$txt2' order by In_date  ";
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
			<div id="div5" class="card">
			<div class="card-header bg-light text-primery ">
            <br>
            <h1 class="text-info text-center" class="col-lg-6"> New Abid Goods<br> Report </h1><br>
            <br><br><br><br><br>
           <table class="table table-bordered text-success">
                            <thead>
                                <tr class="bg-dark text-info text-center">
                                    <th>Milston to</th>
                                    <th>Milston from</th>
                                    <th>By employee</th>
                                    <th>Messer</th>
                                    <th>Report</th>
                                    <th>Amount</th>
                                    
                                   	</tr>
                                   	</thead>


                                   <tbody>
                                   <tr>

                                   <td class="text-center">
                                   <h5><?php	echo $txt1 ; ?></h5>
                                   </td>

                                  

                                   <td class="text-center">
                                   <h5><?php	echo $txt2 ; ?></h5>
                                   </td>

                                   <td class="text-center">
                                   <h5>Ammad Malik</h5>
                                   <br>
                                   <br>
                                   <br>
                                   <br>
                                   <hr>
                                    <h4>NTN 12098492108409</h4>
                                    </td>
                                

                                    <td class="text-center">
                                    <h5><?php	echo $name ; ?></h5>
                                    </td>

                                    

                                   <td class="text-center">
                                   <br>
                                   <br>
                                   <br>
                                   <hr>
                                   <label>Received</label><hr>
                                   <label>Total</label>
                                   <hr>
                                   </td>

                                   
                                   <td class="text-center">
                                   <br>
                                   <br>
                                   <br>
                                   <hr>
                                   <label ><?php	echo $display1['recc']; ?></label><hr>
                                   <label ><?php	echo $display2['rec'];	?></label>
                                   <hr>
                                   </td>
                                </tr>
</body>
</td>
</tr>
</tbody>
</table>
             

       		</div>
			</div>
			</div>
<?php 
}
?><table><tr><td>_________________________________</td><td><button type = "submit" name="submit" onclick="printcontent('div5')" class = "btn btn-info">Print</button></td></tr></table>
