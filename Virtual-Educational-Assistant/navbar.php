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
      <?php
      if(isset($_SESSION['login_admin'])){
        echo '<li ><a href="admin_home.php" class="nav-link" style="color:white;" >Home </a></li>';}
      else{
         echo '<li ><a href="index.php" class="nav-link" style="color:white;" >Home </a></li>';}?>
      <li ><a href="dashboard.php" class="nav-link" style="color:white;">Dashboard</a></li>
      <?php
      if(isset($_SESSION['login_user'])){
      
      echo '<li ><a href="feedback.php" class="nav-link" style="color:white;">Feedback</a></li>';}
      else if(isset($_SESSION['login_tec'])){
      
      echo '<li ><a href="feedback.php" class="nav-link" style="color:white;">Feedback</a></li>';}
      else if(isset($_SESSION['login_admin'])){
      
      echo '<li ><a href="feedback_show.php" class="nav-link" style="color:white;">Feedback</a></li>';} ?>
    
      <li ><a href="about.php" class="nav-link" style="color:white;">About</a></li>
      <?php
      if(isset($_SESSION['login_user'])){
      
      echo '<li class= "nav-item custom-nav-item pl-5" ><a href="logout.php" class="nav-link pl-5" style="color:white; text-align:right;">Logout</a></li>';}
      else if(isset($_SESSION['login_tec'])){
      
      echo '<li class= "nav-item custom-nav-item pl-5" ><a href="logoutT.php" class="nav-link pl-5" style="color:white; text-align:right;">Logout</a></li>';}
      else if(isset($_SESSION['login_admin'])){
      
        echo '<li class= "nav-item custom-nav-item pl-5" ><a href="logoutA.php" class="nav-link pl-5" style="color:white; text-align:right;">Logout</a></li>';} ?>
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
</style>

<!---end background--->


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script type="text/javascript" src="js/ajaxrequest.js"></script>

</body>
</html>