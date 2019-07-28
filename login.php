<!DOCTYPE html>
<html>
<center><br><br><br><br>
<head><title>Login</title></head>
<body style="background-color: #d0e1e1;border-style: dashed;margin-left: 30%;margin-right: 30%;margin-top: 10%;">

<a href="http://www.aiub.edu/" target="_blank" title="www.aiub.com"><img src="aiub.jpg" alt="logo" align="left" style="position:absolute; top:23%;left:46%;width:8%;height:14%;"></a><br/>

<form action="Check_u_p.php" method="post" >
<b><font  size="30" style="font-family:Calibri;">Login</font></b><br/>
<?php
if(isset($_GET["error"]))
	echo "<span style='color:red'>".$_GET["error"]."</span>";
else
	echo "<br/>";
//session_start();
?>
<table>	
<tr>
	<td><p><font size="5" style="font-family:Calibri;"><b>User ID</p></font></td></b>
	<td><p><input type="text" name="uname"/></p></td>
	
</tr>
<tr>
	<td><p><b><font size="5" style="font-family:Calibri;">Password</p></font></td></b>
	<td><p><input type="password" name="pword"/></td>
</tr>
<tr>
	<td><input type="submit"  value="Login" style="height:30px;width:100px;"/></td>
</tr>
</table>
</form>
<form action="registration.php" style="position:absolute; top:69%;left:50%">
				<input type="submit" value="Sign up" style="height:30px;width:100px"/>
</form>
<br/>
</body>
</html>