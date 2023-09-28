
<?php 
$_GET['inv'];
$invoice = $_GET['inv'];

require('db.php');

$query = "SELECT * FROM invoice where Invoice_ID=$invoice";
$result = $con->query($query);
if ($result) 
                        {
                            $display = $result->fetch_assoc();
                        }
                        else
                        {
                            echo "error";
                        }

$query = "SELECT * FROM add_messer";
$result1 = mysqli_query($con,$query);

$query2 = "SELECT * FROM add_loc";
$result2 = mysqli_query($con,$query2);

$query3 = "SELECT * FROM add_loc";
$result3 = mysqli_query($con,$query3);


$query = "DELETE FROM invoice WHERE Invoice_ID=$invoice ";
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
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

      


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
            <h1 class="text-primery text-center" class="col-lg-6"> New Abid Goods<br> Create Invoice </h1><br>
        </div>
</head>



<body>
    

<div>
    <br><br><br>
</div>
<form action="update1script.php" method="POST" class="form-group">
<table class="table  col-lg-12">
                        <tr>
                            <td>
    <label class="label text-info"><b>Date</b>&nbsp;&nbsp;&nbsp;&nbsp;</label>

                                    <input type="Date" name="date" value="<?php echo $display['In_date'];  ?>">
                            </td>
    <td><label class="label text-info"><b>Messer</b>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                          
                                    <input type="text" name="messer" value="<?php echo $display['In_messer'] ;?>">                      
                            </td>
    <td><label class="label text-info"><b>  From  </b>&nbsp;&nbsp;&nbsp;&nbsp;</label> </h3>
                           
                                    <input type="text" name="to" value="<?php echo $display['In_to_loc'] ?>"> 
                            </td> 
    <td><label class="label text-info"><b> TO </b>&nbsp;&nbsp;&nbsp;&nbsp;</label></h3>
                            
                                    <input type="text" name="from" value="<?php echo $display['In_from_loc'] ?>">                       
                            </td>
                        </tr>
</table>


