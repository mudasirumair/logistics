











<?php 


															require('db.php');
															include("auth.php");
															error_reporting(0);






														 	 $_GET['da'];
															 $_GET['me'];
															 $_GET['t'];
															 $_GET['fr'];
															 $_GET['inv'];
															 $_GET['tr1'];
															 $_GET['tr2'];
															 $_GET['t3'];
															 $_GET['tr4'];
															 $_GET['tr5'];
															 $_GET['tr6'];
															 $_GET['tr7'];
															 $_GET['tr8'];
															 $_GET['tr9'];
															 $_GET['tr10'];
															 $_GET['cn1'];
															 $_GET['ccn2'];
															 $_GET['cn3'];
															 $_GET['cn4'];
															 $_GET['cn5'];
															 $_GET['cn6'];
															 $_GET['cn7'];
															 $_GET['cn8'];
															 $_GET['cn9'];
															 $_GET['cn10'];
															 $_GET['par1'];
															 $_GET['par2'];
															 $_GET['par3'];
															 $_GET['par4'];
															 $_GET['par5'];
															 $_GET['par6'];
															 $_GET['par7'];
															 $_GET['par8'];
															 $_GET['par9'];
															 $_GET['par10'];
															 $_GET['shi1'];
															 $_GET['shi2'];
															 $_GET['shi3'];
															 $_GET['shi4'];
															 $_GET['shi5'];
															 $_GET['shi6'];
															 $_GET['shi7'];
															 $_GET['shi8'];
															 $_GET['shi9'];
															 $_GET['shi10'];
															 $_GET['bui1'];
															 $_GET['bui2'];
															 $_GET['bui3'];
															 $_GET['bui4'];
															 $_GET['bui5'];
															 $_GET['bui6'];
															 $_GET['bui7'];
															 $_GET['bui8'];
															 $_GET['bui9'];
															 $_GET['bui10'];
															 $_GET['amo1'];
															 $_GET['amo2'];
															 $_GET['amo3'];
															 $_GET['amo4'];
															 $_GET['amo5'];
															 $_GET['amo6'];
															 $_GET['amo7'];
															 $_GET['amo8'];
															 $_GET['amo9'];
															 $_GET['amo10'];
															 $_GET['ramo'];
															 $_GET['tamo'];


															
															 ?>


<!DOCTYPE html>
<html>
<head>

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

<meta charset="utf-8">
<title>Print invoice</title>
<link rel="stylesheet" href="css/style.css" />
<link href="css/styles.css" rel='stylesheet' type='text/css' />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
	<body>

									<!--custom-widgets start-->
									<!--custom-widgets end-->

									<!--custom-Form start-->


								<form action="" method="POST" class=""><br>

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
            <h1 class="text-primery text-center" class="col-lg-6"> New Abid Goods<br> Invoice </h1><br>
        </div>

    

<div>
    
</div>
<div id="div5">
    <br><br><br><br><br><br>
<form action="#" method="POST">
<table class="table  col-lg-12">
    
    <td>
    <label class="label text-info"><b>Date</b>&nbsp;&nbsp;&nbsp;&nbsp;</label></label><label name="date"><h2> <?php echo $_GET['da'];  ?></h2></label>
    </td>
    <td><label class="label text-info"><b>Messer</b>&nbsp;&nbsp;&nbsp;&nbsp;</label></label><label name="messer"><h2> <?php echo $_GET['me'];  ?> </h2></label></td>
    <td><label class="label text-info"><b>  TO  </b>&nbsp;&nbsp;&nbsp;&nbsp;</label><label name="to"><h2> <?php echo $_GET['t'];  ?></h2></label></td> 
    <td><label class="label text-info"><b> From </b>&nbsp;&nbsp;&nbsp;&nbsp;</label><label name="from"><h2> <?php echo $_GET['fr'];  ?> </h2></label></td></tr>
</table>



