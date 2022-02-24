<?php
$to="01876829362@bdbulksms.net";
$msg="hello";
//$subject="test";
$from="from:virtualeducationalassistent@gmail.com\n";
if(mail($to,'',$msg,$from)){
    echo "email sent";
}
else{
    echo "not sent";
}
?>