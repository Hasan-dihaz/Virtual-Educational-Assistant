<?php
    $error='';

    if(isset($_POST['create'])){
        $firstnamet   = $_POST['firstnamet'];
        $lastnamet    = $_POST['lastnamet'];
        $emailt       = $_POST['emailt'];
        $phnt         = $_POST['phnt'];
        $passt        = $_POST['passt'];
        $quest        = $_POST['quest'];
        $educational_qualification  = $_POST['educational_qualification'];
        $field_of_interest          = $_POST['field_of_interest'];

        $db_user = "root";
        $db_pass = "";
        $db_name = "project";

        $db = new PDO('mysql:host=localhost;dbname='.$db_name.';charset=utf8', $db_user,$db_pass);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        if(filter_var($emailt,FILTER_VALIDATE_EMAIL)==true){
           $sql = "INSERT INTO teacher(firstname,lastname,email,phn,pass,ques,educational_qualification,field_of_interest,status,pic) VALUES(?,?,?,?,?,?,?,?,'available','p.png')";
           $stminsert = $db->prepare($sql);
           $result = $stminsert->execute([$firstnamet,$lastnamet,$emailt,$phnt,$passt,$quest,$educational_qualification,$field_of_interest]);
           if($result){
              echo 'Successfully saved.';
              header("Location: login.php");
            } else{
                 echo 'There were errors.';
                }
        } else{
            $error="Invalid email";
        }
        
    }
?>