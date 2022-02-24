<?php
  include "navbar.php";

 $conn=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($conn,"project");

 //$error='';
 if(isset($_GET['meet'])){
    $t_id= $_GET['meet'];
    $query= mysqli_query($conn,"SELECT * FROM `teacher` where id = $t_id");
    $row=mysqli_fetch_assoc($query);
    ?>
     <style>
    .heading{color: white; position: absolute; top: 27%; left: 30%; z-index: 2; widows: 100%; text-align: center;}
    .btn-primary{color: white; position: absolute; top: 32%; left: 45%; z-index: 2; widows: 100%; text-align: center;}
    </style>
    <div>
      <h5 class="heading">After five mintue enter meeting using meeting button<h5><?php
      echo '<button>'; echo '<a href="' . $row['meet_link'] . '" class="btn btn-primary">'; echo "meeting"; echo '</a>'; echo '</button>';

    echo '</div>';

  }
?>




<?php
if(isset($_POST['submit'])){
      $conn=mysqli_connect("localhost","root","");
      $db=mysqli_select_db($conn,"project");
      
      $rating   = $_POST['rating'];
      $query1= mysqli_query($conn, "INSERT INTO rating (teacher_id, rating)
      VALUES ($t_id, $rating)");

      if($query1==true){
        header("Location: thank_you.php");
      }else{
          echo "Try again";

      }
    }
?>
<style>
@import url(https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
@import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);


fieldset,
label {
    margin: 0;
    padding: 0
}

body {
    margin: 20px
}

h1 {
    font-size: 1.5em;
    margin: 10px
}

.rating {
    border: none;
    margin-right: 49px
}

.myratings {
    font-size: 25px;
    color: green
}

.rating>[id^="star"] {
    display: none
}

.rating>label:before {
    margin: 5px;
    font-size: 2.25em;
    font-family: FontAwesome;
    display: inline-block;
    content: "\f005"
}

.rating>.half:before {
    content: "\f089";
    position: absolute
}

.rating>label {
    color: #ddd;
    float: right
}

.rating>[id^="star"]:checked~label,
.rating:not(:checked)>label:hover,
.rating:not(:checked)>label:hover~label {
    color: #FFD700
}

.rating>[id^="star"]:checked+label:hover,
.rating>[id^="star"]:checked~label:hover,
.rating>label:hover~[id^="star"]:checked~label,
.rating>[id^="star"]:checked~label:hover~label {
    color: #FFED85
}

.reset-option {
    display: none
}

.reset-button {
    margin: 6px 12px;
    background-color: rgb(255, 255, 255);
    text-transform: uppercase
}

.mt-100 {
    margin-top: 100px
}

.card {
    position: relative;
    display: flex;
    width: 350px;
    height: 212px;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #d2d2dc;
    border-radius: 11px;
    -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
    -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
    box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
}

.card .card-body {
  padding: 1rem 1rem
}

.card-body {
  flex: 1 1 auto;
  padding: 1.25rem
}
input[type=submit]{
width: 70%;
background-color: #009;
color: #fff;
border: 1px solid #ccc;
padding: 4px;
font-size:18px;
cursor: pointer;
margin-top: 90px;
margin-left: 0px;
position: absolute;
left:53px;
}



</style>
<br> <br> <br> <br>
<div class="container d-flex justify-content-center mt-100">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center"> <span class="myratings">0.0</span>
                  <h5 class="mt-1">Rate about teacher</h5>
                  <form action="" method="post"> 
                  <fieldset class="rating"> 
                    <input type="radio" id="star5" name="rating" value="5" />
                    <label class="full" for="star5" title="Awesome - 5 stars"></label> 
                    <input type="radio" id="star4half" name="rating" value="4.5" />
                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label> 
                    <input type="radio" id="star4" name="rating" value="4" />
                    <label class="full" for="star4" title="Pretty good - 4 stars"></label> 
                    <input type="radio" id="star3half" name="rating" value="3.5" />
                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label> 
                    <input type="radio" id="star3" name="rating" value="3" />
                    <label class="full" for="star3" title="Meh - 3 stars"></label> 
                    <input type="radio" id="star2half" name="rating" value="2.5" />
                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label> 
                    <input type="radio" id="star2" name="rating" value="2" />
                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label> 
                    <input type="radio" id="star1half" name="rating" value="1.5" />
                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label> 
                    <input type="radio" id="star1" name="rating" value="1" />
                    <label class="full" for="star1" title="Sucks big time - 1 star"></label> 
                    <input type="radio" id="starhalf" name="rating" value="0.5" />
                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label> 
                    <input type="radio" class="reset-option" name="rating" value="reset" /> 
                  </fieldset>
                   
                  <div class="design">
                    <input class="btn btn-primary" type="submit" name="submit" value="submit" style="text-align:center;">
                  </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){

$("input[type='radio']").click(function(){
var sim = $("input[type='radio']:checked").val();

if (sim<3) { 
    $('.myratings').css('color','red'); 
    $(".myratings").text(sim); 
    
}else{ 
    $('.myratings').css('color','green');
    $(".myratings").text(sim); 
    
} }); });
</script>