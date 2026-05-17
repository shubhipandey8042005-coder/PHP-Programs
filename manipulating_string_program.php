<?php
$str="Hello Networking";
echo substr($str ,5)."<br>";
echo substr($str,-6,-1)."<br>";
echo str_replace("Hello","Hii",$str)."<br>";
echo str_repeat($str,3)."<br>";
echo substr_replace($str,"Python",-6)."<br>";
echo substr_count($str,"is",2)."<br>";
?>