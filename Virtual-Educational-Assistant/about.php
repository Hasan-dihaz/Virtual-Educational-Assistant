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
  <span style="color:white" class="navbar-text">Learn and Implement</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav custom-nav pl-5">
      <li class= "nav-item custom-nav-item"><a href="index.php" class="nav-link">Home </a></li>
      <li class= "nav-item custom-nav-item"><a href="#" class="nav-link">Dashboard</a></li>
      <li class= "nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
      <li class= "nav-item custom-nav-item"><a href="about.php" class="nav-link">About</a></li>
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
    background-image: url("image/about.jpg");
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

<div class=“top”> <!-- image would go here when needed --></div>
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
<h1 style="text-align:center"> What is online education?</h1> <br>
<center>
<img src="image/what is online education.jpg" width="400" height="200">
</center>
<p style="margin-left: 4.5em;padding: 0 5em 2em 0;border-width: 5px;"text-align:center" border-color: blue; border-style:solid;">In the last 20 years, the Internet has grown from being nearly non-existent into the largest, most accessible database of information ever created. It has changed the way people communicate, shop, socialise, do business and think about knowledge and learning. Much more than just a new twist on distance learning, online schooling is changing the face of traditional classrooms and making education more accessible than ever before.


Online education is a form of education where students use their home computers through the internet. For many nontraditional students, among them all those who want to continue working full time or raising families, online graduations and courses have become popular in the past decade. Often online graduation and course programmes, some of which are conducted using digital technologies, are provided via the online learning portal of the host university.</p><br>
<h1 style="text-align:center"> why It's for you?</h1> <br>
<p style="margin-left: 4.5em;padding: 0 5em 2em 0;border-width: 5px;"text-align:center" border-color: blue; border-style:solid;">
  This platform give's you some benefits. You can sign-up as a student and also as a teacher. If, you sign-up as a student then you can get some benefits.
similarly, if you can sign-up as a teacher then you can get some other attractive benfits.
</p><br>
<h1 style="text-align:center"> Are you student?</h1> <br>
<p style="margin-left: 4.5em;padding: 0 5em 2em 0;border-width: 5px;"text-align:center" border-color: blue; border-style:solid;">
If, you want to find a tutor for a perticular course then at first you have to sign-up as a student. Then, you have to login as a student. After 
login you will see your profile. You will see the available courses which offered by the tutores. You can find your favourite tutore by search.
You can serch your favourite course and it will show you the tutor list and available time which given by the tutors. You can enrolled any course
by contact with the tutor. <b> You have to pay for enrolled course.</b> you can see rating of tutors.
</p><br>
<h1 style="text-align:center"> Are you teacher?</h1> <br>
<p style="margin-left: 4.5em;padding: 0 5em 2em 0;border-width: 5px;"text-align:center" border-color: blue; border-style:solid;">
  If, you are a expert in any type of course and you want to teach the course then at first you have to sign-up as a teacher. You have give your
interested field and educational background at the time of sign-up. After sign-up you can login and you can see your profile. 
You can serch any course and see the ratings of the tutors. If, any student want to enrolled your course then you can confirm or discard.
You can give your hourly rate for your course and <b>the student can confirm your course after paying you.</b></p><br>
<h2>&emsp;Related Links</h2>
<ul style="list-style-type:none";class="Related Links">
<li class= "nav-item custom-nav-item"><a href="https://www.indiaeducation.net/online-education/articles/10-benefits-of-online-learning.html"><p style="color:rgb(0, 102, 0);font-size:20px;"> 10 benefits of online learning</p> </a></li> 
<li> <a href="https://www.indiaeducation.net/online-education/11-free-online-courses-that-you-can-take-up-from-home.htm"><p style="color:rgb(0, 102, 0);font-size:20px;"> 11 Free Online Courses that you can take up from Home</p> </a></li>
<a href="https://www.dexway.com/5-reasons-why-online-learning-is-more-effective/"><p style="color:rgb(0, 102, 0);font-size:20px;"> 5 Reasons Why Online Learning is More Effective</p> </a>
<li> <a href="https://www.coursera.org/courses?query=e-learning"><p style="color:rgb(0, 102, 0);font-size:20px;"> E Learning Courses</p> </a></li></ul><br><br>
<center>
<img src="image/ab.jpg" width="200" height="180">
</center><br><br>
</body>
</html>