<table class="table table-bordered text-info" border="bold">
                            <thead>
                                <tr class="bg-dark text-info text-center" >
                                    <th>Date</th>
                                    <th>Invoice ID</th>
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


                                    <!--date-->        
                                    <td>
                                    <input type="text" name="datee" value="<?php echo $display['In1_date']; ?>">
                                    </td>
                                    <!--date end-->

                                    <!-- <textarea rows="10"  cols="30" name="particuler"></textarea> -->
                                    <td>
                                    <textarea rows="1"  cols="7" name="invoice_id" required><?php echo $display['Invoice_ID']; ?></textarea>
                                    </td>
                                    


                                    <!--truck_number-->
                                    

                                    <td class="text-warning">
                                    <textarea rows="1"  cols="7" name="truck_number1" placeholder="ABC-123" ><?php echo $display['In_truck1']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number2" ><?php echo $display['In_truck2']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number3" ><?php echo $display['In_truck3']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number4" ><?php echo $display['In_truck4']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number5" ><?php echo $display['In_truck5']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number6" ><?php echo $display['In_truck6']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number7" ><?php echo $display['In_truck7']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number8" ><?php echo $display['In_truck8']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number9" ><?php echo $display['In_truck9']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number10" ><?php echo $display['In_truck10']; ?></textarea><hr>
                                    
                                    </td>

                                    <!--truck closed-->

                                    <!--"Con_size1-->

                                    <td>
                                    <textarea rows="1"  cols="7" name="Con_size1" placeholder="10" ><?php echo $display['In_con1']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="Con_size2" ></textarea><?php echo $display['In_con2']; ?><br>
                                    <textarea rows="1"  cols="7" name="Con_size3" ></textarea><?php echo $display['In_con3']; ?><br>
                                    <textarea rows="1"  cols="7" name="Con_size4" ></textarea><?php echo $display['In_con4']; ?><br>
                                    <textarea rows="1"  cols="7" name="Con_size5" ></textarea><?php echo $display['In_con5']; ?><br>
                                    <textarea rows="1"  cols="7" name="Con_size6" ></textarea><?php echo $display['In_con6']; ?><br>
                                    <textarea rows="1"  cols="7" name="Con_size7" ></textarea><?php echo $display['In_con7']; ?><br>
                                    <textarea rows="1"  cols="7" name="Con_size8" ></textarea><?php echo $display['In_con8']; ?><br>
                                    <textarea rows="1"  cols="7" name="Con_size9" ></textarea><?php echo $display['In_con9']; ?><br>
                                    <textarea rows="1"  cols="7" name="Con_size10" ></textarea><?php echo $display['In_con10']; ?><hr>
                                    </td>

                                    <!--"Con_size1 closed-->

                                    <!-- <textarea rows="10"  cols="30" name="particuler"></textarea> -->

                                    <td>
                                    <textarea rows="1" cols="30" name="particular1" placeholder="Any thing"><?php echo $display['In_part1']; ?></textarea><br>
                                    <textarea rows="1" cols="30" name="particular2"><?php echo $display['In_part2']; ?></textarea><br>
                                    <textarea rows="1" cols="30" name="particular3"><?php echo $display['In_part3']; ?></textarea><br>
                                    <textarea rows="1" cols="30" name="particular4"><?php echo $display['In_part4']; ?></textarea><br>
                                    <textarea rows="1" cols="30" name="particular5"><?php echo $display['In_part5']; ?></textarea><br>
                                    <textarea rows="1" cols="30" name="particular6"><?php echo $display['In_part6']; ?></textarea><br>
                                    <textarea rows="1" cols="30" name="particular7"><?php echo $display['In_part7']; ?></textarea><br>
                                    <textarea rows="1" cols="30" name="particular8"><?php echo $display['In_part8']; ?></textarea><br>
                                    <textarea rows="1" cols="30" name="particular9"><?php echo $display['In_part9']; ?></textarea><br>
                                    <textarea rows="1" cols="30" name="particular10"><?php echo $display['In_part10']; ?></textarea>
                                    <hr>
                                        <h4>NTN 12098492108409</h4>

                                

                                    <td>
                                    <textarea rows="1"  cols="7" name="shipping_line1" placeholder="123456"><?php echo $display['In_ship1']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="shipping_line2"></textarea><?php echo $display['In_ship2']; ?><br>
                                    <textarea rows="1"  cols="7" name="shipping_line3"></textarea><?php echo $display['In_ship3']; ?><br>
                                    <textarea rows="1"  cols="7" name="shipping_line4"></textarea><?php echo $display['In_ship4']; ?><br>
                                    <textarea rows="1"  cols="7" name="shipping_line5"></textarea><?php echo $display['In_ship5']; ?><br>
                                    <textarea rows="1"  cols="7" name="shipping_line6"></textarea><?php echo $display['In_ship6']; ?><br>
                                    <textarea rows="1"  cols="7" name="shipping_line7"></textarea><?php echo $display['In_ship7']; ?><br>
                                    <textarea rows="1"  cols="7" name="shipping_line8"></textarea><?php echo $display['In_ship8']; ?><br>
                                    <textarea rows="1"  cols="7" name="shipping_line9"></textarea><?php echo $display['In_ship9']; ?><br>
                                    <textarea rows="1"  cols="7" name="shipping_line10"></textarea><?php echo $display['In_ship10']; ?><hr>
                                    </td>

                                    <!--shipping_line closed-->

                                    <!--builti-->

                                    <td>
                                    <textarea rows="1"  cols="7" name="builty_number1" placeholder="111111"><?php echo $display['In_builti1']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number2"><?php echo $display['In_builti2']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number3"><?php echo $display['In_builti3']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number4"><?php echo $display['In_builti4']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number5"><?php echo $display['In_builti5']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number6"><?php echo $display['In_builti6']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number7"><?php echo $display['In_builti7']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number8"><?php echo $display['In_builti8']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number9"><?php echo $display['In_builti9']; ?></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number10"><?php echo $display['In_builti10']; ?></textarea><hr>
                                  
                                    <label>Received Amount</label><br><br>
                                    <label>Total Amount</label>
                                    </td>

                                    <!--builti closed-->

                                    <!--amount-->
                                    <td>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount1" placeholder="Enter Amount"><?php echo $display['In_amount1']; ?></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount2"><?php echo $display['In_amount2']; ?></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount3"><?php echo $display['In_amount3']; ?></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount4"><?php echo $display['In_amount4']; ?></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount5"><?php echo $display['In_amount5']; ?></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount6"><?php echo $display['In_amount6']; ?></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount7"><?php echo $display['In_amount7']; ?></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount8"><?php echo $display['In_amount8']; ?></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount9"><?php echo $display['In_amount9']; ?></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount10"><?php echo $display['In_amount10']; ?></textarea><hr>
                                    <input  name="rec_amount" placeholder="Enter rec amo"><br><br>
                                    <input id="result" name="total_amount" value="">                                  
                                    <label ><?php echo ""  ?></label><br>
                                    <label ><?php echo ""  ?></label>
                                    </td>

                                        <!--amount closed-->
                    
                                </tr>
                                 <td>
                                <button type = "submit" name="submit" class = "btn btn-info">Update</button>
                               <!--<button type = "submit" name="submit1" class = "btn btn-danger">Print&Update</button>-->
                                
                                </td>
                                 <td>
                                
                                <button type="submit" name="submit2" class = "btn btn-success" style="color:white"><a href="index.html " class="text-white">Go back</a></button>
                                </td>
                                </tbody>
                                
                            
    
</div>


</table></form>

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