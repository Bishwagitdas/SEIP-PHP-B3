<?php 
ob_start();
session_start();
var_dump($_POST);

// var_dump($_SESSION['all_numbers'][$_POST['contactID']]);
$_SESSION['all_numbers'][$_POST['contactID']] = $_POST;

header('location: index.php');