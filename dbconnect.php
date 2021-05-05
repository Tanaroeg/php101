<?php
    $dbHostname = "localhost";
    $dbUsername = "root";
    $dbPassword = "12345678";
    $dbName = "php101";

    $conn = new mysqli($dbHostname, $dbUsername, $dbPassword, $dbName);
    $conn->set_charset("utf-8");
    if($conn->connect_error) {
        die("Connect failed: " . $conn->connect_error);
    }
    session_start();
    if(isset($_SESSION["UserID"])){
        $sess_uid = $_SESSION["UserID"];
    }
?>