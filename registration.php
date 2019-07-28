<!DOCTYPE html>
<html>
	<center><head><b><font size="20">Form Data Submission</font></b>
	</head>
	<body style="background-color: #d0e1e1">
		<form action="submission.php" method="post">
		<?php
			if(isset($_GET["error"]))
			{
				echo "<span style='color:red;'>".$_GET["error"]."</span>";
			}
		?>	
		<table>
			<tr>
				<td><p><font size="10">Registration Form</font></p></td>
			</tr>
			<tr>
				<td><b><font size="5">First Name : </font></b></td>
				<td><input type="text" name="fn" value=""/><br></td>

				</tr>
			<tr>
				<td><b><font size="5">Last Name : </font></b></td>
				<td><input type="text" name="ln" value=""/><br></td>
			</tr>
			<tr>
				<td><b><font size="5">ID : </font></b></td>
				<td><input type="text" name="id" value=""/><br></td>
			</tr>
			<tr><td>	<b><font size="5">Date Of Birth : </font></b></td>
				<td><b><font size="5">Day : <select name="day">
					<?php
						for($i=0;$i<33;$i++)
						{
							if($i==0)
							echo("<option value=''></option>");
							else {
							
						echo("<option value='$i'>$i</option>");
							}
						}
						?>
				</select></font></b></td>
			<td><b><font size="5">Month : <select name="month">
				<option></option>
				<option value="january">January</option>
				<option value="february">February</option>
				<option value="march">March</option>
				<option value="april">April</option>
				<option value="may">May</option>
				<option value="june">June</option>
				<option value="july">July</option>
				<option value="august">August</option>
				<option value="september">September</option>
				<option value="october">October</option>
				<option value="november">November</option>
				<option value="december">December</option>
				</select></font></b></td>
			<td><b><font size="5">Year : <select name="year">
				<?php
					for($i=1899;$i<2005;$i++)
					{
						if($i==1899)
						echo("<option value=''></option>");
						else{
							echo("<option value='$i'>$i</option>");
						}
					}
				?>
				</select></font></b></td>
				</tr>
				<br/>
			<tr>
				<td><b><font size="5">Gender :</font></b></td>
				<td><input type="radio" name="gmale" value="male"><b>Male</b>
				<input type="radio" name="gmale" value="female"><b>Female</b>
				<input type="radio" name="gmale" value="Others"><b>Others</b></td><br>
			</tr>
	<tr>
			<td><b><font size="5">Blood Group : </font></b></td>
			<td><b><font size="5"><select name="bg">
				<option></option>
				<option value="a+">A+</option>
				<option value="a-">A-</option>
				<option value="b+">B+</option>
				<option value="b-">B-</option>
				<option value="o+">O+</option>
				<option value="o-">O-</option>
				<option value="ab+">AB+</option>
				<option value="ab-">AB-</option>
				</select></font></b></td>
				</tr>
	
				<br/>
			
			<tr>
			<td><b><font size="5">Phone : </font></b></td>
			
			<td><input type="text" name="phn" value=""/><br></td>
			</tr>
			<tr>
			<td><b><font size="5">Email ID : </font></b></td>
			<td><input type="text" name="eml" value=""/><br></td>
			</tr>
			<tr>
			<td><b><font size="5">Password : </font></b></td>
			<td><input type="password" name="pss" value=""/><br></td>
			</tr>
			<tr>
			<td><b><font size="5">Confirm Password : </font></b></td>
			<td><input type="password" name="cpss" value=""/><br></td>
			</tr>
			
		</table>
		<br/><br/>
		<center><td><input type="submit" value="Submit" style="height:30px;width:100px"/></center></td>
	</form>
	</body>
</center>
</html>