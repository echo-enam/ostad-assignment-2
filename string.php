<?php
    $strings = ["Hello", "World", "PHP", "Programming"];
    function count_vowels($str)
    {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $count = 0;

        for($i = 0; $i < strlen($str); $i++)
        {
            if(in_array($str[$i], $vowels))
            {
                $count++;
            }
        }
        return $count;
    }

    foreach($strings as $string)
    {
        $vowel_count = count_vowels($string);
        $reversed_string = strrev($string);

        echo "Original String: $string, Vowel Count: $vowel_count, Reversed String: $reversed_string\n";
        echo "<br><br>";
    }
?>