<?php
  include "navbar.php";
  //session_start();
?>


<!DOCTYPE html>
<html>
<head>
<title>Admin Profile</title>
<style>
   .design{
       width: 400px;
       margin: 0 auto;
       background-color:white;
       top: 40% !important;
       down: 30%;
   }
</style>
</head>
<body style="background-color: gray;">
  <div class="container">
       <form action="#" method="post">
          <button class="btn btn-defult" style="float:right; color:white;" name="submit">Edit</button>
       </form>
       <div class="design">
           <?php
           $conn=mysqli_connect("localhost","root","");
           $db=mysqli_select_db($conn,"project");
           $query= mysqli_query($conn,"SELECT * FROM admin WHERE user_name='$_SESSION[login_admin]'");
           $row=mysqli_fetch_assoc($query);

           ?>
           <h2 style="text-align:center;">My Profile</h2>
           <?php
               echo "<div style='text-align: center'><img class='img-circle profile-img' height=80 width=80 src='image/".$row['pic']."'></div>";
            ?>
           <h5 style='text-align: center'>
              <?php echo $row['user_name']; ?>
            </h5>
        </div>
           
    </div>   
       
</body>
</html>