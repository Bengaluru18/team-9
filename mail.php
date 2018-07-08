<?php
header('Location: index.html');
echo "<script>alert('Thank you for contacting us!')</script>";
  if (isset($_POST['send']))  {
  
  //Email information
  $my_email = "vinitshahdeo@gmail.com";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  //send email
  $ok=mail($my_email, "$name", $message, "From:" . $email);
  
  if($ok)
  {
      echo "<script>alert('Thank you for contacting us! Love from Careworks Foundation:)')</script>";
     
  }
else
{
      echo "<script>alert('Message sending failed. Sorry!')</script>";
    
      }
  }
?>