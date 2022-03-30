<?php include('../db.php')?>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $gender = $_POST['gender'];

//     echo <<< DEMO

//     <div style="border:2px solid black; padding: 20px;">

//         <p>First Name: $firstName</p>
//         <p>Last Name: $lastName</p>
//         <p>Password: $password</p>
//         <p>Gender: $gender</p>
    
//     </div>


// DEMO;


$insert_query = "INSERT INTO users (name,email,password)
VALUES('$name','$email','$password')";

$statment = $pdo->prepare($insert_query);
$statment->execute();

header("location: ../index.php");



}
else{

    echo "Registration failed";

}

?>