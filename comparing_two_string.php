<?php
$str1="Hello";
$str2="Hi";
If($str1==$str2)
{
	echo  "true";
}
else{
	echo  "false";
} 
echo "<br>";
echo strcmp("Hello","Hello")."<br>";
echo strcmp("Hello","world")."<br>";
echo strcmp("Hii","Hello")."<br>";
$s1="Hello World";
$s2="Hello World";
echo strcasecmp($s1,$s2);
echo "<br>";
echo strcasecmp("Hello PHP","HELLO WORLD")."<br>";
echo strcasecmp("Hello PHP","HELLO")."<br>";
$str1="My Behaviour is good";
$str2="My Behaviour IS";
$str3="My";
echo (strncmp($str1,$str3,7))."<br>";
echo (strncmp($str2,$str1,17))."<br>";
echo (strncmp($str1,$str2,12))."<br>";
$s1="Life become easier with u delete negative people";
$s2="Life become easier";
echo strncasecmp($s1,$s2,12)."<br>";
echo "<br>";
echo strncasecmp($s1,$s2,15)."<br>";
?>