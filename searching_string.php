<?php
$s="A Positive mind will never give you negative people";
echo strstr($s,"Will")."<br>";
echo strstr("Hello World","llo")."<br>";
echo strstr($s,"will")."<br>";
$s="A Positive mind will never give you negative people";
$s1="will";
$s2=stristr($s,$s1)."<br>";
$s3="Will";
$s4=stristr($s2,$s3)."<br>";
echo $s2;
echo"<br>";
echo $s4;
$s="A positive mind will never give you a negative life";
$s1=strchr($s,'m')."<br>";
echo $s1;
$s="To do or not to do";
echo strpos($s,"do")."<br>";
echo strcspn("Hello world!","w")."<br>";
echo strcspn("Hello world!","w",1,6)."<br>";
echo strcspn("Hello world!","w",2,6)."<br>";
?>