<?php
$n=0;
//echo "<pre>"; print_r($GLOBALS); echo "</pre>";
foreach($_GET as $k=>$v)
{
	if(strlen ($_GET[$k])==0)
	{
		$n=1;
		//echo "$k no field is empty\n";
		header("Location:Music Club Info form.php?error=One or more field is empty. Please fill up all the fields.");
		break;
      }
	
}
if($n==0)
{
	include("Music_Info_write.php");
}

?>