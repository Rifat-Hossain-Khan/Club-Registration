<?php
function loadArrayxml(){
	global $ar;
$xml=simplexml_load_file("user_pass_x.xml") or die("Error: Cannot create object");


foreach($xml->user as $st){
	$ar[(string)$st->id]=md5((string)$st->password);
}

}
function loadArraytxt(){
	global $ar;
	$myfile = fopen("user_pass.txt", "r") or die("Unable to open file!");
	while($c=fgets($myfile)){
		$a=explode("-",$c);
		$ar[$a[0]]=trim("$a[1]");
		
	}
	
	fclose($myfile);
}
?>