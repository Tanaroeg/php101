<?php
    require "dbconnect.php";
    $getuid = $_GET["userid"];
    $sql = "DELETE FROM user_tb WHERE UserID = '$getuid'";
    if($query = $conn->query($sql) === TRUE){
        header("location:./");
    }else{
        echo "Error!";
    }
?>