<?php

include("LIB_parse.php");
$string = "The quick brown fox";

# Parse what's before the delimiter, including the delimiter
$parsed_text = split_string($string, "quick", BEFORE, INCL);
// $parsed_text = "The quick"
echo $parsed_text;
# Parse what's after the delimiter, but don't include the delimiter

$parsed_text = split_string($string, "quick", AFTER, EXCL);
// $parsed_text = "brown fox"
//echo $parsed_text;

?>

