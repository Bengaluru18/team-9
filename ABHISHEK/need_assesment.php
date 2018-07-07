<!DOCTYPE html>
<html lang="en">
<head>
  <title>Need Assessment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Questionnaire</h2>
  <br>
  <form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">S-id</label>
      <div class="form-group col-md-3">
        <input type="text" class="form-control" id="sid" placeholder="Enter sid" name="sid">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="schoolname">School Name</label>
      <div class="form-group col-md-3">          
        <input type="text" class="form-control" id="schoolname" placeholder="Enter schoolname" name="schoolname">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="locality">Locality</label>
      <div class="form-group col-md-3">          
        <input type="text" class="form-control" id="locality" placeholder="Enter locality" name="locality">
      </div>
    </div>


       <div class="form-group">
      <label class="control-label col-sm-2" for="address">Address</label>
      <div class="form-group col-md-3">          
        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
      </div>
    </div>


        <div class="form-group">
      <label class="control-label col-sm-2" for="totalclasses">Total Classes</label>
      <div class="form-group col-md-3">          
        <input type="number" class="form-control" id="totalclasses" placeholder="Enter totalclasses" name="totalclasses">
      </div>
    </div> 


        <div class="form-group">
      <label class="control-label col-sm-2" for="modeofinstruction">Mode Of Instruction</label>
      <div class="form-group col-md-3">          
         <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">KANNADA</a></li>
    <li><a href="#">KANNADA AND ENGLISH</a></li>
    <li><a href="#">TAMIL</a></li>
    <li><a href="#">URDU</a></li>
    <li><a href="#">TELGU</a></li>
    <li><a href="#">OTHERS</a></li>

  </ul>
</div> 
      </div>
    </div> 

    <div class="form-group">
      <label class="control-label col-sm-2" for="numberofstudents">Number of students</label>
      <div class="form-group col-md-3">          
        <input type="number" class="form-control" id="numberofstudents" placeholder="Enter numberofstudents" name="numberofstudents">
      </div>
    </div> 

    <div class="form-group">
      <label class="control-label col-sm-2" for="headmastername">Head Master Name</label>
      <div class="form-group col-md-3">          
        <input type="text" class="form-control" id="headmastername" placeholder="Enter headmastername" name="headmastername">
      </div>
    </div> 

    <div class="form-group">
      <label class="control-label col-sm-2" for="phonenumber">Phone Number</label>
      <div class="form-group col-md-3">          
        <input type="text" class="form-control" id="phonenumber" placeholder="Enter phonenumber" name="phonenumber">
      </div>
    </div> 

    <div class="form-group">
      <label class="control-label col-sm-2" for="teachermentorship">Teacher Mentorship</label>
      <div class="form-group col-md-3">          
       <!--  <input type="radio" class="form-control" id="teachermentorship" placeholder="Enter teachermentorship" name="teachermentorship"> -->
        <input type="radio" name="yes" value="yes"> YES
<input type="radio" name="yes" value="no"> NO
      </div>
    </div> 

    <div class="form-group">
      <label class="control-label col-sm-2" for="stakeholderengagement">Stakeholder Engagement</label>
      <div class="form-group col-md-3">          
        <input type="text" class="form-control" id="stakeholderengagement" placeholder="Enter stakeholderengagement" name="stakeholderengagement">
      </div>
    </div> 

    <div class="form-group">
      <label class="control-label col-sm-2" for="phonenumber">Phone Number</label>
      <div class="form-group col-md-3">          
        <input type="text" class="form-control" id="phonenumber" placeholder="Enter phonenumber" name="phonenumber">
      </div>
    </div> 

    <div class="form-group">
      <label class="control-label col-sm-2" for="health">Health</label>
      <input type="radio" name="yes" value="yes"> YES
<input type="radio" name="yes" value="no"> NO
      </div>
    </div> 

    <div class="form-group">
      <label class="control-label col-sm-2" for="ngo">NGO</label>
      <div class="form-group col-md-3">          
        <input type="text" class="form-control" id="ngo" placeholder="Enter ngo" name="ngo">
      </div>
    </div> 
      <br>

      </div>
    </div>
    <div class="form-group">        
      <div class="form-group col-md-3">
        <button type="submit" id="submit"  class="btn btn-primary">Submit</button>
        <br><br><br><br>
      </div>
    </div>
  </form>
</div>


<!-- **********************Optional JavaScript********************** -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>




</body>
</html>