<table class="table table-bordered text-info">
                            <thead>
                                <tr class="bg-dark text-info text-center" >
                                    <th>Invoice Number</th>
                                    <th>Truck Number</th>
                                    <th>Con_size</th>
                                    <th>particular</th>
                                    <th>Shipping Line</th>
                                    <th>Builty Number</th>
                                    <th>Amount</th>
                                    
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>


                                            </td>
                                    <!-- <lable rows="10"  cols="30" name="particuler"></lable> -->
                                    <td>
                                    <lable    name="invoice_id"><?php echo $_GET['inv']; ?></lable>
                                    </td>

                                    <!--shipping_line-->
                                    <!--date-->

                                    <td>
                                    <label name="truck_number1"><?php echo $_GET['tr1']; ?></label> <br>
                                    <lable    name="truck_number2" ><?php echo $_GET['tr2']; ?></lable><br>
                                    <lable    name="truck_number3" ><?php echo $_GET['tr3']; ?></lable><br>
                                    <lable    name="truck_number4" ><?php echo $_GET['tr4']; ?></lable><br>
                                    <lable    name="truck_number5" ><?php echo $_GET['tr5']; ?></lable><br>
                                    <lable    name="truck_number6" ><?php echo $_GET['tr6']; ?></lable><br>
                                    <lable    name="truck_number7" ><?php echo $_GET['tr7']; ?></lable><br>
                                    <lable    name="truck_number8" ><?php echo $_GET['tr8']; ?></lable><br>
                                    <lable    name="truck_number9" ><?php echo $_GET['tr9']; ?></lable><br>
                                    <lable    name="truck_number10" ><?php echo $_GET['tr10']; ?></lable><br><hr>
                                    
                                    </td>

                                    <!--date closed-->

                                    <!--truck_number-->

                                    <td>
                                    <lable    name="Con_size1"><?php echo $_GET['cn1']; ?></lable><br>
                                    <lable    name="Con_size2" ><?php echo $_GET['cn2']; ?></lable><br>
                                    <lable    name="Con_size3" ><?php echo $_GET['cn3']; ?></lable><br>
                                    <lable    name="Con_size4" ><?php echo $_GET['cn4']; ?></lable><br>
                                    <lable    name="Con_size5" ><?php echo $_GET['cn5']; ?></lable><br>
                                    <lable    name="Con_size6" ><?php echo $_GET['cn6']; ?></lable><br>
                                    <lable    name="Con_size7" ><?php echo $_GET['cn7']; ?></lable><br>
                                    <lable    name="Con_size8" ><?php echo $_GET['cn8']; ?></lable><br>
                                    <lable    name="Con_size9" ><?php echo $_GET['cn9']; ?></lable><br>
                                    <lable    name="Con_size10" ><?php echo $_GET['cn10']; ?></lable><hr>
                                    </td>

                                    <!--truck_number closed-->

                                    <!-- <lable rows="10"  cols="30" name="particuler"></lable> -->

                                    <td>
                                    <lable  cols="30" name="particular1"><?php echo $_GET['par1']; ?></lable><br>
                                    <lable  cols="30" name="particular2"><?php echo $_GET['par2']; ?></lable><br>
                                    <lable  cols="30" name="particular3"><?php echo $_GET['par3']; ?></lable><br>
                                    <lable  cols="30" name="particular4"><?php echo $_GET['par4']; ?></lable><br>
                                    <lable  cols="30" name="particular5"><?php echo $_GET['par5']; ?></lable><br>
                                    <lable  cols="30" name="particular6"><?php echo $_GET['par6']; ?></lable><br>
                                    <lable  cols="30" name="particular7"><?php echo $_GET['par7']; ?></lable><br>
                                    <lable  cols="30" name="particular8"><?php echo $_GET['par8']; ?></lable><br>
                                    <lable  cols="30" name="particular9"><?php echo $_GET['par9']; ?></lable><br>
                                    <lable  cols="30" name="particular10"><?php echo $_GET['par10']; ?></lable>
                                    <br><hr>
                                        <h4>NTN 12098492108409</h4>

                                

                                    <td>
                                    <lable    name="shipping_line1"><?php echo $_GET['shi1']; ?></lable><br>
                                    <lable    name="shipping_line2"><?php echo $_GET['shi2']; ?></lable><br>
                                    <lable    name="shipping_line3"><?php echo $_GET['shi3']; ?></lable><br>
                                    <lable    name="shipping_line4"><?php echo $_GET['shi4']; ?></lable><br>
                                    <lable    name="shipping_line5"><?php echo $_GET['shi5']; ?></lable><br>
                                    <lable    name="shipping_line6"><?php echo $_GET['shi6']; ?></lable><br>
                                    <lable    name="shipping_line7"><?php echo $_GET['shi7']; ?></lable><br>
                                    <lable    name="shipping_line8"><?php echo $_GET['shi8']; ?></lable><br>
                                    <lable    name="shipping_line9"><?php echo $_GET['shi9']; ?></lable><br>
                                    <lable    name="shipping_line10"><?php echo $_GET['shi10']; ?></lable><hr>
                                    </td>

                                    <!--shipping_line closed-->

                                    <!--builti-->

                                    <td>
                                    <lable    name="builty_number1"><?php echo $_GET['bui1']; ?></lable><br>
                                    <lable    name="builty_number2"><?php echo $_GET['bui2']; ?></lable><br>
                                    <lable    name="builty_number3"><?php echo $_GET['bui3']; ?></lable><br>
                                    <lable    name="builty_number4"><?php echo $_GET['bui4']; ?></lable><br>
                                    <lable    name="builty_number5"><?php echo $_GET['bui5']; ?></lable><br>
                                    <lable    name="builty_number6"><?php echo $_GET['bui6']; ?></lable><br>
                                    <lable    name="builty_number7"><?php echo $_GET['bui7']; ?></lable><br>
                                    <lable    name="builty_number8"><?php echo $_GET['bui8']; ?></lable><br>
                                    <lable    name="builty_number9"><?php echo $_GET['bui9']; ?></lable><br>
                                    <lable    name="builty_number10"><?php echo $_GET['bui10']; ?></lable><hr>
                                    <label>Received amount</label><br>
                                    <label>Tatal Amount</label>
                                    </td>

                                    <!--builti closed-->

                                    <!--amount-->
                                    <td>
                                    <lable    name="amount10"> <?php echo $_GET['amo1']; ?> </lable><br>
                                    <lable    name="amount1"> <?php echo $_GET['amo2']; ?>  </lable><br>
                                    <lable    name="amount2"> <?php echo $_GET['amo3']; ?>  </lable><br>
                                    <lable    name="amount3"> <?php echo $_GET['amo4']; ?>  </lable><br>
                                    <lable    name="amount4"> <?php echo $_GET['amo5']; ?>  </lable><br>
                                    <lable    name="amount5">  <?php echo $_GET['amo6']; ?> </lable><br>
                                    <lable    name="amount6"> <?php echo $_GET['amo7']; ?>  </lable><br>
                                    <lable    name="amount7"> <?php echo $_GET['amo8']; ?>  </lable><br>
                                    <lable    name="amount8"> <?php echo $_GET['amo9']; ?>  </lable><br>
                                    <lable    name="amount9">  <?php echo $_GET['amo10']; ?> </lable><hr>
                                    <label name="rec_amount" ><?php echo $_GET['ramo']; ?></label>   <br>
                                    <label name="total_amount"><?php echo $_GET['tamo']; ?></label>                                  
                                    <label ><?php echo ""  ?></label><br>
                                    <label ><?php echo ""  ?></label>
                                    </td>

                                        <!--amount closed-->
                                        
                    
                                </tr>
                             

</body>
</td>
</tr>
</tbody>
</table>
</form>
</div>
</div>

</head>
	<button type = "submit" name="submit" onclick="printcontent('div5')" class = "btn btn-info">Print</button>


 									<!--custom-Form End-->