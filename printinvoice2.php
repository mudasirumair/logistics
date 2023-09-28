
<?php 


															require('db.php');
															//include("auth.php");
															error_reporting(0);															
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

    
<?php


                        $sql = "SELECT * FROM invoice  ORDER BY ID DESC LIMIT 1";
                        $result = $con->query($sql);

                        if ($result) 
                        {
                            $display = $result->fetch_assoc();
                        }
                        else
                        {
                            echo "error";
                        }

                         

    ?>



<div>
    

</div>
 <div id="div5">
    <br><br><br><br><br><br>
<form action="#" method="POST">

<table class="table  col-lg-12">
<tr>
<td>
<label><h1><b style="font-size: 20px">Messer : &nbsp;&nbsp;</label></label><label name="messer"><h2> <?php echo $display['In_messer'];  ?> 
</h2></label></td>
</tr> 
</table>
<table class="table  col-lg-12" >
    </tr>
    <tr>
    <td>
    <label class="label text-info"><b style="font-size: 20px">Date</b>&nbsp;&nbsp;</label></label><label name="date"><h2> <?php echo $display['In_date'];  ?></h2></label> 
    </td> 
    
    <td><label class="label text-info"><b style="font-size: 20px">  TO  </b>&nbsp;&nbsp;</label><label name="to"><h2> <?php echo $display['In_to_loc'];  ?></h2></label></td> 
    <td><label class="label text-info"><b style="font-size: 20px"> From </b>&nbsp;&nbsp;</label><label name="from"><h2> <?php echo $display['In_from_loc'];  ?> </h2></label></td></tr>
</table>



