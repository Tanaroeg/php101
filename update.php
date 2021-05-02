<?php
    require "dbconnect.php";
    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];
    $name = $_POST["txtName"];
    $tel = $_POST["txtTel"];
    $uid = $_POST["txtUserID"];
    $sql = "UPDATE user_tb 
            SET Username = '$username'
            , Password = '$password'
            ,Name = '$name' 
            ,Tel = '$tel' WHERE UserID = '$uid'";
    if($query = $conn->query($sql) === TRUE){
        header("location:./");
    }else{
        echo "Error!";
    }
?>