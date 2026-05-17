<?php
$name=array("Anisha","Priya","Sakshi",87);
if(in_array("Anisha",$name,TRUE))
{
	echo("Match found");
}
else
{
	echo("Match not found");
}
if(in_array("87",$name,TRUE))
{
	echo("Match found");
}
else
{
	echo("Match not found");
}
if(in_array(87,$name,TRUE))
{
	echo("Match found");
}
else
{
	echo("Match not found");
}
$a=array("a"=>"Red","b"=>"Blue","c"=>"Green");
echo(array_search("Green",$a,TRUE));
?>