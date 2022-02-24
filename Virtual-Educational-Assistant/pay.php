
<?php
  include "navbar.php";
 $conn=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($conn,"project");
//session_start();
$error='';
if(isset($_GET['enroll'])){
    $sub_code= $_GET['enroll'];
    $query1= mysqli_query($conn,"SELECT * FROM `subject`,`teacher` WHERE subject.t_id = teacher.id AND sub_code='$sub_code'");
    $ro=mysqli_fetch_assoc($query1);
    $rows= mysqli_num_rows($query1);
    if($rows == 1){
    $_SESSION['paid'] =$ro['tutor_fees'];
    $_SESSION['id'] =$ro['t_id'];
    $_SESSION['tphn'] =$ro['phn'];
    $id=$ro['t_id'];
    }
    else{
        echo "error";
    }


if(isset($_POST['submit'])){
       
      //$conn=mysqli_connect("localhost","root","");
      //$db=mysqli_select_db($conn,"project");
       
      $card_num = $_POST['card_num'];
      $card_cvc = $_POST['cvc'];
      $card_exp_month = $_POST['exp_month'];
      $card_exp_year = $_POST['exp_year'];

      $balance_transaction = str_replace(".","",microtime(true)).rand(000,999);

            $query= mysqli_query($conn, "INSERT INTO transaction (email,card_num,card_cvc,card_exp_month,card_exp_year,paid_amount,
            paid_amount_currency,txn_id,payment_status)
            VALUES ('$_SESSION[login_user]', '$card_num','$card_cvc','$card_exp_month','$card_exp_year',$_SESSION[paid],'BDT','$balance_transaction','successfull')");

            if($query==true){
              $to=$_SESSION['login_user'];
              $msg="Payment successfully done.\nYour transaction Id is $balance_transaction";
              $subject="Payment confirmation";
              //if(mail($to,$subject,$msg)){
                //echo "email sent";
                //header("location: meeting.php?meet=".$id);
                //} 
                //else{
                    //echo "not sent";
                //}
                mail($to,$subject,$msg);

                //$to=$_SESSION['tphn'];
                $to = "01876829362";
                $token = "c33bdea62507cf8949da91af16441de4";
                $message = "Join meeting after five minute";
                $url = "http://api.greenweb.com.bd/api.php?json";

              $data= array(
             'to'=>"$to",
             'message'=>"$message",
             'token'=>"$token"
              );
              $ch = curl_init(); 
              curl_setopt($ch, CURLOPT_URL,$url);
              curl_setopt($ch, CURLOPT_ENCODING, '');
              curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              $smsresult = curl_exec($ch);

              header("location: meeting.php?meet=".$id);
        
            }else{
                echo 'Try agein';
            }
    }
    mysqli_close($conn);
}
?>



<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Payment</title>
<style>
body{
    background-image: url("image/pay.png");
    background-size: cover;
    background-repeat: no-repeat ; 
    position: absolute;
    top: 0;
    left: 0;
    height: 10%;
    width: 100%;
    z-index: 1;
    opacity: 1;
}
.login{
width: 480px;
height: 470px;
margin: 50px auto;
font: cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius: 80px;
border:2px solid #ccc;
padding: 10px 40px 25px;
margin-top: 70px;
}
input[type=text],input[type=password]{

font-family: cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
input[type=submit]{
width: 100%;
background-color: #009;
color: #fff;
border: 1px solid #ccc;
padding: 10px;
font-size:25px;
cursor: pointer;
margin-bottom: 15px;
}
</style>
</head>
<body>


<div class="login">
<h3 align="center" style="font-size:29px"><b>Payment Using Card</b></h3><br>
<form action="" method="post" style="text-align:left;">
<div class="container my-container">
  <div class="row">
<div class="col-xs-7 col-lg-7 pl-ziro">
  <label><b>CARD NUMBER</b></label><br>
    <input type="text" name="card_num" width="100%" autocomplete="off" class="card-number" placeholder="Valid Card Number" /><br/><br/>
</div><br><br><br>
        
                    
                        <div class="col-xs-8 col-md-15">
                            <div class="form-group">
                                <label for="expityMonth"> EXPIRY DATE </label><br>
                                <div class="col-xs-4 col-lg-4 ">
                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" name="exp_month" required />
                                </div>
                                <div class="col-xs-4 col-lg-5 ">
                                    <input type="text" class="form-control" id="expityYear" placeholder="YYYY" name="exp_year" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-4 col-md-4">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="valid code" name="cvc" required />
                            </div>
                        </div>
                    </div>
                    </div>
                    <br/>
<input type="submit" value="Final payment  <?php echo $_SESSION['paid'] ?>TK" style="font-size:16px;"><br/><br/>
<input type="submit" value="Confirm" name="submit">

</body>
</html> 



