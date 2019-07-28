<?php
include("db_rw.php");
$sq="insert into user values ('".$_POST['fn']."','".$_POST['ln']."','".$_POST['id']."','".$_POST['day']."','".$_POST['month']."','".$_POST['year']."','".$_POST['gmale']."','".$_POST['bg']."','".$_POST['phn']."','".$_POST['eml']."','".md5($_POST['pss'])."')";
    updateSQL($sq);
    header("Location:login.php");

?>