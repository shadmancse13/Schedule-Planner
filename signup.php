<?php
   session_start();
   include("db.php");
   if($_SERVER['REQUEST_METHOD'] == "POST"){

    $first_name =$_POST["first_name"];
    $last_name = $_POST["last_name"];
    $gender = $_POST["gender"];
    $cnumber= $_POST["cnumber"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(!empty($email) && !empty($password) && !is_numeric($email))
  {
     $query="insert into form(first_name,last_name,gender,cnumber,email,password) values ('$first_name','$last_name','$gender','$cnumber','$email','$password')";
      mysqli_query($con,$query);
      echo "<script type='text/javascript'> alert('sucessfully register')</script>";
  }
   else{
      echo "<script type='text/javascript'> alert('please enter some vaild information')</script>";
  }
   }
   
?>

<!DOCTYPE html>
<html> <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Schedule Planner</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="signup">
<h1>Sign Up</h1>
<h4>It's free and only takes a minute</h4>
<form method="POST">
<label>First Name</label>
<input type="text" name="first_name" required> 
<label>Last Name</label>
<input type="text" name="last_name" required> 
<label>Gender</label>
<input type="text" name="gender" required>

<label>Contact number</label>
 <input type="text" name="cnumber" required>
<label>Email</label>
<input type="email" name="email" required>

<label>Password</label>
<input type="password" name="password" required>

<input type="submit" name="" value="Submit"|>
</form>
<p>By clicking the Sign Up button, you agree to our<br> 
<a href="">Terms and Condition</a> and <a href="#">Policy Privacy<
</p> 
<p>Already have an account? <a href="login.php">Login Here</a></p>
</div>
</body>
</html>