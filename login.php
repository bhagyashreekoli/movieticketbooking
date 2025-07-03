<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
   
.wrapper{
  
  margin-top: 40px;
  max-width: 430px;
  width: 400px;
  height: 450;
  margin-left: 450px;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper .title {
  height: 50px;
  background: #4070f4;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form {
  padding: 25px 35px;
}
.wrapper form .row {
  height: 45px;
  margin-top: 15px;
  position: relative;
}
.wrapper form .row input {
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 70px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 18px;
  transition: all 0.3s ease;
}
form .row input:focus {
  border-color: #4070f4;
}
form .row input::placeholder {
  color: #999;
}
.wrapper form .row i {
  position: absolute;
  width: 55px;
  height: 100%;
  color: #fff;
  font-size: 22px;
  background: #4070f4;
  border: 1px solid #4070f4;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass {
  margin-top: 12px;
}
.wrapper form .pass a {
  color: #4070f4;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover {
  text-decoration: underline;
}
.wrapper form .button input {
  margin-top: 10px;
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: #4070f4;
  border: 1px solid #4070f4;
  cursor: pointer;
}
form .button input:hover {
  background: #4070f4;
}
.wrapper form .signup-link {
  text-align: center;
  margin-top: 35px;
  font-size: 17px;
}
.wrapper form .signup-link a {
  color: #4070f4;
  text-decoration: none;
}
form .signup-link a:hover {
  text-decoration: underline;
}
  </style>
</head>
<body>
<?php include('header.php') ?>

  <div class="wrapper">
    <div class="title"><span>Login </span></div>
    <form id="form" method="post">
      <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" name="email" placeholder="Email" required />
      </div>
      <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required />
      </div>
      <div class="pass"><a href="fpassword.php">Forgot password?</a></div>
      <div class="row button">
        <input type="submit" value="Login"  name="login"/>
      </div>
      <div class="signup-link">Not a member? <a href="register.php">Signup now</a></div>
    </form>
  </div>
</body>
</html>
<?php

if(isset($_POST['login'])){

  $email    = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `register` WHERE email = '$email' and password = '$password' ";

  $rs = mysqli_query($con, $sql);
  
  if(mysqli_num_rows($rs) > 0){
     $data = mysqli_fetch_array($rs);

     $role = $data['roteype'];

     $_SESSION['lid'] = $data['rid'];
     $_SESSION['type'] = $role;

     if($role == 1){
      echo "<script> alert('admin login successfully!!') </script>";
      echo "<script> window.location.href='admin/index.php';  </script>";
     }
     else if($role == 2){
      echo "<script> alert('user login successfully!!') </script>";
      echo "<script> window.location.href='index.php';  </script>";
     }

  }else{
    echo "<script> alert('Invalid email & password') </script>";
  }

}


?>