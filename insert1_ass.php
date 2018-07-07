<?php
include_once 'dbcon.php';
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$floor = $_POST['floor'];
$plaster = $_POST['plaster'];
    
$water = $_POST['water'];
$painting = $_POST['painting'];
    $rennovation = $_POST['rennovation'];
    $approval = $_POST['approval'];

    
    $remarks=$_POST['remarks'];
//    
   
//$sid=2;
$q3=mysqli_query($con,"INSERT INTO assessment VALUES  ('$name' , '$floor' , '$plaster','$water' ,'$painting', '$rennovation', '$approval', '$remarks')");
    if($q3)
        echo "<center><h1>Successfully entered the data! <a href='logout.php'>Click to logout</a><br><a href='index.php' >Go back to home</a></h1></center>";
    else
        echo "Error";
}
//if($q3)
//
//
////header("location:account.php?q=1");
//}
    
?>

