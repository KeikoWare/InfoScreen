<?php

session_start();
if(!$_SESSION["loggedinVerified"] == 1) header("location: login.php");

include('functions/scandir.php');

unlink('firmware/updates/update.zip');
rmdir_recursive('firmware/updates/runupdate');
?>