<?php
    // creating a file
    $myfile = fopen("hello_there.php", "w") or die("Unable to open file!");

    // adding contents
    $txt = "<?php\n";
    fwrite($myfile, $txt);

    $txt = "// This is a comment\n\n";
    fwrite($myfile, $txt);

    $txt = "echo 'This is a test page!';\n";
    fwrite($myfile, $txt);
    $txt = "echo 'Exam number two!';\n\n";
    fwrite($myfile, $txt);

    $txt = "?>\n";
    fwrite($myfile, $txt);

    fclose($myfile);
?>