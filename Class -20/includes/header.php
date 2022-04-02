<!-- <?php   
session_start();
$is_login = false;
if(isset($_SESSION['email'])){
    $is_login = true;
}




?> -->



<!DOCTYPE html>
<html lang="en">
<head>

    <title>Learn php</title>
    <link href="css/style.css" rel=stylesheet />
</head>
<body>
    <div class="header">
        <span><a href="./index.php">Home</a> </span>
        <span> <a href="./users.php">Users</a> </span>
        <span> <a href="./register.php">Register</a> </span>
        <span> <a href="./login.php">Login</a> </span>

        <?php  
         
         if(!$is_login){
             echo "<span> <a href='login.php'>Login</a> </span>";
         }else{
            echo "<span> <a href='#'>Logout</a> </span>";

         }
        
        ?>

    </div>
</body>
</html>