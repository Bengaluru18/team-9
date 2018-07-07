<?php
include_once 'dbcon.php';
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$add = $_POST['add'];
$hm = $_POST['hm_name'];
    
$phone = $_POST['phone'];
$comp = $_POST['computer'];
//if(isset($_POST['library']))
//    $library=1;
//   else
//   $library =0;
    
    $library=$_POST['library'];
//    if($ans=="yes")
//        $library=1;
//    else
//        $library=0;
//
//if(isset($_POST['science']))
//   $chemicals = 1;
//   else
//   $chemicals=0;
    $chemicals=$_POST['science'];

   $water=$_POST['water'];

   
      $sanitation=$_POST['sanitation'];
      $handwash=$_POST['handwash'];
   
$ngo=$_POST['ngo'];
        

       $health=$_POST['health'];
   
//$sid=2;
$q3=mysqli_query($con,"INSERT INTO school VALUES  ('$name' , '$add' , '$hm','$phone' ,'$comp', '$library', '$chemicals', '$water', '$sanitation', '$handwash','$ngo','$health')");
    if($q3)
        echo "Success";
    else
        echo "Error";
}
//if($q3)
//
//
////header("location:account.php?q=1");
//}
    
?>
