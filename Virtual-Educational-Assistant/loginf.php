<?php
$error='';
session_start();
if(isset($_POST['submit'])){
    
    
        $user=$_POST['email'];
        $pass=$_POST['pass'];

        $conn=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($conn,"project");
        $query= mysqli_query($conn,"SELECT * FROM student WHERE pass='$pass' AND email='$user'");

        $ro=mysqli_fetch_assoc($query);
        $rows= mysqli_num_rows($query);
        if($rows == 1){
            $_SESSION['login_user'] = $_POST['email'];
            //$_SESSION['pic'] = "p.png";
            $_SESSION['pic'] = $ro['pic'];
            $_SESSION['firstname'] = $ro['firstname'];
            $_SESSION['last'] = $ro['lastname'];
            header("Location: profile.php");

        }
        else{
            $error="Username or Password is Invalid";
        }
        mysqli_close($conn);

    
}

?>