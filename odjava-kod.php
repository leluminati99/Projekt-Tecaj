<?php 
session_start();

session_destroy();

header("Location: odjava.php");
exit;