<?php
session_start();
unset($_SESSION["name"]);
session_destroy();
header("location:main.php");

?>