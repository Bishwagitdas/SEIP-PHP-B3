<?php include './db.php'?>
<?php  

$id =$_GET['user_id'];
$sql = "SELECT * FROM users WHERE id='$id'";
$statement = $pdo->prepare($sql);
$statement -> execute();
$user =$statement->fetch(PDO::FETCH_ASSOC);
?>

<?php include ('./includes/header.php');?>
<div class="container">
<p>User Info</p>
<hr/>
<p>Name: <?php echo $user['name']?></p>
<p>Email: <?php echo $user['email']?></p>
<p>Password: <?php echo $user['password']?></p>
</div>


<?php include ('./includes/footer.php');?>