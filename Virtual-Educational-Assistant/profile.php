<?php
  include "navbar.php";
  //session_start();
?>


<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
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
       <form action="edit.php" method="post">
          <button class="btn btn-defult" style="float:right; color:white;" name="submit">Edit</button>
       </form>
       <div class="design">
           <?php
           $conn=mysqli_connect("localhost","root","");
           $db=mysqli_select_db($conn,"project");
           $query= mysqli_query($conn,"SELECT * FROM student WHERE email='$_SESSION[login_user]'");
           $row=mysqli_fetch_assoc($query);

           ?>
           <h2 style="text-align:center;">My Profile</h2>
           <?php
               echo "<div style='text-align: center'><img class='img-circle profile-img' height=80 width=80 src='image/".$row['pic']."'></div>";
            ?>
           <h5 style='text-align: center'>
              <?php echo $row['firstname']; echo "  "; echo $row['lastname']; ?>
            </h5>
            <?php
               echo "<table>";

                   echo "<tr>";
                      echo "<td>";
                        echo "<b> First Name: </b>";
                      echo "</td>";
                      echo "<td>";
                        echo $row['firstname'];
                      echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                      echo "<td>";
                        echo "<b> Last Name: </b>";
                      echo "</td>";
                      echo "<td>";
                        echo $row['lastname'];
                      echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                      echo "<td>";
                        echo "<b> Contact No: </b>";
                      echo "</td>";
                      echo "<td>";
                        echo $row['phn'];
                      echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                      echo "<td>";
                        echo "<b> Email Address: </b>";
                      echo "</td>";
                      echo "<td>";
                        echo $row['email'];
                      echo "</td>";
                    echo "</tr>";

                echo "</table";

            ?>
        </div>
           
    </div>   
       
</body>
</html>