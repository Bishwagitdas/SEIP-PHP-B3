<?php    

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_php";

try{
    $pdo = new PDO(

      "mysql:host=$servername;
      dbname=$dbname",
      $username,
      $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Database Connect";
    return $pdo;
}
catch(PDOException $e){
    echo $e->getmessage() . $e->getLine();

}
