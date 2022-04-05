<?php 
ob_start();
session_start();
var_dump($_POST);

// var_dump($_SESSION['all_numbers'][$_POST['contactID']]);
unset($_SESSION['all_numbers'][$_GET['id']]);

header('location: index.php');