<table class="table text-info" style="border-style: solid;">
                            <thead>
                                <tr class="bg-dark text-info text-center"  >
                                    <th >Date</th>
                                    <th style="border-style: solid;">Invoice Number</th>
                                    <th style="border-style: solid;">Truck Number</th>
                                    <th style="border-style: solid;">particular</th>
                                    <th style="border-style: solid;">Shipping</th>
                                    <th style="border-style: solid;">Container</th>
                                    <th style="border-style: solid;">Builty Number</th>
                                    <th>Amount</th>
                                    
                                    </tr>
                                   </thead>
                                    <tbody>
                                    <tr style="border-style: solid;">

                                    </td>
                                    <!-- <lable rows="10"  cols="30" name="particuler"></lable> -->

                                     <td style="border-style: solid;">
                                    <label    name="date1"> <h4> <?php echo $display['In1_date'];   ?></h4></label>
                                    </td>
                                     <td>
                                    <lable    name="invoice_id" style="font-size: 20px"><b><?php echo $display['Invoice_ID']; ?></b></lable>
                                    </td>
                                    <!--shipping_line-->
                                    <!--date-->

                                    <td style="border-style: solid;">
                                    <label    name="truck_number1"><b style="font-size: 20px"><?php echo $display['In_truck1']; ?></b></label> <br>
                                    <lable    name="truck_number2" > <b style="font-size: 20px"> <?php echo $display['In_truck2']; ?></lable><br>
                                    <lable    name="truck_number3" ><b style="font-size: 20px"><?php echo $display['In_truck3']; ?></b></lable><br>
                                    <lable    name="truck_number4" ><b style="font-size: 20px"><?php echo $display['In_truck4']; ?></b></lable><br>
                                    <lable    name="truck_number5" ><b style="font-size: 20px"><?php echo $display['In_truck5']; ?></b></lable><br>
                                    <lable    name="truck_number6" ><b style="font-size: 20px"><?php echo $display['In_truck6']; ?></b></lable><br>
                                    <lable    name="truck_number7" ><b style="font-size: 20px"><?php echo $display['In_truck7']; ?></b></lable><br>
                                    <lable    name="truck_number8" ><b style="font-size: 20px"><?php echo $display['In_truck8']; ?></b></lable><br>
                                    <lable    name="truck_number9" ><b style="font-size: 20px"><?php echo $display['In_truck9']; ?></b></lable><br>
                                    <lable    name="truck_number10" ><b style="font-size: 20px"><?php echo $display['In_truck10']; ?></b></lable><br><hr>
                                    
                                    </td>

                                    <!--date closed-->

                                    <!--truck_number-->

                          

                                    <!--truck_number closed-->

                                    <!-- <lable rows="10"  cols="30" name="particuler"></lable> -->

                                    <td style="border-style: solid;">
                                    <lable  cols="30" name="particular1"><b style="font-size: 20px"><?php echo $display['In_part1']; ?></b></lable><br>
                                    <lable  cols="30" name="particular2"><b style="font-size: 20px"><?php echo $display['In_part2']; ?></b></lable><br>
                                    <lable  cols="30" name="particular3"><b style="font-size: 20px"><?php echo $display['In_part3']; ?></b></lable><br>
                                    <lable  cols="30" name="particular4"><b style="font-size: 20px"><?php echo $display['In_part4']; ?></b></lable><br>
                                    <lable  cols="30" name="particular5"><b style="font-size: 20px"><?php echo $display['In_part5']; ?></b></lable><br>
                                    <lable  cols="30" name="particular6"><b style="font-size: 20px"><?php echo $display['In_part6']; ?></b></lable><br>
                                    <lable  cols="30" name="particular7"><b style="font-size: 20px"><?php echo $display['In_part7']; ?></b></lable><br>
                                    <lable  cols="30" name="particular8"><b style="font-size: 20px"><?php echo $display['In_part8']; ?></b></lable><br>
                                    <lable  cols="30" name="particular9"><b style="font-size: 20px"><?php echo $display['In_part9']; ?></b></lable><br>
                                    <lable  cols="30" name="particular10"><b style="font-size: 20px"><?php echo $display['In_part10']; ?></b></lable>
                                    <br><hr>
                                        <h4>NTN NO: 7618518-0</h4>

                                <!--particular closed-->


                                    <!--con strt-->
                                    <td style="border-style: solid;">
                                    <lable    name="shipping_line1"> <b style="font-size: 20px"> <?php echo $display['In_ship1']; ?></lable><br>
                                    <lable    name="shipping_line2"> <b style="font-size: 20px"> <?php echo $display['In_ship2'];  ?></lable><br>
                                    <lable    name="shipping_line3"> <b style="font-size: 20px"> <?php echo $display['In_ship3'];  ?></lable><br>
                                    <lable    name="shipping_line4"> <b style="font-size: 20px"><?php echo $display['In_ship4'];  ?></lable><br>
                                    <lable    name="shipping_line5"> <b style="font-size: 20px"> <?php echo $display['In_ship5'];  ?></lable><br>
                                    <lable    name="shipping_line6"> <b style="font-size: 20px"> <?php echo $display['In_ship6'];  ?></lable><br>
                                    <lable    name="shipping_line7"> <b style="font-size: 20px"> <?php echo $display['In_ship7'];  ?></lable><br>
                                    <lable    name="shipping_line8"> <b style="font-size: 20px"> <?php echo $display['In_ship8'];  ?></lable><br>
                                    <lable    name="shipping_line9"> <b style="font-size: 20px"> <?php echo $display['In_ship9'];  ?></lable><br>
                                    <lable   name="shipping_line10"> <b style="font-size: 20px"> <?php echo $display['In_ship10'];  ?></lable>
                                        <hr>
                                        
                                    </td>
                                    <!--con closed-->

                                 <!--shipping_line strt-->
                                    <td>
                                    <lable    name="Con_size1"> <b style="font-size: 20px"> <?php echo $display['In_con1']; ?> </lable><br>
                                    <lable    name="Con_size2"> <b style="font-size: 20px"> <?php echo $display['In_con2'];  ?></lable><br>
                                    <lable    name="Con_size3"> <b style="font-size: 20px"> <?php echo $display['In_con3'];  ?></lable><br>
                                    <lable    name="Con_size4"> <b style="font-size: 20px"><?php echo $display['In_con4'];  ?> </lable><br>
                                    <lable    name="Con_size5"> <b style="font-size: 20px"> <?php echo $display['In_con5'];  ?></lable><br>
                                    <lable    name="Con_size6"> <b style="font-size: 20px"> <?php echo $display['In_con6'];  ?></lable><br>
                                    <lable    name="Con_size7"> <b style="font-size: 20px"> <?php echo $display['In_con7'];  ?></lable><br>
                                    <lable    name="Con_size8"> <b style="font-size: 20px"> <?php echo $display['In_con8'];  ?></lable><br>
                                    <lable    name="Con_size9"> <b style="font-size: 20px"> <?php echo $display['In_con9'];  ?></lable><br>
                                    <lable   name="Con_size10"> <b style="font-size: 20px"> <?php echo $display['In_con10'];  ?></lable>
                                        <hr>
                                    </td>
                                    <!--shipping_line closed-->

                                    <!--builti-->

                                    <td style="border-style: solid;">
                                    <lable    name="builty_number1"><b style="font-size: 20px"><?php echo $display['In_builti1']; ?></b></lable><br>
                                    <lable    name="builty_number2"><b style="font-size: 20px"><?php echo $display['In_builti2']; ?></b></lable><br>
                                    <lable    name="builty_number3"><b style="font-size: 20px"><?php echo $display['In_builti3']; ?></b></lable><br>
                                    <lable    name="builty_number4"><b style="font-size: 20px"><?php echo $display['In_builti4']; ?></b></lable><br>
                                    <lable    name="builty_number5"><b style="font-size: 20px"><?php echo $display['In_builti5']; ?></b></lable><br>
                                    <lable    name="builty_number6"><b style="font-size: 20px"><?php echo $display['In_builti6']; ?></b></lable><br>
                                    <lable    name="builty_number7"><b style="font-size: 20px"><?php echo $display['In_builti7']; ?></b></lable><br>
                                    <lable    name="builty_number8"><b style="font-size: 20px"><?php echo $display['In_builti8']; ?></b></lable><br>
                                    <lable    name="builty_number9"><b style="font-size: 20px"><?php echo $display['In_builti9']; ?></b></lable><br>
                                    <lable    name="builty_number10"><b style="font-size: 20px"><?php echo $display['In_builti10']; ?></b></lable><hr>
                                    <label><b style="font-size: 20px">Received</b></label><br>
                                    <label><b style="font-size: 20px">Total</b></label>
                                    </td>

                                    <!--builti closed-->

                                    <!--amount-->
                                    <td style="border-style: solid;">
                                    <lable    name="amount10"><b style="font-size: 20px"><?php echo $display['In_amount1']; ?> </b></lable><br>
                                    <lable    name="amount1"> <b style="font-size: 20px"><?php echo $display['In_amount2']; ?> </b></lable><br>
                                    <lable    name="amount2"> <b style="font-size: 20px"><?php echo $display['In_amount3']; ?> </b></lable><br>
                                    <lable    name="amount3"> <b style="font-size: 20px"><?php echo $display['In_amount4']; ?> </b></lable><br>
                                    <lable    name="amount4"> <b style="font-size: 20px"><?php echo $display['In_amount5']; ?> </b></lable><br>
                                    <lable    name="amount5"> <b style="font-size: 20px"><?php echo $display['In_amount6']; ?> </b></lable><br>
                                    <lable    name="amount6"> <b style="font-size: 20px"><?php echo $display['In_amount7']; ?> </b></lable><br>
                                    <lable    name="amount7"> <b style="font-size: 20px"><?php echo $display['In_amount8']; ?> </b></lable><br>
                                    <lable    name="amount8"> <b style="font-size: 20px"><?php echo $display['In_amount9']; ?> </b></lable><br>
                                    <lable    name="amount9"> <b style="font-size: 20px"><?php echo $display['In_amount10'];?> </b></lable><hr>
                                    <label name="rec_amount" ><b style="font-size: 20px"><?php echo $display['In_rec_amo']; ?></b></label>   <br>
                                    <label name="total_amount"><b style="font-size: 20px"><?php echo $display['In_total_amo'];; ?></b></label>                                  
                                    <label ><?php echo ""  ?></label><br>
                                    <label ><?php echo ""  ?></label>
                                    </td>

                                        <!--amount closed-->
                                        
                    
                                </tr>
                                <!--sig start-->

                                <!--sig close-->
                             

</body>
</td>
</tr>
</tbody>

</table>
 <td style="border-style: solid;"><br><br><br><h3> <hr style="width: 200px" align="left"> &nbsp;&nbsp;&nbsp;&nbsp;Signature  </h3></td>
</form>

</div>
</div>

</head>
	<button type = "submit" name="submit" onclick="printcontent('div5')" class = "btn btn-info">Print</button>


 									<!--custom-Form End-->