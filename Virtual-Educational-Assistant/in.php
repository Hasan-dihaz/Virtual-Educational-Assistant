<?php
include("loginf.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>login</title>
<style>
body{
    background-image: url("image/background.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 1;
    opacity: 0.8;
}
.login{
width: 360px;
margin: 50px auto;
font: cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius: 10px;
border:2px solid #ccc;
padding: 10px 40px 25px;
margin-top: 70px;
}
input[type=text],input[type=password]{
width: 99%;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
font-size:16px;
font-family: cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
input[type=submit]{
width: 100%;
background-color: #009;
color: #fff;
border: 1px solid #ccc;
padding: 10px;
font-size:20px;
cursor: pointer;
margin-bottom: 15px;
}
</style>
</head>
<body>
<div class="login">
<h1 align="center">Login</h1>
<form action="" method="post" style="text-align:center;">
<span style="color:red;"><?php echo $error; ?></span>
<input type= "text" placeholder="email address" id="email" name="email"><br/><br/>
<input type= "password" placeholder="password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Login" name="submit">
<div class="mt-4">
<div class="d-flex justify-content-center links"> 
Don't have an account? <a href="SignUp.php" style="color:white;font-size:18px;" class="ml-2">SignUp</a>
</div> 
<div class="d-flex justify-content-center">
<a href="recovery.php" style="color:red;font-size:18px;">Forget your password?</a>
</div>
</div>

</body>
</html>