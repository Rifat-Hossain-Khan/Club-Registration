<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>

<body>  

<?php
$nameErr = $emailErr = $genderErr = $sample_photo_linkErr = "";
$name = $email = $gender = $field = $sample_photo_link = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Model Name is required";
  } else {
    $name = test_input($_POST["name"]);
    
   
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["sample_photo_link"])) {
    $sample_photo_link = "";
  } else {
    $sample_photo_link = test_input($_POST["sample_photo_link"]);
    
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$sample_photo_link)) {
      $sample_photo_linkErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["field"])) {
    $field = "";
  } else {
    $field = test_input($_POST["field"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<h3><a href="Logout.php" style="margin-left:96%"">Logout</a></h3>
<h2>AIUB PHOTOGRAPHY CLUB</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="photo_club_write.php">  
  Camera Model Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Sample photo link: <input type="url" name="photo" value="<?php echo $sample_photo_link;?>">
  <span class="error"><?php echo $sample_photo_linkErr;?></span>
  <br><br>
  Interested Field: <textarea name="field" rows="5" cols="40"><?php echo $field;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>


<?php
//echo "<h2>Your Input:</h2>";
//echo $name;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $sample_photo_link;
//echo "<br>";
//echo $field;
//echo "<br>";
//echo $gender;

?> 


</body>

</html>