<?php
$error='';
session_start();
if(isset($_POST['submit'])){
    
    
        $user=$_POST['email'];
        $pass=$_POST['pass'];

        $conn=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($conn,"project");
        $query= mysqli_query($conn,"SELECT * FROM teacher WHERE pass='$pass' AND email='$user'");

        $rows= mysqli_num_rows($query);
        if($rows == 1){
            $_SESSION['login_tec'] = $_POST['email'];
            //$_SESSION['pic'] = "p.png";
            header("Location: profileT.php");

        }
        else{
            $error="Username or is Invalid";
        }
        mysqli_close($conn);

    
}

?>