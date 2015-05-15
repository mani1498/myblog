<?php 
require_once "sqlconf.php";
if($dbConfig)
header("Location: login.php");
else
echo 'Database Error';?>