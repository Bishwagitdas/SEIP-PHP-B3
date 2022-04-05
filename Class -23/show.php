<?php include './config/db.php'?>
<?php  

$id =$_GET['user_id'];
$sql = "SELECT * FROM users WHERE id='$id'";
$statement = $pdo->prepare($sql);
$statement -> execute();
$user =$statement->fetch(PDO::FETCH_ASSOC);
?>

<div class="container">
<p>User Info</p>
<hr/>
<p>Name: <?php echo $user['name']?></p>
<p>Class: <?php echo $user['class']?></p>
</div>