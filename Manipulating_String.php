<?php
echo substr("Hello world",10)."<br>";
echo substr("Hello world",3)."<br>";
echo substr("Hello world",-1)."<br>";
echo substr("Hello world",-8)."<br>";
echo substr("Hello world",0,10)."<br>";
echo substr("Hello world",6,5)."<br>";
echo substr("Hello world",-10,-2)."<br>";
$string="Hello Everyone";
$search="Hello";
$replace="Hii";
echo "String Before Replacement :"."<br>";
echo $string;
echo str_replace($search,$replace,$string)."<br>";
$str="Hello";
echo str_repeat($str,10)."<br>";
$r1=substr_replace("Hello Python","PHP",6)."<br>";
echo $r1."<br>";
$r2=substr_replace("Hello Python","PHP",-6)."<br>";
echo $r2."<br>";
$r3=substr_replace("Hello Python","PHP",-4,-1)."<br>";
echo $r3."<br>";
$r4=substr_replace("Hello Python","PHP",0,3)."<br>";
echo $r4;
$s="Good health Good life";
echo substr_count($s,"Good")."<br>";
echo substr_count($s,"Good",5)."<br>";
echo substr_count($s,"life",4,8)."<br>";
echo substr_count($s,"life",4,1)."<br>";

?>