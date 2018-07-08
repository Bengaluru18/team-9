<!DOCTYPE html>
<html>
<head>
<style>
body {

   background-color: #cccccc;

}
button{
	color:white;
	background-color:green;
	border-radius:3px;
}
a { color: #FF0000; }
#example2 {
    border: 1px transparent;
    padding: 10px;
    border-radius: 5px 2px;
    box-shadow:4px 4px 4px #888;
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: #2196F3;
  padding: 10px;
}
#ima{
margin-top: 200px;

}
    h1{
        color:teal;
    }
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
    .text{
        color:tomato;
        font-weight: 900;
    }
</style>
</head>
<body>
<?php
include_once 'dbcon.php';
    ?>
<h1 align="center">Careworks Foundation</h1>
<h2 align="center">Review Application</h2>

<hr>
<?php
//if(isset($_POST['view']))
//{
 // echo "<center><table>";
  $qry="select name,address,phone from school";
  $rs=mysqli_query($con,$qry)
  or die(mysql_error());
  $count=mysqli_num_fields($rs);
  echo "<div class='grid-container'>
  <div class='grid-item text'>School Name</div>
  <div class='grid-item text'>Location</div>
  <div class='grid-item text'>Contact</div>";
  while($row=mysqli_fetch_array($rs))
  {
    echo "<tr>";
    for($i=0;$i<$count;$i++)
    { 
          echo "<div class='grid-item'>$row[$i]</div>";
    }
    echo "</tr>";
  }
  
    
    echo "<br><br>";
    echo "<hr>";
  
  
//}
?>

</div>
<div id="ima" align="center"><img src="logo.png" alt="background"></div>
</body>
</html>
