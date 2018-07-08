<?php
include_once 'dbcon.php';
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$contact = $_POST['contact'];
$email = $_POST['email'];
    
$area = $_POST['area'];
$pin = $_POST['pin'];
$password = $_POST['password'];
  //$password=md5($password);
     
//$sid=2;
$q3=mysqli_query($con,"INSERT INTO volunteer VALUES  ('$name' , '$contact' , '$email','$area' ,'$pin', '$password')");
    if($q3)
        echo "<br><br><center><h3>Successfully registered! Go back and <a href='login.html'>click</a> here to login!</h3></center>";
    else
        echo "Error";
}
//if($q3)
//
//
////header("location:account.php?q=1");
//}
    
?>

