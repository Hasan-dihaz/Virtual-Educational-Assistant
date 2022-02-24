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
       width: 1070px;
       margin: 0 auto;
   }
</style>
</head>
<body>
    <h2 style="text-align:center;">List of teachers</h2>
    <div class="design">
    <?php
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"project");
    $query= mysqli_query($conn,"SELECT * FROM `teacher`");

    echo "<table class='table table-bordered table-hover' >";
    echo "<tr style='background-color:blue;'>";
        echo "<th>"; echo "Student Name"; echo "</th>";
        echo "<th>"; echo "Email Address"; echo "</th>";
        echo "<th>"; echo "Contact No."; echo "</th>";
        echo "<th>"; echo "Educational Qualification"; echo "</th>";
        echo "<th>"; echo "Field of Interest"; echo "</th>";
        echo "<th>"; echo "Status"; echo "</th>";
    echo "</tr>";

    while($row=mysqli_fetch_assoc($query)){
        echo "<tr style='background-color:white;'>";
           echo "<td>"; echo $row['firstname']; echo " "; echo $row['lastname']; echo "</td>";
           echo "<td>"; echo $row['email']; echo "</td>";
           echo "<td>"; echo $row['phn']; echo "</td>";
           echo "<td>"; echo $row['educational_qualification']; echo "</td>";
           echo "<td>"; echo $row['field_of_interest']; echo "</td>";
           echo "<td>"; echo $row['status']; echo "</td>";
        echo "</tr>";

    }
    echo "</table>";  
    ?>
    </div>

</body>
</html>