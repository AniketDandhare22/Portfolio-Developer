<?php 
    $servername = "localhost";
    $username = "sql12625488";
    $password = "";
    $db_name = "sql12625488";  
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }   

?>