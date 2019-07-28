<!DOCTYPE html>
<html>
	<head>
		<title>Music Club Information</title>
		<style>
		.h:hover{
			     background-color: black;
			     color:white;
			    }

		</style>
	</head>

	<body>
		<h1 align="center"><i>AIUB MUSIC CLUB</i></h1>
		<h3><a href="Logout.php" style="margin-left:96%"">Logout</a></h3>
		<form action="musicclub_validation.php" method="get">
			<fieldset>
				<legend><b>Personal information:</b></legend>
			<a href="http://www.aiub.edu/" target="_blank"><img src="aiub.jpg" alt="aiub logo" align="right" width="200" height="200" title="www.aiub.com" style="margin-right:15%" ></a>
			<?php
			if(isset($_GET["error"]))
				{
				echo "<span style='color:red;'>".$_GET["error"]."</span>";
				}
			
			?>	
				<table>
					<tr>
						<td>1.Interested In:</td>
						<td>
							<select name="ability">
								<option/>
								<option value="singing">Singing</option>
								<option value="music">Music Playing</option>
								<option value="both">Both</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>2.Which instruments you are interested to play:</td>
						<td>
							<input type="text" name="instruments" size="50"/>
						</td>
					</tr>

					<tr>
						<td>3.Do you have any experience in Music? Details:</td>
						<td>
							<textarea name="exp" rows="3" cols="38"></textarea>
						</td>
					</tr>
					
					<tr>
						<td>4.Why do you want to join this club?:</td>
						<td>
							<textarea name="info" rows="3" cols="38"></textarea>
						</td>
					</tr>
				</table>
				<input type="submit" value="Done" style="margin-left: 20%;" class="h"/>
			</fieldset>
		</form>
	</body>	

</html>