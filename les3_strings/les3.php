<?php

$str = 'This is some text. I will be using PHP string functions to change it';
$str_lower = strtolower($str); // kleine letter maken
$str_camelCase = ucwords($str); // 1e letter van elk woord is hoofdletter
$str_lowercasefirst = lcfirst($str); // 1e letter van 1e woord van zin is hoofdletter
$str_replace = str_replace("PHP","HTML",$str); // een woord veranderen
$str_reverse = strrev($str); // achterstevoren
$str_AllUppercase = strtoupper($str); // alles in hoofdletters
$str_shuffle = str_shuffle($str); // alles door elkaar
$str_length = strlen($str); // aantal characters
$str_words = str_word_count($str); // aantal woorden
$str_startsAt = strpos($str,"PHP");
$str_eigen = substr($str,"PHP"/*,"functions"*/);

echo '<b> Use PHP string functions to get the following output. The text in bold is help information </b><br><br>';
echo '$str = This is some text. I will be using PHP string functions to change it<br><br>';
echo '<b> output </b>';
echo '<p>' . $str_lower . '</p>';
echo '<p>' . $str_camelCase . '</p>';
echo '<p>' . $str_lowercasefirst . '</p>';
echo '<p>' . $str_replace . '</p>';
echo '<p>' . $str_reverse . '</p>';
echo '<p>' . $str_AllUppercase . '</p>';
echo '<p>' . $str_shuffle . '</p>';
echo '<b> The number of characters in the string </b>';
echo '<p>' . $str_words . '</p>';
echo '<b> The number of words in the string </b>';
echo '<p>' . $str_length . '</p>';
echo '<b> The word PHP starts at </b>';
echo '<p>' . $str_startsAt . '</p>';
echo '<b> Eigen functie;  </b>';
echo '<p>' . $str_eigen . '</p>';
?>