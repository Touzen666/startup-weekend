<?php
    file_put_contents("index.txt", 0);
    $file_contents = file_get_contents("slide0.html");
    file_put_contents("script.html", $file_contents);
    echo $file_contents;
?>
