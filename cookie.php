<?php
    setcookie("Tel","0812345678",time() + (86400 * 30),"/");

    if(isset($_COOKIE["Tel"])){
        $cookie_tel = $_COOKIE["Tel"];
    }
    echo $cookie_tel;
?>