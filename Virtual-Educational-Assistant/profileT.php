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
       width: 450px;
       margin: 0 auto;
       background-color:white;
       top: 40% !important;
       down: 30%;
   }
</style>
</head>
<body style="background-color: gray;">
  <div class="container">
       <form action="editT.php" method="post">
          <button class="btn btn-defult" style="float:right; color:white;" name="submit">Edit</button>
       </form>
       <div class="design">
           <?php
           $conn=mysqli_connect("localhost","root","");
           $db=mysqli_select_db($conn,"project");
           $query= mysqli_query($conn,"SELECT * FROM teacher WHERE email='$_SESSION[login_tec]'");
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

                    echo "<tr>";
                      echo "<td>";
                        echo "<b> Educational Qualification: </b>";
                      echo "</td>";
                      echo "<td>";
                        echo $row['educational_qualification'];
                      echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                      echo "<td>";
                        echo "<b> Field of Interest: </b>";
                      echo "</td>";
                      echo "<td>";
                        echo $row['field_of_interest'];
                      echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                      echo "<td>";
                        echo "<b> Status: </b>";
                      echo "</td>";
                      echo "<td>";
                        echo $row['status'];
                      echo "</td>";
                    echo "</tr>";
                    echo "<tr>";
                      echo "<td>";
                        echo "<b> Meet Link: </b>";
                      echo "</td>";
                      echo "<td>";
                        echo $row['meet_link'];
                      echo "</td>";
                    echo "</tr>";

                echo "</table";
            ?>
        </div>
           
    </div>   
       
</body>
</html>