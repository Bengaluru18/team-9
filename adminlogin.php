<?php
session_start();
if(isset($_SESSION["email"])){
session_destroy();
}
include_once 'dbcon.php';
//$ref=@$_GET['q'];
$email = $_POST['email'];
$password = $_POST['password'];


$result = mysqli_query($con,"SELECT name FROM users WHERE email = '$email' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
$name = $row['name'];
}
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
}
if(isset($_SESSION["name"]))
header("location:admin_homepage.html");
else
echo "<h1 style='color:red'>wrong username or password</h1>";
?>