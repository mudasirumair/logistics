

																<?php 


															require('db.php');
															//include("auth.php");
															error_reporting(0);

$query = "SELECT * FROM add_messer";
$result = mysqli_query($con,$query);




														 	 $_GET['da'];
															 $_GET['me'];
															 $_GET['t'];
															 $_GET['fr'];
															 $_GET['da1'];
															$invoce = $_GET['inv'];
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

$query = "DELETE FROM invoice WHERE Invoice_ID=$invoce ";
$run = mysqli_query($con,$query);
if ($run) {
    echo "working";
}
else{
    echo " not working";
}

															
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<title>Update invoice</title>
<link rel="stylesheet" href="css/style.css" />
<link href="css/styles.css" rel='stylesheet' type='text/css' />
  <meta name="viewport" content="width=device-width   initial-scale=1">
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


  <meta name="viewport" content="width=device-width   initial-scale=1">
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
            <h1 class="text-primery text-center" class="col-lg-6"> New Abid Goods<br> Create Invoice </h1><br>
        </div>
</head>
<body>
    

<div>
    <br><br><br>
</div>
<form action="#" class="form-group" method="POST">
<table class="table  col-lg-12">
    
    <td>
    <label class="label text-info"><b>Date</b>&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="" name="date" value=" <?php echo $_GET['da'];?> ">
    </td>
    <td><label class="label text-info"><b>Messer</b>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <select name="messer" size="1"></h3>
                            <?php
                               echo $_GET['me']; while ($row1 = $result->fetch_array())
                                    {
                            ?> 
                                        <option  ><?php echo $row1['In_messer'] ?></option>
                            <?php
                                    }
                                
                            ?>
                              </select></td>
    <td><label class="label text-info"><b>  TO  </b>&nbsp;&nbsp;&nbsp;&nbsp;</label><select name="to"><option> <?php echo$_GET['t'] ; ?></option></select></td> 
    <td><label class="label text-info"><b> From </b>&nbsp;&nbsp;&nbsp;&nbsp;</label><select name="from"><option> <?php echo$_GET['fr'] ; ?></option></select></td></tr>
</table>



