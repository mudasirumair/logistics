<?php 
ini_set('display_errors', '1');
require('db.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['Username']) || empty($_POST['Password']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from users where username='".$_POST['Username']."' and password='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['username']=$_POST['Username'];
                header("location:index.html");
            }
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>