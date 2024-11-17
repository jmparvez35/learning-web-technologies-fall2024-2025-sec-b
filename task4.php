<?php
function findLargest($num1, $num2, $num3) {
    if ($num1 >= $num2 && $num1 >= $num3) {
        echo "$num1 is the largest number.\n";
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        echo "$num2 is the largest number.\n";
    } else {
        echo "$num3 is the largest number.\n";
    }
}

$num1 = 10;
$num2 = 20; 
$num3 = 15;

findLargest($num1, $num2, $num3);
?>
