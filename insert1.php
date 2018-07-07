<?php
include_once 'dbConnection.php';
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$add = $_POST['add'];
$hm = $_POST['hm_name'];
$phone = $_POST['phone'];
$comp = $_POST['computer'];
$library = $_POST['library'];

$chemicals = $_POST['chemicals'];
$water = $_POST['water'];
$sanitation=$_POST['sanitation'];
$handwash=$_POST['handwash'];
$ngo=$_POST['ngo'];
$health=$_POST['health'];

$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$name' , '$add' , '$hm','$phone' ,$comp, $library, $chemicals, $water, $sanitation, $handwash,$health)");
if($q3)


header("location:account.php?q=1");
?>
