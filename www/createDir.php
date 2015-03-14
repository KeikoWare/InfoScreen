<?php
session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

$newDir = $_REQUEST["path"].'/'.$_REQUEST["newDir"];

mkdir($newDir, 0, true);
chmod($newDir, 755);   // decimal; probably incorrect
chmod($newDir, "u+rwx,go+rx"); // string; incorrect
chmod($newDir, 0755);  // octal; correct value of mode
header("location: index.php?content=upload");
?>