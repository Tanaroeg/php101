<?php
    require "dbconnect.php";
    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];
    $sql = "SELECT * FROM user_tb WHERE Username = '$username' AND Password = '$password'";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();
    $userid = $row["UserID"];
    if($query->num_rows > 0){
        $_SESSION["UserID"] = $userid;
        header("location:index.php");
    }else{
        echo "Failed";
    }
?>