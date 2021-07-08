<?php
    $i=0;
    $z=0;
    // condition keeps going until lessthan or equal to 10
    while($i <= 10){

        // check if $i has ramainder
        if($i % 2 == 0){
            // total added to itself
            $z += $i;
        }
        $i++;
    }

    // output
    echo $z." - Even numbers total,  <br/>";

?>