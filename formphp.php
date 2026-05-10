<?php
if(isset($_POST["data"]))
{
	$d=$_POST["data"];
	echo $d;
}
if(!empty($_POST["nume"]))
{
	$n=$_POST["nume"];
	echo "<br>",$n;
}
if(isset($_POST["varsta"]))
{
	$v=$_POST["varsta"];
	echo "<br>",$v;
}
if(!empty($_POST["email"]))
{
	$e=$_POST["email"];
	echo "<br>",$e;
}
if(!empty($_POST["gand"]))
{
	$g=$_POST["gand"];
	echo "<br>",$g;
}
?>