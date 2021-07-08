<?php
    $numbers = [9863, 7127, 2020, 80, 131 ,55 ,100];
    // sorting function in ascending order
    sort($numbers);
    
    // get lenght of array
    $arrlength = count($numbers);
    //loop in array lenght
    for($x = 0; $x < $arrlength; $x++) {
        //round function to get the nearest tens
        // output
        echo round($numbers[$x], -1);
        echo "<br>";
    }

?>