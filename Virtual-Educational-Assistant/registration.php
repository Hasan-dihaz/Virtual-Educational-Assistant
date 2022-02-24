<?php
require_once('config.php');
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



</style>

<div>
    <form method="post">
        <div class= "container">
            <div class="row"> 
                <div class= "col-sm-3">
                   <h1>SignUp</h1>
                   <p>Fill up the form with correct values.</p>
                   <hr class="mb-3">
                   <label for="firstname"><b>First Name</b></lable>
                   <input class="form-control" type="text" name="firstname" required>

                   <label for="lastname"><b>Last Name</b></lable>
                   <input class="form-control" type="text" name="lastname" required>

                   <label for="email"><b>Email Address</b></lable>
                   <input class="form-control" type="text" name="email" required>

                   <label for="phn"><b>Phone No</b></lable>
                   <input class="form-control" type="text" name="phn" required>

                   <label for="pass"><b>Password</b></lable>
                   <input class="form-control" type="password" name="pass" required>

                   <label for="ques"><b>write something</b></lable>
                   <input class="form-control" type="text" name="ques" required>

                   <hr class="mb-3">

                   <input class="btn btn-primary" type="submit" id="register" name="create" value="SignUp">
                </div>
            </div>
        </div>

    </form>
</div>  

<div>
    <?php
    if(isset($_POST['create'])){
        $firstname   = $_POST['firstname'];
        $lastname    = $_POST['lastname'];
        $email       = $_POST['email'];
        $phn         = $_POST['phn'];
        $pass        = $_POST['pass'];
        $ques        = $_POST['ques'];

        $sql = "INSERT INTO student(firstname,lastname,email,phn,pass,ques) VALUES(?,?,?,?,?,?)";
        $stminsert = $db->prepare($sql);
        $result = $stminsert->execute([$firstname,$lastname,$email,$phn,$pass,$ques]);
        echo  "my falto website";
        if($result){
            echo 'Successfully saved.';
            header("Location: in.php");
        } else{
            echo "There were errors.";
        }
    }
    ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>