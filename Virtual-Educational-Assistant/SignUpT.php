<?php
require_once('SignUpPT.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

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
.signup{
width: 370px;
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

<div class="signup">
  <h1 align="center" style="color:white;">Create account</h1>
   <form action="" method="post" style="text-align:center;">
        <p style="color:white;">Fill up the form with correct values.</p>
        <hr class="mb-2">
        <input class="form-control" type="text" name="firstnamet" placeholder="Firstname" required>
        <input class="form-control" type="text" name="lastnamet" placeholder="Lastname" required>
        <input class="form-control" type="text" name="emailt" placeholder="Email" required>
        <span style="color:red;font-size:13px;"><?php echo $error; ?></span>
        <input class="form-control" type="text" name="phnt" placeholder="Phone number-BD" required pattern="01[3-9][0-9]{8}" required>
        <input class="form-control" type="password" name="passt" placeholder="Password-five char, at least one digit"  required pattern="^(?=.*\d)[A-Za-z\d]{5}$" required>
        <input class="form-control" type="text" name="quest" placeholder="Write something" required>
        <input class="form-control" type="text" name="educational_qualification" placeholder="Educational qualification" required>
        <input class="form-control" type="text" name="field_of_interest" placeholder="Field of interest" required>
        <hr class="mb-2">

        <input class="btn btn-primary" type="submit" id="register" name="create" value="SignUp">

    </form>
</div>  


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>