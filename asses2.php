<!DOCTYPE html>
<html lang="en">
<head>
  <title>Carewords foundation</title>
  <style>
  body {
     background-image: url("cwf.png");
     background-color: #cccccc;
     background-repeat: no-repeat;
     background-size:auto;
     background-position:bottom;

  }
      .container h1{
            color: teal;
            font-family: Montserrat,sans-serif;
        }
        .container h2,h3{
            color: tomato;
            font-family: Montserrat,sans-serif;
        }
        button{
            padding: 10px;
            margin: 10px;
            background-color: tomato;
            font-family: cursive,sans-serif;
            border-radius: 6px;
        }  
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
     <?php
 include_once 'dbcon.php';
session_start();

  if(!(isset($_SESSION['email']))){
header("location:index.php");
  }
else
{
    $name=$_SESSION['name'];
    echo "<center><h3>Hello $name ! Kindly fill the form</h3></center>";
    echo "<br> <p>Click here for <a href='logout.php'>login</a>";
}
?>
<body background image>

<div class="container">
  <h1 align="center">Careworks Foundation</h1>
  <h2 align="center">NEED ASSESSMENT</h2>
    <center>
  <form action="insert1_ass.php" method="post">
    <div class="form-group">
      <label for="sid">School Name</label>
      <input type="text" style="width: 150px;" class="form-control" id="sid" placeholder="Enter School Id" name="name">
    </div>

    <div class="form-group">
      <label for="flooring">Flooring Condition</label><br>
      <input type="radio" name="floor" value="Good" > GOOD
      <input type="radio" name="floor" value="Bad"> BAD
      <input type="radio" name="floor" value="Worse"> WORSE
    </div>
    <div class="form-group">
      <label for="plastering">Plastering Condition</label><br>
      <input type="radio" name="plaster" value="Good" > GOOD
      <input type="radio" name="plaster" value="Bad"> BAD
      <input type="radio" name="plaster" value="Worse"> WORSE
    </div>
    <div class="form-group">
      <label for="waterproof">Waterproofing</label><br>
      <input type="radio" name="water" value="good" > GOOD
      <input type="radio" name="water" value="bad"> BAD
      <input type="radio" name="water" value="worse"> WORSE
    </div>
    <div class="form-group">
      <label for="ext_painting">PAINTING</label><br>
      <input type="radio" name="painting" value="conducted" > CONDUCTED
      <input type="radio" name="painting" value="not conducted"> NOT CONDUCTED
    </div>
    <div class="form-group">
      <label for="ren_require">Rennovation Required</label><br>
      <input type="radio" name="rennovation" value="yes"> YES
      <input type="radio" name="rennovation" value="no"> NO
    </div>
    <div class="form-group">
      <label for="approve">Requires Approval</label><br>
      <input type="radio" name="approval" value="yes"> YES
      <input type="radio" name="approval" value="no"> NO
    </div>
    <div class="form-group">
      <label for="response">Remarks</label>
      <input type="text" style="height: 150px; width:300px;" class="form-control" id="response" placeholder="Enter the Remarks" name="remarks">
    </div>    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form></center><br><hr><br>
</div>

</body>
</html>
