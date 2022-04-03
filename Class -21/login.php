<?php  
        if($_SERVER['REQUEST_METHOD'] == "POST"){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
                $statement = $pdo->prepare($sql);
                $statement->execute();
                $user = $statement->fetchColumn();
                if($user){
                     session_start();
                     $_SESSION['email'] = $email;
                     header('location: index.php');
                }else{
                     echo "plz try Again";     
                }
        }
 ?>


<?php include ('./includes/header.php');?>

        
        <div class="container">
        <form action="./function/login.php" method="post">

        <fieldset>
                <legend>Login Form</legend>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="" placeholder="Enter email">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="" placeholder="Enter Password">
            </div>

            <input type="submit" value="Login">

        </fieldset>



        </form>
        </div>
 <?php include ('./includes/footer.php');?>