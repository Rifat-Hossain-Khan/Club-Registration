<?php
$file=fopen('Music_info.txt','a') or die("file open error");
fwrite($file,"ability"."-".($_GET["ability"]));
fwrite($file,"\r\n");
fwrite($file,"instruments"."-".$_GET["instruments"]);
fwrite($file,"\r\n");
fwrite($file,"exp"."-".($_GET["exp"]));
fwrite($file,"\r\n");
fwrite($file,"info"."-".($_GET["info"]));
fwrite($file,"\r\n");
header("Location:Home_Club.php");

?>