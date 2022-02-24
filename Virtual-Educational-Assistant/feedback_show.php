<?php
  include "navbar.php";
  //session_start();
?>


<!DOCTYPE html>
<html>
<head>
<title>Subject List</title>
<style>
   .design{
       width: 1000px;
       margin: 0 auto;
   }
</style>
</head>
<body>
    <h2 style="text-align:center;">User Feedback</h2>
    <div class="design">
    <?php
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"project");
    $query= mysqli_query($conn,"SELECT * FROM `feedback`");

    echo "<table class='table table-bordered table-hover'>";
    echo "<tr style='background-color:blue;text-align:center;'>";
        echo "<th>"; echo "User'S email address"; echo "</th>";
        echo "<th>"; echo "Feedback"; echo "</th>";
    echo "</tr>";

    while($row=mysqli_fetch_assoc($query)){
        echo "<tr style='background-color:white;text-align:center;'>";
           echo "<td>"; echo $row['user_email']; echo "</td>";
           echo "<td>"; echo $row['user_feedback']; echo "</td>";
        echo "</tr>";

    }
    echo "</table>";
       
    ?>
    </div>

</body>
</html>