<?php
$str="PHP is Best";
echo htmlspecialchars($str,ENT_COMPAT);
echo "<br>";
$str1="This is Italic";
echo htmlspecialchars($str1,ENT_QUOTES);
echo "<br>";
echo htmlspecialchars($str1,ENT_NOQUOTES);
$str1="<p>never<b>&quot Break a trust &quot</b></p>";
echo($str1);
echo(strip_tags($str1));
?>