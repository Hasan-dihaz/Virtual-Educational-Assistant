<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="UTF-8">
<meta name= "viewport" content= "width=device-width", initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.min.css">
<!---google font--->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,700;1,500&display=swap" rel="stylesheet">
<!---custom css--->
<link rel="stylesheet" href="css/style.css">

<title>Virtual-Educational-Assistant</title>

</head>

<body>

<!---Start Navigation--->

<nav class="navbar navbar-expand-sm navbar-dark">
  <a class="navbar-brand" href="index.php">vEducational-Assistant</a>
  <span class="navbar-text">Learn and Implement</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav custom-nav pl-5">
      <li class= "nav-item custom-nav-item"><a href="index.php" class="nav-link">Home </a></li>
      <?php
      if(isset($_SESSION['login_user'])){
      
      echo '<li class= "nav-item custom-nav-item"><a href="profile.php" class="nav-link">Profile</a></li>';}
      else if(isset($_SESSION['login_tec'])){
      
      echo '<li class= "nav-item custom-nav-item"><a href="profileT.php" class="nav-link">Profile</a></li>';} ?>
      <li class= "nav-item custom-nav-item"><a href="#" class="nav-link">Courses</a>
           <div class="sub-menu">
                <ul>
                    <li class= "nav-item custom-nav-item"><a href="field_cse.php" class="nav-link">CSE</a></li>
                    <li class= "nav-item custom-nav-item"><a href="field_math.php" class="nav-link">Math</a></li>
                    <li class= "nav-item custom-nav-item"><a href="field_physics.php" class="nav-link">Physics</a></li>
                </ul>
            </div>
      </li>
      <li class= "nav-item custom-nav-item"><a href="#" class="nav-link">Login</a>
            <div class="sub-menu">
                <ul>
                    <li class= "nav-item custom-nav-item"><a href="login.php" class="nav-link">Teacher</a></li>
                    <li class= "nav-item custom-nav-item"><a href="in.php" class="nav-link">Student</a></li>
                </ul>
            </div>
      </li>
      <li class= "nav-item custom-nav-item"><a href="#" class="nav-link">SignUp</a>
            <div class="sub-menu">
                <ul>
                    <li class= "nav-item custom-nav-item"><a href="SignUpT.php" class="nav-link">Teacher</a></li>
                    <li class= "nav-item custom-nav-item"><a href="SignUp.php" class="nav-link">Student</a></li>
                </ul>
            </div>
        </li>

      <li class= "nav-item custom-nav-item"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
      <li class= "nav-item custom-nav-item"><a href="feedback.php" class="nav-link">Feedback</a></li>
      <li class= "nav-item custom-nav-item"><a href="about.php" class="nav-link">About</a></li>
      <li class= "nav-item custom-nav-item"><a href="login_admin.php" class="nav-link">Admin</a></li>
      <li class= "nav-item custom-nav-item">
        <div class="search-box pl-3">
          <form action="search.php" method="post"><input class="search-txt" type="text" name="search" placeholder="search" maxlength="25">
          <button type="submit" name="submit" href="search.php"><i class="fas fa-search"></i></button></form>
        </div>
      </li>
    </ul>
  </div>
</nav>

<!---end Navigation--->

<!---start background--->
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
.heading{color: black; position: absolute; top: 35%; left: 35%; z-index: 2; widows: 100%; text-align: center;}
.headings{color: gray; position: absolute; top: 40%; left: 47%; z-index: 2; widows: 100%; text-align: center;}
.btn-danger{color: white; position: absolute; top: 45%; left: 49%; z-index: 2; widows: 100%; text-align: center;}
</style>
<div>
    <h2 class="heading">Welcome to vEducational-Assistant <h2>
    <h6 class="headings">Learn and Implement <h6>
    <a href="#" class="btn btn-danger">Get Started</a>
</div>
<!---end background--->

<!---start about section--->

<!---end about section--->

<!---start footer--->

<!---end footer--->


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script type="text/javascript" src="js/ajaxrequest.js"></script>

</body>
</html>