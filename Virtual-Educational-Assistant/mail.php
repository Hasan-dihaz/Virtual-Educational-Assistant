<?php
$to="imujannatulnaim@gmail.com";
$msg="hello";
$subject="test";
$from="from:imujannatulnaim@gmail.com";
//ini_set("SMTP","sll://smtp.gmail.com");
//ini_set("smtp_port","25");
if(mail($to,$subject,$msg)){
    echo "email sent";
}
else{
    echo "not sent";
}
?>