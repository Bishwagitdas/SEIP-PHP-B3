<?php include('../db.php')?>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $statement = $pdo->prepare($sql);
    $statement -> execute();
    $user = $statement->fetchColumn();

    if($user){

        session_start();
        $_SESSION['email']= $email;

        header("location: ../index.php");


    }
    else{
        echo "Login Failed";
    } 
    
}
?>