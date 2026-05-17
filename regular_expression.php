<?php
$str="Nothing is Impossible";
$pattern="/impossible/i";
echo("preg_match:");
echo preg_match($pattern,$str)."<br>";
echo("preg_match_all:"); 
echo preg_match_all($pattern,$str)."<br>";
echo("preg_replace:");
echo preg_replace($pattern,"Never",$str);
?>