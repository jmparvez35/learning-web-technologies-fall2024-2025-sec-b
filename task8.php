<?php
$shapes = [
    [1, 2, 3, 'A'],      
    [1, 2, 'B', 'C'],    
    [1, 'D', 'E', 'F'],  
    [1, 2, 3],          
    [12],               
    [1],               
    ['A'],             
    ['B', 'C'],          
    ['D', 'E', 'F']      
];

foreach ($shapes as $row) {
 
    foreach ($row as $item) {
        echo $item . " ";
    }

    echo "\n";
}
?>
