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
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
    textarea{
        background: transparent;
        border: 2px solid teal;
    }
</style>
<script>

    function approveSchool(var i)
    {
        document.getElementBy("id"+i).style.display=none;
    }
</script>
</head>
<body>
    <?php
include_once 'dbcon.php';
    ?>
<h1 align="center">Careworks Foundation</h1>
<h2 align="center">Review Application</h2>
    
<h4><center>Remarks and Progress</center></h4>

<?php
//if(isset($_POST['view']))
//{
  echo "<center><table>";
  $qry="select name,address,hm_name,phone from school";
  $a=array("NAME","ADDRESS","HEAD MASTER","PHONE");
  $rs=mysqli_query($con,$qry)
  or die(mysql_error());
  $count=mysqli_num_fields($rs);
  //echo "<table border='3'><tr><th>NAME</th><th>LOCALITY</th><th>HEAD MASTER'S NAME</th><th>PHONE</th></tr>";
  while($row=mysqli_fetch_array($rs))
  {
      echo "<br><br>";
      echo "<center><table border='3'>";

    for($i=0;$i<$count;$i++)
    { 
          echo "<tr><td>$a[$i]</td><td>$row[$i]</td></tr>";
    }
      echo "<tr><center><textarea rows='10' cols='60' placeholder='Enter remarks and progress!'></textarea><center></tr>";
      echo "</table></center>";
      echo "<br><br> <br><center>PROGRESS AND REVIEW</center>";
  }
    
    
    
?>


<div id="ima" align="center"><img src="cwf.png" alt="background"></div>
</body>
</html>
