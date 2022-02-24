<?php
    $error='';

    if(isset($_POST['create'])){
        $firstname   = $_POST['firstname'];
        $lastname    = $_POST['lastname'];
        $email       = $_POST['email'];
        $phn         = $_POST['phn'];
        $pass        = $_POST['pass'];
        $ques        = $_POST['ques'];

        $db_user = "root";
        $db_pass = "";
        $db_name = "project";

        $db = new PDO('mysql:host=localhost;dbname='.$db_name.';charset=utf8', $db_user,$db_pass);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        if(filter_var($email,FILTER_VALIDATE_EMAIL)==true){
           $sql = "INSERT INTO student(firstname,lastname,email,phn,pass,ques,pic) VALUES(?,?,?,?,?,?,'p.png')";
           $stminsert = $db->prepare($sql);
           $result = $stminsert->execute([$firstname,$lastname,$email,$phn,$pass,$ques]);
           if($result){
              echo 'Successfully saved.';
              header("Location: in.php");
            } else{
                 echo 'There were errors.';
                }
        } else{
            $error="Invalid email";
        }
        
    }
?>