<table class="table table-bordered text-info">
                            <thead>
                                <tr class="bg-dark text-white text-center" >
                                    <th>Date</th>
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
                                    
                                       <td>
                                        <input type="" name="datee" value="<?php echo $_GET['da1'];?>">
                                        </td>
                                    
                                    <!-- <textarea rows="10"  cols="30" name="particuler"></textareaa> -->
                                    <td>
                                    <textarea    name="invoice_id"><?php echo $_GET['inv'];?></textarea>
                                    </td>

                                    <!--shipping_line-->
                                    <!--date-->

                                    <td>
                                    <textarea    name="truck_number1"><?php echo $_GET['tr1']; ?></textarea> <br>
                                    <textarea    name="truck_number2" ><?php echo $_GET['tr2']; ?></textarea>    <br>
                                    <textarea    name="truck_number3" ><?php echo $_GET['tr3']; ?></textarea>    <br>
                                    <textarea    name="truck_number4" ><?php echo $_GET['tr4']; ?></textarea>    <br>
                                    <textarea    name="truck_number5" ><?php echo $_GET['tr5']; ?></textarea>    <br>
                                    <textarea    name="truck_number6" ><?php echo $_GET['tr6']; ?></textarea>    <br>
                                    <textarea    name="truck_number7" ><?php echo $_GET['tr7']; ?></textarea>    <br>
                                    <textarea    name="truck_number8" ><?php echo $_GET['tr8']; ?></textarea>    <br>
                                    <textarea    name="truck_number9" ><?php echo $_GET['tr9']; ?></textarea>    <br>
                                    <textarea    name="truck_number10" ><?php echo $_GET['tr10']; ?></textarea>    <br><hr>
                                    
                                    </td>

                                    <!--date closed-->

                                    <!--truck_number-->

                                    <td>
                                    <textarea    name="Con_size1"><?php echo $_GET['cn1']; ?></textarea><br>
                                    <textarea    name="Con_size2" ><?php echo $_GET['cn2']; ?></textarea><br>
                                    <textarea    name="Con_size3" ><?php echo $_GET['cn3']; ?></textarea><br>
                                    <textarea    name="Con_size4" ><?php echo $_GET['cn4']; ?></textarea><br>
                                    <textarea    name="Con_size5" ><?php echo $_GET['cn5']; ?></textarea><br>
                                    <textarea    name="Con_size6" ><?php echo $_GET['cn6']; ?></textarea><br>
                                    <textarea    name="Con_size7" ><?php echo $_GET['cn7']; ?></textarea><br>
                                    <textarea    name="Con_size8" ><?php echo $_GET['cn8']; ?></textarea><br>
                                    <textarea    name="Con_size9" ><?php echo $_GET['cn9']; ?></textarea><br>
                                    <textarea    name="Con_size10" ><?php echo $_GET['cn10'];?></textarea><hr>
                                    </td>

                                    <!--truck_number closed-->

                                    <!-- <textarea> rows="10 name="particuler"> -->

               </textarea>          <td>
                                    <textarea name="particular1"><?php echo $_GET['par1']; ?></textarea>          <br>
                                    <textarea name="particular2"><?php echo $_GET['par2']; ?></textarea>          <br>
                                    <textarea name="particular3"><?php echo $_GET['par3']; ?></textarea>          <br>
                                    <textarea name="particular4"><?php echo $_GET['par4']; ?></textarea>          <br>
                                    <textarea name="particular5"><?php echo $_GET['par5']; ?></textarea>          <br>
                                    <textarea name="particular6"><?php echo $_GET['par6']; ?></textarea>          <br>
                                    <textarea name="particular7"><?php echo $_GET['par7']; ?></textarea>          <br>
                                    <textarea name="particular8"><?php echo $_GET['par8']; ?></textarea>          <br>
                                    <textarea name="particular9"><?php echo $_GET['par9']; ?></textarea>          <br>
                                    <textarea name="particular10"><?php echo $_GET['par10']; ?></textarea>            
                                    <br><hr>
                                        <h4>NTN 12098492108409</h4>

                                

                                    <td>
                                    <textarea    name="shipping_line1"><?php echo $_GET['shi1']; ?></textarea>     <br>
                                    <textarea    name="shipping_line2"><?php echo $_GET['shi2']; ?></textarea>     <br>
                                    <textarea    name="shipping_line3"><?php echo $_GET['shi3']; ?></textarea>     <br>
                                    <textarea    name="shipping_line4"><?php echo $_GET['shi4']; ?></textarea>     <br>
                                    <textarea    name="shipping_line5"><?php echo $_GET['shi5']; ?></textarea>     <br>
                                    <textarea    name="shipping_line6"><?php echo $_GET['shi6']; ?></textarea>     <br>
                                    <textarea    name="shipping_line7"><?php echo $_GET['shi7']; ?></textarea>     <br>
                                    <textarea    name="shipping_line8"><?php echo $_GET['shi8']; ?></textarea>     <br>
                                    <textarea    name="shipping_line9"><?php echo $_GET['shi9']; ?></textarea>     <br>
                                    <textarea    name="shipping_line10"><?php echo $_GET['shi10']; ?></textarea>      <hr>
                                    </td>

                                    <!--shipping_line closed-->

                                    <!--builti-->

                                    <td>
                                    <textarea    name="builty_number1"><?php echo $_GET['bui1']; ?></textarea>     <br>
                                    <textarea    name="builty_number2"><?php echo $_GET['bui2']; ?></textarea>     <br>
                                    <textarea    name="builty_number3"><?php echo $_GET['bui3']; ?></textarea>     <br>
                                    <textarea    name="builty_number4"><?php echo $_GET['bui4']; ?></textarea>     <br>
                                    <textarea    name="builty_number5"><?php echo $_GET['bui5']; ?></textarea>     <br>
                                    <textarea    name="builty_number6"><?php echo $_GET['bui6']; ?></textarea>     <br>
                                    <textarea    name="builty_number7"><?php echo $_GET['bui7']; ?></textarea>     <br>
                                    <textarea    name="builty_number8"><?php echo $_GET['bui8']; ?></textarea>     <br>
                                    <textarea    name="builty_number9"><?php echo $_GET['bui9']; ?></textarea>     <br>
                                    <textarea    name="builty_number10"><?php echo $_GET['bui10']; ?></textarea>      <hr>
                                    <lable>Received amount</lable><br><br><br>
                                    <lable>Tatal Amount</lable>
                                    </td>

                                    <!--builti closed-->

                                    <!--amount-->
                                    <td>
                                    <textarea class="prc"    name="amount10"><?php echo $_GET['amo1']; ?></textarea> <br>
                                    <textarea class="prc"    name="amount1"> <?php echo $_GET['amo2']; ?></textarea> <br>
                                    <textarea class="prc"   name="amount2"> <?php echo $_GET['amo3']; ?></textarea> <br>
                                    <textarea class="prc"    name="amount3"> <?php echo $_GET['amo4']; ?></textarea> <br>
                                    <textarea class="prc"    name="amount4"> <?php echo $_GET['amo5']; ?></textarea> <br>
                                    <textarea class="prc"    name="amount5"> <?php echo $_GET['amo6']; ?></textarea> <br>
                                    <textarea class="prc"    name="amount6"> <?php echo $_GET['amo7']; ?></textarea> <br>
                                    <textarea class="prc"    name="amount7"> <?php echo $_GET['amo8']; ?></textarea> <br>
                                    <textarea class="prc"    name="amount8"> <?php echo $_GET['amo9']; ?></textarea> <br>
                                    <textarea class="prc"    name="amount9"> <?php echo $_GET['amo10']; ?></textarea> <hr>
                                   <textarea name="rec_amount" > <?php echo $_GET['ramo']; ?></textarea> <br>
                                    <textarea id="result" name="total_amount"><?php echo $_GET['tamo']; ?></textarea>                                  
                                    <lable ><?php echo ""  ?>            </lable><br>
                                    <lable ><?php echo ""  ?>            </lable>
                                    </td>

                                        <!--amount closed-->
                    
                                </tr>
                                <td>
                                <button type = "submit" name="submit" class = "btn btn-info">Update</button>
                               <!-- <button type = "submit" name="submit1" class = "btn btn-info">Print</button>
                                <button type="submit" name="submit2" class = "btn btn-info" style="color:white">Go back</button>-->
                                <button type="submit" name="submit2" class = "btn btn-info" style="color:white"><a href="index.html " class="text-white">Go back</a></button>
                                </td>
                                </tbody>
                                </form>
                            
    
