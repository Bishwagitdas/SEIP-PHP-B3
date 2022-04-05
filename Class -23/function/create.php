<?php include '../config/db.php'?>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $name = $_POST['name'];
    $class = $_POST['class'];




$insert_query = "INSERT INTO users (name,class)
VALUES('$name','$class')";

$statment = $pdo->prepare($insert_query);
$statment->execute();

header("location: ../index.php");



}
else{

    echo "Registration failed";

}

?>