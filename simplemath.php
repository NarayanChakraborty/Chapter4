<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple Math</title>
	<style>
	 h2{
	   color:#137f4d;
	  }
	body{
	 margin:auto;
	 border:1px solid ;
	 width:400px;
	}
	.a{
	color:#2244ff;
	}
	.b{
	color:#aa44ff;
	}
	.s{
	color:#fff;
	background-color:#169ade;
	}
    .table{
	width:300px;
	margin:50px;
	}
	</style>
	
</head>
<body>
 <div class="table">
	<h2>Simple Math</h2>
	<form action="result.php" method="POST">
	<table >
		<tr>
			<td class="a">The Number of Apple    = <input type="text"name="apple"size="2"/>
			</td>
		</tr>
		<tr>
			<td class="b">The Number of Banana  = <input type="text"name="banana"size="2"/></td>
		</tr>
		<tr>
			<td><input type="submit"name="submit"value="Mathmatical Value" class="s"/></td>
		</tr>
	</table>
	
	</form>
	</div>
</body>
</html>