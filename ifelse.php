<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
input[type="submit"]{
   cursor:pointer;
  background-color:#3d9ccd;
  color:#fff;
}
input[type="text"]{
  background-color:#fff;
  color:#3d9ccd;
}
	</style>
</head>
<body>
	<form action="control.php"method="POST">
	<table>
		<tr>
			<td >Enter Your Name:</td><td><input type="text"name="name"/></td>
		</tr>
		<tr>
			<td>Enter Your Age: </td><td><input type="text"name="age"/></td>
		</tr>
		<tr>
			<td><input type="submit"value="Submit"name="form"/></td>
		</tr>
	</table>
	
	</form>
</body>
</html>