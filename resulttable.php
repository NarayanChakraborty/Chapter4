<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple Math</title>
	<style>
	p{
	  color:#157f4d;
	 }
	table tr{
	background-color:#4466aa;
	}
	table tr td{
	color:#fff;
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
?>	
	<table border="1">
		<tr>
		     <th>Description</th>
			 <th>Calculated amount</th>
		  </tr>
<?php		  
	print "<tr><td>The number of Apples is</td><td>$apples </td></tr>\n";
	print "<tr><td>and the number of banana is</td><td> $banana</td></tr>\n";
	print "<tr><td>There  more apples than banana</td><td>$diff</td></tr>\n";
	print "<tr><td>The reverse of that would be </td><td>$reversediff </td></tr>\n";
	print "<tr><td>Five times as many apples would be</td><td> $multipliedapples</td></tr>\n";
	print "<tr><td>If I divided the apples equally between three of us ,each person";
	print "would get apple </td><td>$divapple</td></tr>\n";
	print "<tr><td>If I rounded the number above to two decimal places it would be:</td><td>";
	print number_format($divapple,2);
	print "</td></tr>\n";
	print "<tr><td>apple left over would be between 3</td><td> ";
	print $moduloapple;
    print "</td></tr>\n";
	?>
	</table>
</body>
</html>