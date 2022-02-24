
<?php
 $conn=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($conn,"project");
session_start();
$error='';
if(isset($_GET['enroll'])){
    $sub_code= $_GET['enroll'];
    echo $sub_code;
    $query1= mysqli_query($conn,"SELECT * FROM `subject`,`teacher` WHERE subject.t_id = teacher.id AND sub_code='$sub_code'");
    $ro=mysqli_fetch_assoc($query1);
    $rows= mysqli_num_rows($query1);
    if($rows == 1){
    $_SESSION['paid'] =$ro['tutor_fees'];
    $_SESSION['id'] =$ro['t_id'];
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
              //$to="imujannatulnaim@gmail.com";
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

                
               $to = "01876829362";
               $token = "c33bdea62507cf8949da91af16441de4";
              //$token = "cd0b40dcaf1f8b3eb51d788d2de926b2 ";


               $message = "Join meeting after five minute";

               $url = "http://api.greenweb.com.bd/api.php?json";


              $data= array(
             'to'=>"$to",
             'message'=>"$message",
             'token'=>"$token"
              ); // Add parameters in key value
              $ch = curl_init(); // Initialize cURL
              curl_setopt($ch, CURLOPT_URL,$url);
              curl_setopt($ch, CURLOPT_ENCODING, '');
              curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              $smsresult = curl_exec($ch);

              header("location: meeting.php?meet=".$id);
        
            }else{
                echo 'Try agein';
            }
        //mysqli_close($conn);
    }
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Payment</title>
<style>
body{
    background-image: url("image/payment.png");
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
.login{
width: 360px;
margin: 50px auto;
font: cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius: 10px;
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
font-size:20px;
cursor: pointer;
margin-bottom: 15px;
}
</style>
</head>
<body>
<div class="login">
<h1 align="center">Payment using Card</h1>
<form action="" method="post" style="text-align:center;">
<label>CARD NUMBER</label><br/>
<input type="text" name="card_num" width="100%" autocomplete="off" class="card-number" placeholder="Valid Card Number" /><br/><br/>
<div class="col-xs-5 col-md-5 pull-right">
<label>CV CODE</label>
<input type="text" name="cvc" autocomplete="off" class="card-cvc" placeholder="CVC"/>
<label>EXPIRY DATE</label>
<input type="text" name="exp_month" size="2" class="card-expiry-month" placeholder="MM"/>
<span> / </span>
<input type="text" name="exp_year" size="4" class="card-expiry-year" placeholder="YYYY"/><br/><br/>
<input type="submit" value="Final payment  <?php echo $_SESSION['paid'] ?>TK" style="font-size:16px;"><br/><br/>
<input type="submit" value="Confirm" name="submit">

</body>
</html> 



