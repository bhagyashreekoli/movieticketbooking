<?php include("connect.php"); ?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <link rel="stylesheet" href="style.css">
   </head>
   <style>


.wrapper{
  
  margin-top: 40px;
  max-width: 430px;
  width: 400px;
  margin-left: 450px;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 25px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #4070f4;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 40px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}

form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}

.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #4070f4;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #0e4bf1;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
   </style>
<body>
<?php include('header.php') ?>

  <div class="wrapper">
    <h2>Registration</h2>
    <form action="register.php" id="form2" method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" name="name" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
        title="Must contain atleast one number, uppercase and lowercase letter.Atleast 8 characters" >
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name="cpassword" id="cpassword" required>
        <p id="msg"> </p>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" name="register" value="Register Now" onclick="check()">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
      </div>
      <script>
        function check(){
    let password = document.getElementById("password").value;
    let cpassword = document.getElementById("cpassword").value;
    let message = document.getElementById("msg");

    if(password.lenght != 0){
        if(password != cpassword){
            
            message.textContent = "*password does not match";
            message.style.color = "red";
        }
    }
   
}
      </script>
</body>
</html>
<?php

if(isset($_POST['register'])){

  $name     = $_POST['name'];
  $email    = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  //print_r($_POST);

  $sql = "INSERT INTO `register`(`name`, `email`, `password`, `cpassword`, `roteype`) VALUES ('$name','$email','$password','$cpassword','2')";

  if(mysqli_query($con, $sql)){
     echo "<script> alert('user register successfully!!') </script>";
     echo "<script> window.location.href='login.php';  </script>";

  }else{
    echo "<script> alert('user not register')";
  }

}

?>