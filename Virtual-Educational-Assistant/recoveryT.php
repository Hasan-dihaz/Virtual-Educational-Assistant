<?php
include("recvaliT.php");
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
.recovery{
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
<div class="recovery">
<h1 align="center">Recovery</h1>
<form action="" method="post" style="text-align:center;">
<input type= "text" placeholder="email address" id="remail" name="remail"><br/><br/>
<input type= "password" placeholder="Password-five char, at least one digit" id="rpass" name="rpass" required pattern="^(?=.*\d)[A-Za-z\d]{5}$"><br/><br/>
<input type= "password" placeholder="confirm-password" id="repass" name="repass"><br/><br/>
<input type= "text" placeholder="write your answer" name="answer"><br/><br/>
<input type="submit" value="submit" name="rsubmit">
<span style="color:red;"><?php echo $error; ?></span>
</body>
</html>