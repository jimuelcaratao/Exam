
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="GET">

        <label for="word">Input word to reverse:</label>
        <input type="text" id="word" name="word">

        <button type="submit">Go</button>
    </form>


    <?php

    // function
    function Reverse($str){
        // reverse string helper
        return strrev($str);
    }
    // return the reversed word or null 

    $str = $_GET['word']?? null;

    //output
    echo "Output: ". reverse($str);

    ?>

</body>
</html>


