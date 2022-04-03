<?php include('../db.php')?>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];



$insert_query = "INSERT INTO users (name,email,password)
VALUES('$name','$email','$password')";

$statment = $pdo->prepare($insert_query);
$statment->execute();

header("location: ../login.php");



}
else{

    echo "Registration failed";

}

?>