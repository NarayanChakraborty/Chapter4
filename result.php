<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple Math</title>
	<style>
	p{
	  color:#157f4d;
	 }
	
	</style>
</head>
<body>
	<h2>Mathmatical Analysis</h2>
	<?php
	$apples=$_POST['apple'];
	$banana=$_POST['banana'];
	$total=$apples+$banana;
	$diff=$apples-$banana;
	$reversediff=-$diff;
	$multipliedapples=$apples*5;
	$divapple=$apples/3;
	$moduloapple=$apples%3; 
	print "<p>The number of Apples is $apples and the number of banana is $banana";
	print "<p>There $diff more apples than banana";
	print "<p>The reverse of that would be $reversediff </p>";
	print "<p>Five times as many apples would be $multipliedapples apples";
	print "<p>If I divided the apples equally between three of us ,each person ";
	print "would get $divapple apples";
	print "<p> If I rounded the number above to two decimal places it would be:";
	print number_format($divapple,2);
	print "<p>If i divided the apples equally between three of us,there";
	print "would be $moduloapple apples left over";
	?>
</body>
</html>