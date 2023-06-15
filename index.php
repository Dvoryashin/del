<?php
$string = file_get_contents("index.html");
$string = strip_tags($string, 'meta');
$pattern = '/<title([\s\S]+)?>([\s\S]+)?<\/title>/i';
$string = preg_replace($pattern, "", $string);
echo $string;
?>
