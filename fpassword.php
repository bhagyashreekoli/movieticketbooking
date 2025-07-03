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
  margin-right: 30px;
}
.wrapper form .row input {
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 10px;
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
margin-left: 0px;
  width: 55px;
  height: 100%;
  color: #fff;
  font-size: 22px;
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
.wrapper form .button{
    margin-left: 50px;
    margin-right: 50px;
}
  </style>
</head>
<body>

  <div class="wrapper">
    <div class="title"><span>Reset Password </span></div>
    <form id="form3" method="post">
      <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Email" required />
      </div>
      <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="New Password" required />
      </div>
      <div class="row button">
        <input type="submit" value="Save Changes" onclick="change()"/>
      </div>
    </form>
  </div>
  <script>
    function change(){
        window.location.assign("login.php");
    }
  </script>
</body>
</html>