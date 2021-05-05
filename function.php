<?php
    function sum_num($num1, $num2) {
        echo "Sum is ";
        echo $num1 + $num2;
        echo "<br>";
    }

    echo sum_num(5,6);

    function redir($location) {
        header("location: $location");
    }
    
    //redir("index.php");

    function answer_fn($x) {
       echo "Answer of x is ";
       echo ($x * $x) + (2 * $x) + 3;
    }
    
    answer_fn(5);
?>