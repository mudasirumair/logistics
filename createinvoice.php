<?php
ini_set('display_errors', '1');
require('db.php');
//include("session.php");
//include("auth.php");
session_start();

    if(isset($_SESSION['username']))
    {
        echo ' Well Come ' . $_SESSION['username'].'<br/>';
    }
    else
    {
        header("location:login.php");
    }
/////
$query = "SELECT * FROM add_messer";
$result = mysqli_query($con,$query);

$query2 = "SELECT * FROM add_loc";
$result2 = mysqli_query($con,$query2);

$query3 = "SELECT * FROM add_loc";
$result3 = mysqli_query($con,$query3);

?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

      
 
        <title>Create Invoice</title>

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
<form action="createinvoice_script.php" method="POST" class="form-group">
<table class="table  col-lg-12">
    
    <td>
    <label class="label text-info"><b>Date</b>&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="Date" name="date">
    </td>
    <td><label class="label text-info"><b>Messer</b>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <select name="messer" size="1"></h3>
                            <?php
                                while ($row1 = $result->fetch_array())
                                    {
                            ?>
                                        <option  ><?php echo $row1['In_messer'] ?></option>
                            <?php
                                    }
                                
                            ?>
                              </select></td>
    <td><label class="label text-info"><b>  From  </b>&nbsp;&nbsp;&nbsp;&nbsp;</label>        <select name="to" size="1"></h3>
                            <?php
                                while ($row2 = $result2->fetch_array())
                                    {
                            ?>
                                        <option  ><?php echo $row2['In_location'] ?></option>
                            <?php
                                    }
                                
                            ?>
                              </select></td> 
    <td><label class="label text-info"><b> TO  </b>&nbsp;&nbsp;&nbsp;&nbsp;</label><select name="from" size="1"></h3>
                            <?php
                                while ($row3 = $result3->fetch_array())
                                    {
                            ?>
                            <option  ><?php echo $row3['In_location'] ?></option>
                            <?php
                                    }
                                
                            ?>
                              </select></td></tr>
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
    								<input type="text" name="datee">
    								</td>
                                    <!--date end-->

                                    <!-- <textarea rows="10"  cols="30" name="particuler"></textarea> -->
                                    <td>
                                    <textarea rows="1"  cols="7" name="invoice_id" required></textarea>
                                    </td>
                                    


                                    <!--truck_number-->
                                    

                                    <td class="text-warning">
                                    <textarea rows="1"  cols="7" name="truck_number1" placeholder="ABC-123" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number2" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number3" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number4" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number5" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number6" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number7" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number8" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number9" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="truck_number10" ></textarea><hr>
                                    
                                    </td>

                                    <!--truck closed-->

                                    <!--"Con_size1-->

                                    <td>
                                    <textarea rows="1"  cols="7" name="Con_size1" placeholder="10" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="Con_size2" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="Con_size3" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="Con_size4" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="Con_size5" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="Con_size6" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="Con_size7" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="Con_size8" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="Con_size9" ></textarea><br>
                                    <textarea rows="1"  cols="7" name="Con_size10" ></textarea><hr>
                                    </td>

                                    <!--"Con_size1 closed-->

                                    <!-- <textarea rows="10"  cols="30" name="particuler"></textarea> -->

                                    <td>
                                    <textarea rows="1" cols="30" name="particular1" placeholder="Any thing"></textarea><br>
                                    <textarea rows="1" cols="30" name="particular2"></textarea><br>
                                    <textarea rows="1" cols="30" name="particular3"></textarea><br>
                                    <textarea rows="1" cols="30" name="particular4"></textarea><br>
                                    <textarea rows="1" cols="30" name="particular5"></textarea><br>
                                    <textarea rows="1" cols="30" name="particular6"></textarea><br>
                                    <textarea rows="1" cols="30" name="particular7"></textarea><br>
                                    <textarea rows="1" cols="30" name="particular8"></textarea><br>
                                    <textarea rows="1" cols="30" name="particular9"></textarea><br>
                                    <textarea rows="1" cols="30" name="particular10"></textarea>
                                    <hr>
                                        <h4>NTN NO: 7618518-0</h4>

                                

                                    <td>
                                    <textarea rows="1"  cols="7" name="shipping_line1" placeholder="123456"></textarea><br>
                                    <textarea rows="1"  cols="7" name="shipping_line2"></textarea><br>
                                    <textarea rows="1"  cols="7" name="shipping_line3"></textarea><br>
                                    <textarea rows="1"  cols="7" name="shipping_line4"></textarea><br>
                                    <textarea rows="1"  cols="7" name="shipping_line5"></textarea><br>
                                    <textarea rows="1"  cols="7" name="shipping_line6"></textarea><br>
                                    <textarea rows="1"  cols="7" name="shipping_line7"></textarea><br>
                                    <textarea rows="1"  cols="7" name="shipping_line8"></textarea><br>
                                    <textarea rows="1"  cols="7" name="shipping_line9"></textarea><br>
                                    <textarea rows="1"  cols="7" name="shipping_line10"></textarea><hr>
                                    </td>

                                    <!--shipping_line closed-->

                                    <!--builti-->

                                    <td>
                                    <textarea rows="1"  cols="7" name="builty_number1" placeholder="111111"></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number2"></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number3"></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number4"></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number5"></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number6"></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number7"></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number8"></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number9"></textarea><br>
                                    <textarea rows="1"  cols="7" name="builty_number10"></textarea><hr>
                                  
                                    <label>Received Amount</label><br><br>
                                    <label>Total Amount</label>
                                    </td>

                                    <!--builti closed-->

                                    <!--amount-->
                                    <td>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount1" placeholder="Enter Amount"></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount2"></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount3"></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount4"></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount5"></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount6"></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount7"></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount8"></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount9"></textarea><br>
                                    <textarea class="prc" rows="1"  cols="20"   name="amount10"></textarea><hr>
                                    <input  name="rec_amount" placeholder="Enter rec amo"><br><br>
                                    <input id="result" name="total_amount" placeholder="Auto" value="">                                  
                                    <label ><?php echo ""  ?></label><br>
                                    <label ><?php echo ""  ?></label>
                                    </td>

                                        <!--amount closed-->
                    
                                </tr>
                                 <td>
                                <button type = "submit" name="submit" class = "btn btn-info">Save</button>
                                <button type = "submit" name="submit1" class = "btn btn-danger">Print</button>
                                
                                </td>
                                 <td>
                                
                                <button type="submit" name="submit2" class = "btn btn-success" style="color:white"><a href="index.html " class="text-white">Go back</a></button>
                                </td>
                                </tbody>
                                </form>
                            
    
</div>


</table>

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