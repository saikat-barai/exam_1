<?php

function processStrings($strings) {
    foreach ($strings as $string) {
        // vowels count
        $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);

        // string reverse
        $reversedString = strrev($string);

        // results print
        echo "Original String:$string" .", ";
        echo "Vowel Count:$vowelCount".", ";
        echo "Reversed String:$reversedString\n";
    }
}

//  input array
$inputStrings = ["Hello", "World", "PHP", "Programming"];
processStrings($inputStrings);

?>