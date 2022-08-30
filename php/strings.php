<?php

//Special Character using the backlash => \

$str1 = "i\"ll handle this.\n";
echo $str1;


//same goes for symbolds 

$str2 = "pass\$word \n";
echo $str2;

//herodoc method => EOT 
//used to define multiline string 
//commonly used for SQL query

$str3 = <<< EOT
    Take a right from the T point,
    and the go straight to fins the "Shop" \n
EOT;

echo $str3;


// STRING FUNCTIONS 


//str_word_count($str)
//numbers of words in a string 

$str = "Welcome to Studytonight";

echo str_word_count($str) . "\n";


//strrev($str)
//reverses a string 

$str4 = "Welcome to Studytonight";
echo "Reverse: " . strrev($str4) . "\n";


//strpos($str, $text)
//finds the position of any given string 

echo strpos($str4, 'Studytonight') . "\n";


//for more string functions: https://www.studytonight.com/php/php-string-functions