</div>


</table>

									
								</form>
								<script src="jquery.min.js"></script>
    <script>
        $('.form-group').on('input','.prc',function(){
            var totalSum = 0;
            $('.form-group .prc').each(function(){
                var inputVal = $(this).val();
                if($.isNumeric(inputVal)){
                    totalSum += parseFloat(inputVal);
                }
            });
            $('#result').val(totalSum);
        });
    </script>


 									<!--custom-Form End-->

									<!--custom-php start-->

<?php 


		
        if(isset($_POST['submit']))
{
    
    $array=array();
    $i= 1;
    $temp=0;
    while(isset($_POST['amount'."$i"])){

        $a =$_POST['amount'."$i"];
        if($a == "0"){

            $a = 0;
            array_push($array,$a);
            $inject=implode(',',$array);
            $i+=1;
        }
        else {
            array_push($array,$a);
            $inject=implode(',',$array);
            $i+=1;
        }
        //echo array_sum($inject);
    } 
    //$a1=$amount1;
    //$a2=$amount2;
    //$a3=$amount3;
    //$a4=$amount4;

            $date = $_POST['date'];
            $messer = $_POST['messer'];
            $to = $_POST['to'];
            $from = $_POST['from'];
            $datee = $_POST['datee'];
            $invoice_id = $_POST['invoice_id'];
            $truck_number1 = $_POST['truck_number1'];
            $truck_number2 = $_POST['truck_number2'];
            $truck_number3 = $_POST['truck_number3'];
            $truck_number4 = $_POST['truck_number4'];
            $truck_number5 = $_POST['truck_number5'];
            $truck_number6 = $_POST['truck_number6'];
            $truck_number7 = $_POST['truck_number7'];
            $truck_number8 = $_POST['truck_number8'];
            $truck_number9 = $_POST['truck_number9'];
            $truck_number10 = $_POST['truck_number10'];
            $Con_size1 = $_POST['Con_size1'];
            $Con_size2 = $_POST['Con_size2'];
            $Con_size3 = $_POST['Con_size3'];
            $Con_size4 = $_POST['Con_size4'];
            $Con_size5 = $_POST['Con_size5'];
            $Con_size6 = $_POST['Con_size6'];
            $Con_size7 = $_POST['Con_size7'];
            $Con_size8 = $_POST['Con_size8'];
            $Con_size9 = $_POST['Con_size9'];
            $Con_size10 = $_POST['Con_size10'];
            $shipping_line1 = $_POST['shipping_line1'];
            $shipping_line2 = $_POST['shipping_line2'];
            $shipping_line3 = $_POST['shipping_line3'];
            $shipping_line4 = $_POST['shipping_line4'];
            $shipping_line5 = $_POST['shipping_line5'];
            $shipping_line6 = $_POST['shipping_line7'];
            $shipping_line7 = $_POST['shipping_line8'];
            $shipping_line8 = $_POST['shipping_line9'];
            $shipping_line9 = $_POST['shipping_line9'];
            $shipping_line10 = $_POST['shipping_line10'];
            $builty_number1 = $_POST['builty_number1'];
            $builty_number2 = $_POST['builty_number2'];
            $builty_number3 = $_POST['builty_number3'];
            $builty_number4 = $_POST['builty_number4'];
            $builty_number5 = $_POST['builty_number5'];
            $builty_number6 = $_POST['builty_number6'];
            $builty_number7 = $_POST['builty_number7'];
            $builty_number8 = $_POST['builty_number8'];
            $builty_number9 = $_POST['builty_number9'];
            $builty_number10 = $_POST['builty_number10'];
            $particular1 = $_POST['particular1'];
            $particular2 = $_POST['particular2'];
            $particular3 = $_POST['particular3'];
            $particular4 = $_POST['particular4'];
            $particular5 = $_POST['particular5'];
            $particular6 = $_POST['particular6'];
            $particular7 = $_POST['particular7'];
            $particular8 = $_POST['particular8'];
            $particular9 = $_POST['particular9'];
            $particular10 = $_POST['particular10'];
            $amount1 = $_POST['amount1'];
            $amount2 = $_POST['amount2'];
            $amount3 = $_POST['amount3'];
            $amount4 = $_POST['amount4'];
            $amount5 = $_POST['amount5'];
            $amount6 = $_POST['amount6'];
            $amount7 = $_POST['amount7'];
            $amount8 = $_POST['amount8'];
            $amount9 = $_POST['amount9'];
            $amount10 = $_POST['amount10'];
            $rec_amount = $_POST['rec_amount'];
            $total_amount = $_POST['total_amount'];


           // $total=$amount+ $amount2+$amount3+$amount4+$amount5+$amount6+$amount7+$amount8+$amount9+$amount10;
           // $total=$total_amount;

    
    $sql = "SELECT * FROM invoice WHERE Invoice_ID='$invoice_id'";
    $result = $con->query($sql);
    echo $result->num_rows;
    if($result->num_rows == 0 )
    {

									$que = "INSERT INTO  invoice (In_date,In_messer,In_to_loc,In_from_loc,In1_date,Invoice_ID,In_truck1,In_truck2,In_truck3,In_truck4,In_truck5,In_truck6,In_truck7,In_truck8,In_truck9,In_truck10,In_con1,In_con2,In_con3,In_con4,In_con5,In_con6,In_con7,In_con8,In_con9,In_con10,In_ship1,In_ship2,In_ship3,In_ship4,In_ship5,In_ship6,In_ship7,In_ship8,In_ship9,In_ship10,In_builti1,In_builti2,In_builti3,In_builti4,In_builti5,In_builti6,In_builti7,In_builti8,In_builti9,In_builti10,In_part1,In_part2,In_part3,In_part4,In_part5,In_part6,In_part7,In_part8,In_part9,In_part10,In_amount1,In_amount2,In_amount3,In_amount4,In_amount5,In_amount6,In_amount7,In_amount8,In_amount9,In_amount10,In_rec_amo,In_total_amo ,amount) VALUES ('$date' ,'$messer' ,'$to' ,'$from' ,'$datee' ,'$invoice_id' ,'$truck_number1' ,'$truck_number2' ,'$truck_number3' ,'$truck_number4' ,'$truck_number5' ,'$truck_number6' ,'$truck_number7','$truck_number8' ,'$truck_number9' ,'$truck_number10' ,'$Con_size1' ,'$Con_size2' ,'$Con_size3' ,'$Con_size4' ,'$Con_size5' ,'$Con_size6' ,'$Con_size7' ,'$Con_size8' ,'$Con_size9' ,'$Con_size10' ,'$shipping_line1' ,'$shipping_line2' ,'$shipping_line3' ,'$shipping_line4' ,'$shipping_line5' ,'$shipping_line6' ,'$shipping_line7' ,'$shipping_line8' ,'$shipping_line9' ,'$shipping_line10' ,'$builty_number1' ,'$builty_number2' ,'$builty_number3' ,'$builty_number4' ,'$builty_number5' ,'$builty_number6' ,'$builty_number7' ,'$builty_number8' ,'$builty_number9' ,'$builty_number10' ,'$particular1' ,'$particular2' ,'$particular3' ,'$particular4' ,'$particular5' ,'$particular6' ,'$particular7' ,'$particular8' ,'$particular9' ,'$particular10' ,'$amount1' ,'$amount2' ,'$amount3' ,'$amount4' ,'$amount5' ,'$amount6' ,'$amount7' ,'$amount8' ,'$amount9' ,'$amount10' ,'$rec_amount' ,'$total_amount' ,'$inject')";
                                    header('location:displayinvoice.php');
                                    if (mysqli_query($con,$que))
                                     {
                                    //echo "updated"; 
                                    header('location:displayinvoice.php');
                                     }
									   
                                                
										else
											{
											echo "not updated"; 
											//header('location:displayinvoice.php');
											}
					

}
else{
    echo "xxxx";
}
}
?>
                                <!--custom-php end-->
 </div></div>
</body>
</html>










