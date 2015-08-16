<?php
if(!isset($_POST['form']))
{
   header("location: ifelse.php");
}

$name=$_POST['name'];
$age=$_POST['age'];
echo "<h2>Hey $name !! Your Name is beautiful</h2> <br>";
if($age>50)
{
   echo "And Your Age is $age<br>So ";
   echo "You Should better retire now";
   }
   else if($age<18)
   { 
     echo "And Your age is  $age <br>" ;
     echo "You are underaged,build yourself strongly for the future";
	 }
	 else if ($age>=18 & $age<=50)
	 {
	 echo "And Your age is  $age <br>" ;
	 echo "Work Hard For your better life";
	 }

?>