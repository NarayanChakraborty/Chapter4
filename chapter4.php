	<?php
	echo "<h3>comparison operator</h3>";
	echo "a:[".(32>10)."]<br>";
	echo "a:[".(32==10)."]<br>";
	echo "b:[".(1==1)."]<br>";
	$c=5;
	$d=7;
	if($c>$d) echo "$c is greater than $d";
	if($c<$d) echo "$c is smaller than $d<br>";
	if($c==$d) echo "$c is equal to $d<br>";
	echo "<h3>equal/unequal & identical operator</h3>";
	$a=1000;
	$b=+1000;
	if($a==$b) echo "1<br>";
	if($a===$b) echo "2<br>";
	if($a!=$b)  echo "1<br>";
	if($a!==$b) echo "2<br>";
	echo "<h3>Logical Operator</h3><br>";
	$m=1;
	$n=0;
	 echo ($m AND $n).'=for ($m AND $n)'."<br>";
	 echo ($m OR $n). '=for ($m OR $n)<br>';
	 echo ($m XOR $n).'=for ($m XOR $n)<br>';
	 echo (!$m).'=for (!$m)<br>';
	 ?>
	 	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
			<form action="chapter4.php"method="POST">
	<select name="page">
	   <option value="Home">Home</option>
	   <option value="About">About</option>
	   <option value="News">News</option>
	   <option value="Login">Login</option>
	   <option value="Links">Links</option>
	</select>
	<input type="submit"value="go"/>
	</form>
	</body>
	</html>
	 <?php
	 $page=$_POST['page'];
	 echo "You have requested for $page page<br>";
	 /*
	 Using Switch 
	 switch($page)
	 {
	 case "Home":
	 echo "You selected Home";
	 break;
	 case "News":
	 echo "You selected News";
	 case break;
	 case "About":
	 echo "You selected About";
	 break;
	 case "Links":
	 echo "You selected Links";
	 break; 
	 */
	echo "<h3>Using the ? operator</h3>";
	 $fuel=5;
	 echo $fuel<=1?"Fill it now":"there are enough fuel<br>";
	 echo "<h3>using loop </h3>";
	 $amount=10;
	 while($amount>1)
	 {
	   echo "Keep driving........<br>";
	   $amount--;
	 }
	 if($amount==1)
	 {
	 echo "You have 1litre fuel!!,Fill up the tunk with Fuel<br>";
	 }
	 echo "<h3>A shortend version of  using loop</h3>";
	 $count=0;
	 while(++$count<=10)
	 echo "$count times 10 is = ".($count*10)."<br>";
	 echo "<h3>Using For Loop</h3>";
	 for($count=1;$count<=10;$count++)
	 echo "$count times 10 is =".($count*10)."<br>";
	?>

