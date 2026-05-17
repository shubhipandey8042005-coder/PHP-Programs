<?php
$str="A Positive mind will never give you a negative life";
echo strstr($str,"will")."<br>";
echo stristr($str,"WILL")."<br>";
echo strchr($str,"m")."<br>";
echo strpos($str,"never")."<br>";
echo strpos($str,"give")."<br>";
echo strpos($str,"you")."<br>";
echo strpos($str,"A")."<br>";
echo strcspn($str,"a");
?>