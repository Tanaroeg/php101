<?php
    require "dbconnect.php";
    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];
    $name = $_POST["txtName"];
    $tel = $_POST["txtTel"];
    $sql = "INSERT INTO user_tb(Username, Password, Name, Tel) VALUES ('$username','$password','$name','$tel')";
    if($query = $conn->query($sql) === TRUE){
        header("location:./");
    }else{
        echo "Error!";
    }
?>