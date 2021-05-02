<?php
    require "dbconnect.php";
    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];
    $sql = "SELECT * FROM user_tb WHERE Username = '$username' AND Password = '$password'";
    $query = $conn->query($sql);
    if($query->num_rows > 0){
        echo "Success";
    }else{
        echo "Failed";
    }
?>