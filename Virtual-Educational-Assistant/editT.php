<?php
   include "navbar.php";
?>

<?php
    //session_start();
    $error='';
    if(isset($_POST['edit'])){
           
          $conn=mysqli_connect("localhost","root","");
          $db=mysqli_select_db($conn,"project");

          $image = $_FILES['image']['name'];
          $target = "image/".basename($image);
          move_uploaded_file($_FILES['image']['tmp_name'], $target);
           
           $firstname   = $_POST['firstname'];
           $lastname    = $_POST['lastname'];
           $phn         = $_POST['phn'];
           $education   = $_POST['education'];
           $field       = $_POST['field'];
           $status      = $_POST['status'];
           $meet_link   = $_POST['meet'];
           $image       = $_FILES['image']['name'];

            if(isset($_SESSION['login_tec'])){
                $query= mysqli_query($conn," UPDATE `teacher` SET `pic`='$image',`firstname`='$firstname',`lastname`='$lastname',`phn`='$phn',`educational_qualification`='$education',`field_of_interest`='$field',`status`='$status',`meet_link`='$meet_link' WHERE email='$_SESSION[login_tec]'");

                if($query==true){
                    header("Location: profileT.php");
                }else{
                    $error="Try again";

                }
               
            }
            mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html>
<head>
<head>
    <title>edit profile</title>
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
.edit{
width: 370px;
margin: 50px auto;
font: cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius: 10px;
border:2px solid #ccc;
padding: 10px 40px 25px;
margin-top: 70px;
}
input[type=text],input[type=password]{
width: 99%;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
padding-left: 5px;
font-size:16px;
font-family: cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
input[type=submit]{
width: 100%;
background-color: #009;
color: #fff;
border: 1px solid #ccc;
padding: 10px;
font-size:20px;
cursor: pointer;
margin-bottom: 15px;
}



</style>

<div class="edit">
  <h3 align="center" style="color:white;">Edit your profile</h3>
  <?php
   $conn=mysqli_connect("localhost","root","");
   $db=mysqli_select_db($conn,"project");
    $query1= mysqli_query($conn,"SELECT * FROM `teacher` WHERE email='$_SESSION[login_tec]'");
    while($row=mysqli_fetch_assoc($query1)){
        $first=$row['firstname'];
        $last=$row['lastname'];
        $phone=$row['phn'];
        $edu=$row['educational_qualification'];
        $fld=$row['field_of_interest'];
        $sta=$row['status'];
        $meet=$row['meet_link'];
    }
    ?>

   <form action="" method="post" style="text-align:center;" enctype="multipart/form-data">
        <hr class="mb-2">
        <input class="form-control" type="file" name="image">
        <input class="form-control" type="text" name="firstname" value="<?php echo $first; ?>" >
        <input class="form-control" type="text" name="lastname" value="<?php echo $last; ?>">
        <input class="form-control" type="text" name="phn" value="<?php echo $phone; ?>">
        <input class="form-control" type="text" name="education" value="<?php echo $edu; ?>">
        <input class="form-control" type="text" name="field" value="<?php echo $fld; ?>">
        <input class="form-control" type="text" name="status" value="<?php echo $sta; ?>">
        <input class="form-control" type="text" name="meet" value="<?php echo $meet; ?>">
        <hr class="mb-2">

        <input class="btn btn-primary" type="submit" id="register" name="edit" value="Save">
        <span style="color:red;"><?php echo $error; ?></span>

    </form>
</div>

</body>
</html>
