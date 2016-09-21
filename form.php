<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,tr,td
		{
			border:1px solid black;
			border-collapse: collapse;
		}	
		table
		{
			width:500px;
		}

	</style>
</head>
<body>

<a href="action.php?id=1&name=abc">click here</a>

<form name="form" id="form1" method="POST" action="action.php">
	<table align="center">
		<tr>
			<td>
			<label for="txtname">
			 Name
			 </label>
			</td>
			<td>
				<input type="text" name="txtname" id="txtname" placeholder="Enter Your name"  size="10" required >
				<!-- date number email -->
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<input type="password" name="txtpassword" placeholder="Enter Your Password">
			</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>
				<textarea name="txtaddress" id="txtaddress" placeholder="Address" rows="5" cols="25"  ></textarea>

			</td>
		</tr>
		<tr>
			<td>City</td>	
			<td>
				<select name="selcity" id="selcity">
					<option value="">Select City</option>
					<option value="ABD">Abad</option>
					<option value="2" >Pune</option>
					<option value="3" >Mumbai</option>
				</select>
			</td>

		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="radgender" value="MALE" id="radgender1"> 
					<label for="radgender1">Male</label>
				<input type="radio" name="radgender" value="FEMALE" id="radgender2"> 
				<label for="radgender2">FeMale</label>
			</td>
		</tr>
		<tr>
			<td>Hobby</td>
			<td>
				<input type="checkbox" name="chksport" value="SPORTS"> Sports
				<input type="checkbox" name="chkart" value="ARTS"> Art
				<input type="checkbox" name="chkreading" value="READING"> Reading
			</td>
		</tr>


		<tr>
			<td>Hobby</td>
			<td>
				<input type="checkbox" name="chkhobby[]" value="SPORTS"> Sports
				<input type="checkbox" name="chkhobby[]" value="ARTS"> Art
				<input type="checkbox" name="chkhobby[]" value="READING"> Reading
				<input type="checkbox" name="chkhobby[]" value="Dancing"> Dancing
			</td>
		</tr>


		<tr>
			<td colspan="2">
				<input type="submit" value="SUBMIT" name="">
				<input type="button" name="" value="BUTTON">
				<input type="reset" name="" value="RESET">
			</td>
		</tr>
	</table>	
</form>

</body>
</html>	