<?php
    $String="Hello Mate !";
    $count=str_word_count($String,0);
    print_r($count);
    echo "<br>";
    
    $String="Hello Mate !";
    $count=str_word_count($String,1);
    print_r($count);
    echo "<br>";

    $String="Hello Mate !";
    $count=str_word_count($String,1,'!');
    print_r($count);    
    echo "<br>";
    
    $String="Hello Mate !";
    $count=str_word_count($String,2,'!');
    print_r($count);    
    echo "<br>";
    
    $String="Hello Mate !";
    $String1=str_shuffle($String);
    echo $String1;
    echo "<br>";
    
    $half=substr($String1,0,strlen($String1)/2);
    echo $half;
    
    echo strrev($half);

    $String1="Hey!";
    $String2="He!";
    similar_text($String1,$String2,$result);
    echo "<br>".$result."<br>";

    echo trim("This     is     near  mm<br>");

    $text="This is <img src='Hello.jpg'> an Image";
    $text=htmlentities(addslashes($text));
    echo $text;
?>