<?php
$error='';
session_start();
if(isset($_POST['submit'])){
    
    
        $user=$_POST['user_name'];
        $pass=$_POST['pass'];

        $conn=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($conn,"project");
        $query= mysqli_query($conn,"SELECT * FROM admin WHERE pass='$pass' AND user_name='$user'");

        $rows= mysqli_num_rows($query);
        if($rows == 1){
            $_SESSION['login_admin'] = $_POST['user_name'];
            header("Location: admin_home.php");

        }
        else{
            $error="Username or is Invalid";
        }
        mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin login</title>
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
<input type= "text" placeholder="user name" id="user_name" name="user_name"><br/><br/>
<input type= "password" placeholder="password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Login" name="submit">
</div>

</body>
</html>