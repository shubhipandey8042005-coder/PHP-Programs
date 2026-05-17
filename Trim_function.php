<?php
$str="Hello PHP";
echo"without trim ".$str;
echo "with trim ".trim($str,"Hep");
echo("<br>");
$s1="!!!(!!) Regrets doesn't come!";
echo"with ltrim =".ltrim($s1,"!!()");
echo("<br>");
echo"with rtrim=".rtrim($s1,"!come");
?>