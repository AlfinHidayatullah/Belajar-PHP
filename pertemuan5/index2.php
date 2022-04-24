<?php
$file = $open("test1.txt","r");
echo fgets($file);
fclose($file);
?>