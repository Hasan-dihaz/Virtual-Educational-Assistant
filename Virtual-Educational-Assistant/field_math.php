<?php
  include "navbar.php";
  //session_start();
?>


<!DOCTYPE html>
<html>
<head>
<title>Subject List</title>
</head>
<body>
    <h2 style="text-align:center;">List of Subjects</h2>
    <?php
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"project");
    $_SESSION['field_name'] = "Math";
    $query= mysqli_query($conn,"SELECT * FROM `subject`,`teacher` WHERE subject.t_id = teacher.id AND field_name='$_SESSION[field_name]'");

    echo "<table class='table table-bordered table-hover' >";
    echo "<tr style='background-color:blue;'>";
        echo "<th>"; echo "Subject Code"; echo "</th>";
        echo "<th>"; echo "Subject Name"; echo "</th>";
        echo "<th>"; echo "Teacher Name"; echo "</th>";
        echo "<th>"; echo "Email Address"; echo "</th>";
        echo "<th>"; echo "Tutor Fees (TK)"; echo "</th>";
        echo "<th>"; echo "Staus"; echo "</th>";
        if(isset($_SESSION['login_user'])){
          echo "<th>"; echo "Enrollment"; echo "</th>";
        }
    echo "</tr>";

    while($row=mysqli_fetch_assoc($query)){
        echo "<tr style='background-color:white;'>";
           echo "<td>"; echo $row['sub_code']; echo "</td>";
           echo "<td>"; echo $row['sub_name']; echo "</td>";
           echo "<td>"; echo $row['firstname']; echo " "; echo $row['lastname']; echo "</td>";
           echo "<td>"; echo $row['email']; echo "</td>";
           echo "<td>"; echo $row['tutor_fees']; echo "</td>";
           echo "<td>"; echo $row['status']; echo "</td>";
           if(isset($_SESSION['login_user'])){?>
             
             <td><a href="pay.php?enroll=<?php echo $row['sub_code']; ?>">Enroll</a></td>

            <?php }
        echo "</tr>";
    }

    if(isset($_POST['submit'])){
      $conn=mysqli_connect("localhost","root","");
      $db=mysqli_select_db($conn,"project");
      
      $s_code   = $_POST['s_code'];
      $s_name   = $_POST['s_name'];
      $te_id    = $_POST['te_id'];
      $t_fees   = $_POST['t_fees'];
      echo $s_code;
      $query1= mysqli_query($conn, "INSERT INTO subject (sub_code, sub_name,field_name,t_id,tutor_fees)
      VALUES ('$s_code', '$s_name','Math',$te_id,$t_fees)");

      if($query1==true){
        header("Location: field_math.php");
      }else{
          echo "Try again";

      }
    }

    if(isset($_SESSION['login_admin'])){ ?>
    <tr style='background-color:white;'>
    <form action="" method="post"> 
    <td><input name="s_code" placeholder="Subject code" required></td>
    <td><input name="s_name" placeholder="Subject name" required></td>
    <td><input name="te_id" placeholder="teacher id" required></td>
    <td><input name="t_fees" placeholder="tutor fees" required></td>
    <td><input class="btn btn-primary" type="submit" name="submit" value="Add" style="size:120px;"></td>
    </form>
    <?php
    echo "</tr>";
    }
    

    echo "</table>";
       
    ?>

</body>
</html>