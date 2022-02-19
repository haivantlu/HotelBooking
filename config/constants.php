<?php 
    //Start Session
    if(empty($_SESSION)){
        session_start();
    }
    $conn = mysqli_connect('localhost','root', '','ht');
        if(!$conn){
            die('Không thể kết nối');
        }

    
   
    ?>

