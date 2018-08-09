<?php
    require_once('db_login.php');

    $check="INSERT INTO testing (NAME,PASSWORD) VALUES('" .$_POST['name']. "','".$_POST['pass']."')";
    $result=$conn->query($check);

    if($result){
        echo "register sucessfull";
    }

    
?>