<?php
include("db_rw.php");
$va="select id,password from user";
$ar=array();
$ar=getDataFromDBS($va); 
//echo "<pre>";print_r($ar);echo "</pre>";



	if ((strlen($_POST["fn"]))==0)
		header("Location:registration.php?error=Please enter first name.");	
			
	elseif ((strlen($_POST["ln"]))==0)
			header("Location:registration.php?error=Please enter last name.");	
	
	elseif ((strlen($_POST["id"]))==0)
			header("Location:registration.php?error=Please enter ID.");

	elseif (isset($ar[$_POST["id"]]))
		header("Location:registration.php?error=This ID already registerd.");
											
	elseif ((strlen($_POST["day"]))==0)
		header("Location:registration.php?error=Please enter Day.");	

	elseif ((strlen($_POST["month"]))==0)
		header("Location:registration.php?error=Please enter month.");	
	
	
	elseif ((strlen($_POST["year"]))==0)
		header("Location:registration.php?error=Please enter Year.");	
		
	
	elseif(isset ($_POST["gmale"])==false)
		header("Location:registration.php?error=Gender is not selected.");	
	
		
	elseif ((strlen($_POST["phn"]))==0)
		header("Location:registration.php?error=Please enter Phone.");	
	
	
	elseif ((strlen($_POST["eml"]))==0)
		header("Location:registration.php?error=Please enter Email.");	
	
	elseif ((strlen($_POST["pss"]))==0)
		header("Location:registration.php?error=Please enter Password.");	
	
	
	elseif ((strlen($_POST["cpss"]))==0)
		header("Location:registration.php?error=Please enter confirm password");	
	
		
	elseif ((strlen($_POST["phn"]))!=11 && (strlen($_POST["phn"]))!=7 )
		header("Location:registration.php?error=Please Enter a valid Phone Number.");	
		
	
	elseif (($_POST["pss"])!=($_POST["cpss"]))
		header("Location:registration.php?error=Passwords do not match.");	
		
	
	elseif ((strlen($_POST["pss"]))<8)
		header("Location:registration.php?error=Please enter at least 8 characters.");	
	
	
	elseif(isset ($_POST["gmale"])==false)
		header("Location:registration.php?error=Please select a gender.");	
		
	
	elseif( strpos($_POST["eml"],"@") == 0)
		header("Location:registration.php?error=Email is invalid.");	
	
	elseif(strpos($_POST["eml"],".") == 0)
		header("Location:registration.php?error=Email is invalid.");	
	
	elseif( strpos($_POST["eml"],"@") > strpos($_POST["eml"],"."))
		header("Location:registration.php?error=Email is invalid.");	
			
	elseif(($_POST["pss"])!= ($_POST["cpss"]))
		header("Location:registration.php?error=The password is not matched.");	
	else
		include("user_insert.php");
	

/*echo "<br>";
echo $_POST["ln"];
echo ($_POST["dob"]);
echo "<br>";
echo ($_POST["gmale"]);
echo "<br>";
echo ($_POST["phn"]);
echo "<br>";
echo ($_POST["eml"]);
echo "<br>";
echo ($_POST["pss"]);
echo "<br>";
echo ($_POST["cpss"]);
echo "<br>";
*/
?>