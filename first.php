
<?php
# Define the file that you want to download

$target      = "http://www.schrenk.com/nostarch/webbots/hello_world.html";
if(($file_handle = fopen($target, "r"))) {

# Fetch the file
while(!feof($file_handle))
	echo fgets($file_handle, 4096);
fclose($file_handle);
}
?>


