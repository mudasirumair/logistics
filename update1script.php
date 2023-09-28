<?php 
require('db.php');
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

        if($ins = $con->query($que))
        {
            //echo "Success !";
            echo "<script type='text/javascript'>alert('success')</script>";

           //echo $total;
           //echo $a1;
           // echo array_sum(3,3,1);
//$total='amount1'+'amount2';
          header("location: index.html");
        }
        else
             echo "<script type='text/javascript'>alert('Data Already Exist')</script>";
    }
    else{
        echo "Data Already Exist";
    }
}
//for save end













if(isset($_POST['submit1']))
{
    $array=array();
    $i= 1;
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
    }








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

    $sql = "SELECT * FROM invoice WHERE Invoice_ID='$invoice_id";
    $result = $con->query($sql);
    echo $result->num_rows;
    if($result->num_rows == 0 )
    {
          $que = "INSERT INTO  invoice (In_date,In_messer,In_to_loc,In_from_loc,In1_date,Invoice_ID,In_truck1,In_truck2,In_truck3,In_truck4,In_truck5,In_truck6,In_truck7,In_truck8,In_truck9,In_truck10,In_con1,In_con2,In_con3,In_con4,In_con5,In_con6,In_con7,In_con8,In_con9,In_con10,In_ship1,In_ship2,In_ship3,In_ship4,In_ship5,In_ship6,In_ship7,In_ship8,In_ship9,In_ship10,In_builti1,In_builti2,In_builti3,In_builti4,In_builti5,In_builti6,In_builti7,In_builti8,In_builti9,In_builti10,In_part1,In_part2,In_part3,In_part4,In_part5,In_part6,In_part7,In_part8,In_part9,In_part10,In_amount1,In_amount2,In_amount3,In_amount4,In_amount5,In_amount6,In_amount7,In_amount8,In_amount9,In_amount10,In_rec_amo,In_total_amo ,amount) VALUES ('$date' ,'$messer' ,'$to' ,'$from' ,'$datee','$invoice_id' ,'$truck_number1' ,'$truck_number2' ,'$truck_number3' ,'$truck_number4' ,'$truck_number5' ,'$truck_number6' ,'$truck_number7','$truck_number8' ,'$truck_number9' ,'$truck_number10' ,'$Con_size1' ,'$Con_size2' ,'$Con_size3' ,'$Con_size4' ,'$Con_size5' ,'$Con_size6' ,'$Con_size7' ,'$Con_size8' ,'$Con_size9' ,'$Con_size10' ,'$shipping_line1' ,'$shipping_line2' ,'$shipping_line3' ,'$shipping_line4' ,'$shipping_line5' ,'$shipping_line6' ,'$shipping_line7' ,'$shipping_line8' ,'$shipping_line9' ,'$shipping_line10' ,'$builty_number1' ,'$builty_number2' ,'$builty_number3' ,'$builty_number4' ,'$builty_number5' ,'$builty_number6' ,'$builty_number7' ,'$builty_number8' ,'$builty_number9' ,'$builty_number10' ,'$particular1' ,'$particular2' ,'$particular3' ,'$particular4' ,'$particular5' ,'$particular6' ,'$particular7' ,'$particular8' ,'$particular9' ,'$particular10' ,'$amount1' ,'$amount2' ,'$amount3' ,'$amount4' ,'$amount5' ,'$amount6' ,'$amount7' ,'$amount8' ,'$amount9' ,'$amount10' ,'$rec_amount' ,'$total_amount' ,'$inject')";
        if($ins = $con->query($que))
        {
            //echo "Success !";
           // echo "<script type='text/javascript'>alert('success')</script>";
            header("location: printinvoice1.php");
        }
        else
            echo "not insert";
    }
    else{
        echo "Data Already Exist";
    }
}
////for print

//for print end

?>
			?>


								<!--custom-php end-->










