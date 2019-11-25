<?php
    if (!file_exists("index.txt")) {
        file_put_contents("index.txt", "-1");
    }

    $current_slide = intval(file_get_contents("index.txt"));
    $next_slide = $current_slide + 1;

    file_put_contents("index.txt", $next_slide);
    file_put_contents("script.html", file_get_contents("slide".$next_slide.".html"));

    echo file_get_contents('script.html');
?>
