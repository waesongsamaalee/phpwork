<?php

    $name = "waesonG sama-aleE";
    echo strlen($name);
    echo "<br>";
    
    $word = " I LOVE YOU";
    echo str_word_count($word);
    echo "<br>";

    echo strrev($name);
    echo "<br>";

    echo strpos($word, "YOU");
    echo "<br>";

    echo str_replace($word, "LOVE","HATE");
    echo "<br>";

    echo strtolower($name);
    echo "<br>";


    echo strtoupper($name);
    echo "<br>";

?>