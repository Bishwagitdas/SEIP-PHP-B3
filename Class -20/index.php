<?php include './db.php'?>


<?php

session_start();

if(!isset($_SESSION['email'])){

    header('location:login.php');
}


?>



<?php include ('./includes/header.php');?>

<div class="container">
    <h1>Wellcome Home</h1>
</div>

<?php include ('./includes/footer.php');?>