<?php
$file=fopen('photo_club_info.txt','a') or die("file open error");
fwrite($file,"Camera"."-".($_POST["name"]));
fwrite($file,"\r\n");
fwrite($file,"Email"."-".$_POST["email"]);
fwrite($file,"\r\n");
fwrite($file,"Photo_Link"."-".($_POST["photo"]));
fwrite($file,"\r\n");
fwrite($file,"Interested_Field"."-".($_POST["field"]));
fwrite($file,"\r\n");
fwrite($file,"Gender"."-".$_POST["gender"]);
fwrite($file,"\r\n");
header("Location:Home_Club.php");

?>