<?php

# Include http library

Include("LIB_http.php");

# Define the target and referer web pages
$target = "http://www.schrenk.com/publications.php";
$ref = "http://www.schrenk.com";

#Request header
$return_array = http_get_withheader($target, $ref);

#Display the header
echo "FILE CONTENTS ";
var_dump($return_array['FILE']);

echo "ERRORS ";
var_dump($return_array['ERROR']);

echo "STATUS ";
var_dump($return_array['STATUS']);

?>

