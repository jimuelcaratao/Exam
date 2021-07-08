<?php
function checks_string_plaindrome($string) {
    //remove all spaces
    $string = str_replace(' ', '', $string);

    //change case to lower
    $string = strtolower($string);

    //reverse the string
    $reverse = strrev($string);

    if ($string == $reverse) {
        echo "<p>Palindrome String</p>";
    } 
    else {
        echo "</p>Not a Palindrome String</p>";
    }
}

$string = "level";
checks_string_plaindrome($string);
