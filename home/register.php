<html>
	<style>
		
		form
		{
			margin-top:50px;	
			margin-left:100px;
		}
		h1
		{
			color:white;
			background-color:black;
		}



		input[type=text], select, textarea,input[type=password]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

/* Style the container */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
	</style>
	
	<h1 align="center">Please Register</h1>
	<body>

 <div class="container">
  <form action="register.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Full Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="Name" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="pno">Contact Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="Phone" name="pno" placeholder="Your contact number..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Email address</label>
      </div>
      <div class="col-75">
        <input type="text" id="Email" name="email" placeholder="Your Email address..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="area">Area/Region</label>
      </div>
      <div class="col-75">
        <input type="text" id="Area" name="area" placeholder="Your Area here..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="pin">Pincode</label>
      </div>
      <div class="col-75">
        <input type="text" id="Pincode" name="pin" placeholder="Your Pincode here..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="pwd">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="Password" name="pwd" placeholder="Your Password here..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="aoru">Account Type</label>
      </div>
      <div class="col-75">
        <select id="AorU" name="aoru">
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
      </div>
    </div>
    <br><br>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div> 
	</body>
</html>
