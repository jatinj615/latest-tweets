<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'tweet';
    $text = $_POST['txt'];
    $url = $_POST['img_url'];
    $con = mysqli_connect($host, $user, $password, $database);
    if(!$con){
        echo 'connection failed';
    }else{
        $query = 'INSERT INTO TWEETS (text, url) VALUES ("'.$text.'","'.$url.'")';
        // echo $query;
        if(mysqli_query($con, $query)){
            echo 'Success';
        }else{
            echo 'failed';
        }
    }
?>