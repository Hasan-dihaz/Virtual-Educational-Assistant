
<?php
    session_start();
    $error='';
    if(isset($_POST['submit'])){
           
          $conn=mysqli_connect("localhost","root","");
          $db=mysqli_select_db($conn,"project");
           
           $user_feedback   = $_POST['feedback'];

            if(isset($_SESSION['login_user'])){
                $query= mysqli_query($conn, "INSERT INTO feedback (user_email, user_feedback)
                VALUES ('$_SESSION[login_user]', '$user_feedback')");

                if($query==true){
                  header("Location: index.php");
                }else{
                    $error="Try again";

                }
               
            }
            else{
              $error="Please login as a student";
            }
            mysqli_close($conn);
    }
?>



<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
</head>
<body>
	<center>
<img src="image/fb.jpg" width="400" height="400">
</center><br><br>
      <center>
        <form action="" method="post">    
            <label> Write your feedback <br><textarea cols="100" rows="10" name="feedback"></textarea></label><br>
            <br>
            <input type="submit" name="submit" value="post"><br>
            <span style="color:red;"><?php echo $error; ?></span>
                  
        </form>   <br>
        <a href="index.php">Go to homepage</a><br>
        </center> 
        
</body>
</html>