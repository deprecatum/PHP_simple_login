<?php
    require_once('db_login.php');


    $check="SELECT * FROM testing WHERE NAME='"  .$_POST['name']. "';";
    $result=$conn->query($check);

    if($result){
        if($result->fetch_assoc()['PASSWORD']==$_POST['pass']){
            session_start();
            $_SESSION['name']=$_POST['name'];
            $_SESSION['pass']=$_POST['pass']; //should be a public key or something
            echo 'session ok';
        }
    }

    
?>