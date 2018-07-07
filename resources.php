<!DOCTYPE html>
<html lang="en">
<head>
  <title>Resource Allocation</title>
  <style>
  body {
     background-image: url("cwf.png");
     background-color: #cccccc;
     background-repeat: no-repeat;
     background-size:auto;
     background-position:bottom;
  }
      h1
		{
		  font-size: 32px;
		  font-weight: 300;
		  color: #4c4c4c;
		  text-align: center;
		  padding-top: 10px;
		  margin-top: 20px;
		  margin-bottom: 10px;
		}
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1 align="center" style="color:teal">Careworks Foundation</h1>
  <h2 align="center" style="color:tomato">Resource Allocation</h2><br><hr><br>
    <center>
  <form action="insert3.php" method="post">
    <div class="form-group">
      <label for="sid">School Id</label>
      <input type="text" style="width: 350px;" class="form-control" id="sid" placeholder="Enter School Id" name="sid">
    </div>
    <div class="form-group">
      <label for="school_name">School Name</label>
      <input type="text" style="width: 350px;" class="form-control" id="school_name" placeholder="Enter School Name" name="school_name" required>
    </div>
    <div class="form-group">
      <label for="infrastructure">infrastructure</label>
      <input type="text" style="width: 350px;" class="form-control" id="infrastructure" placeholder="Enter the money allocated for infrastructure" name="infrastructure">
    </div>
    <div class="form-group">
      <label for="class_environment">Classroom Environment</label>
      <input type="text" style="width: 350px;" class="form-control" id="class_environment" placeholder="Enter the money allocated for Classroom Environment" name="class_environment" required>
    </div>
    <div class="form-group">
      <label for="health">Health</label>
      <input type="text" style="width: 350px;" class="form-control" id="health" placeholder="Enter the money allocated for Health" name="health" required>
    </div>
    <div class="form-group">
      <label for="academic_support">Academic Support Program</label>
      <input type="text" style="width: 350px;" class="form-control" id="academic_support" placeholder="Enter the money allocated for Academic Support" name="academic_support" required>
    </div>
    <div class="form-group">
      <label for="stakeholder">Stakeholder Engagement</label>
      <input type="text" style="width: 350px;" class="form-control" id="stakeholder" placeholder="Enter the money allocated for Stakeholder Engagement" name="stakeholder" required>
    </div>
    <div class="form-group">
      <label for="teacher_mentor">Techer Mentorship</label>
      <input type="text" style="width: 350px;" class="form-control" id="teacher_mentor" placeholder="Enter the money allocated for Teacher Mentorship" name="teacher_mentor" required>
    </div><br><br>
   <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form></center><hr><br><br>
</div>

</body>
</html>