<?php
$str1="My Behaviour is good";
$str2="My Behaviour IS";
$str3="My";
echo (strncmp($str1,$str3,7));
echo (strncmp($str2,$str1,17));
echo (strncmp($str1,$str2,12));
?>