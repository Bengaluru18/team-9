<?php
include_once 'dbcon.php';
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$school = $_POST['sid'];
$infrastructure = $_POST['infrastructure'];
    
$classroom = $_POST['classroom'];
$health = $_POST['health'];
$academic=$_POST['academic'];
$stakeholder=$_POST['stakeholder'];
$mentorship=$_POST['mentorship'];
        
$q=mysqli_query($con,"INSERT INTO resources VALUES  ('$school','$name' ,'$infrastructure' ,'$classroom','$health','$academic','$stakeholder','$mentorship')");
    if($q)
    {
        header("location:asses2.php");
    }
    else
        echo "Error";
}
//if($q3)
//
//
////header("location:account.php?q=1");
//}
    
?>
