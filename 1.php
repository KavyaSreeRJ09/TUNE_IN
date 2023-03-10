
<!DOCTYPE html>
  <html>
  <head>
  <title>Sign up</title>
  <style>
	body{
	  background-repeat: no-repeat;
	  }
	</style>
  </head>

	<body bgcolor="salmon" >
	
	<!-- Main div code -->
    <form align = center action="2.php" method="POST">
	<table border="0"  align="center" cellspacing="50">
	<div >
		<br>
	<h1 style="font-family:verdana;" style="font-size:300%;">TUNE IN</h1> <br>
	<hr><br><br>
	</div>
	<!-- create account div -->
	<div >
	<div class="h-tag">
	<h2>Create Account</h2>
	</div>
	<table cellspacing="0" align="center" cellpadding="20" border="20">
	
	<tr>
	<td align="right">Enter Name :</td>
	<td><input type="text" placeholder="Enter user here" id="t1" class="tb" name=username /></td>
	</tr>
	<tr>
	<td align="right">Enter Email ID :</td>
	<td><input type="text" placeholder="Enter Email ID here" id="t2" class="tb" name=mail /></td>
	</tr>
	<tr>
	<td align="right">Enter Password :</td>
	<td><input type="password" placeholder="Enter Password here" id="t4" class="tb" name=pass /></td>
	</tr>	
	<tr>
<td colspan="5" align="center">
	<input type="submit" value="CREATE" class="btn" ; />
	&nbsp;
	<input type="reset" value="RESET" class="btn" ; />
	&nbsp;&nbsp;
	<a href="3.php">SIGNIN</a></button>
</tr>

	</table>
	
	
	<!-- Main div ending here... -->
</form>

	</body>
	</html>
