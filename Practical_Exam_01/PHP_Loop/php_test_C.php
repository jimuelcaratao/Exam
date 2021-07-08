<?php

    $x = 0;    
    $y = 1; 

    echo 0;
    echo "<br />";
    echo 1;
    echo "<br />";

    // loop for 7
    for($i=0;$i<=7;$i++)    
    {    

        // adding previous 2 (x and y) number to get z
        $z = $x + $y;   
        
        //output
        echo $z."<br />";      
        
        //replace y to x to get previous number 1
        $x=$y;  
        //replace z to y to get previous number 2     
        $y=$z;     
    }   

?>