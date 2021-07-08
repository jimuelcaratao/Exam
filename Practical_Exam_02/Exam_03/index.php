<?php

    // this return true if $x is perfect square
    function perfect_square($x)
    {
        $sqr = (int)(sqrt($x));
        return ($sqr * $sqr == $x);
    }
    
    // check if is fibonacci number then return true
    function fibonacci($n)
    {
        // n is Fibinacci if one of
        return perfect_square(5 * $n * $n + 4) ||
                perfect_square(5 * $n * $n - 4);
    }
    
    // Output
    for ($i = 1; $i <= 10; $i++){
        if(fibonacci($i)){
            echo "$i is a Fibonacci Number <br />";
        }
        else{
            echo "$i is a not Fibonacci Number <br />" ;
        }
    }
    

?>