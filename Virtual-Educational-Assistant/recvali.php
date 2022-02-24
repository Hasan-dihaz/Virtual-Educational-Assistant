<?php
    $error='';
    if(isset($_POST['rsubmit'])){
    
            $ruser=$_POST['remail'];
            $rpass=$_POST['rpass'];
            $repass=$_POST['repass'];
            $answer=$_POST['answer'];

            $conn=mysqli_connect("localhost","root","");
            $db=mysqli_select_db($conn,"project");

            if( $rpass == $repass){
                $query1= mysqli_query($conn,"SELECT email from STUDENT where ques='$answer'");
                $rows= mysqli_num_rows($query1);
                if($rows == 1){
                    $query= mysqli_query($conn," UPDATE `student` SET `pass`='$rpass' WHERE email='$ruser' and ques='$answer'");

                    if($query==true){
                       header("Location: in.php");
                       $error="Email or Answer is Invalid";
                    }
                } else if($rows != 1){
                    $error="Email or Answer is Invalid";
                }
                
            } else{
                $error="Repeated password is incorrect";
            }
            mysqli_close($conn);
    }
?>