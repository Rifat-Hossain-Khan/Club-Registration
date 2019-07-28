<?php
$file=fopen('user_info.txt','a') or die("file open error");
$passfile=fopen('user_pass.txt','a') or die("file open error");
fwrite($file,"Firts_Name"."-".($_POST["fn"]));
fwrite($file,"\r\n");
fwrite($file,"Last_Name"."-".$_POST["ln"]);
fwrite($file,"\r\n");
fwrite($file,"Day"."-".($_POST["day"]));
fwrite($file,"\r\n");
fwrite($file,"Month"."-".($_POST["month"]));
fwrite($file,"\r\n");
fwrite($file,"Year"."-".$_POST["year"]);
fwrite($file,"\r\n");
fwrite($file,"Gender"."-".$_POST["gmale"]);
fwrite($file,"\r\n");
fwrite($file,"Blood"."-".$_POST["bg"]);
fwrite($file,"\r\n");
fwrite($file,"Phone"."-".$_POST["phn"]);
fwrite($file,"\r\n");
fwrite($file,"Email"."-".$_POST["eml"]);
fwrite($file,"\r\n");
fwrite($passfile,$_POST["id"]."-".md5($_POST["pss"]));
fwrite($passfile,"\r\n");


header("Location:login.php");

?>