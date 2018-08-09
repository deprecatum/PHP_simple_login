<?php
    $user='root';
    $pass='';
    $db='test';
    $host='localhost';

    $conn=new mysqli($host,$user,$pass,$db);

    if($conn->connect_error){
        echo 'rip login to db';
    }else{
        echo 'connected to db';
    }

?>