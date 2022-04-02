<?php include './db.php'?>

<?php

$sql = "SELECT * FROM users";
$statement = $pdo->prepare($sql);
$statement -> execute();
$users =$statement->fetchAll(PDO::FETCH_ASSOC);


?>

<?php include ('./includes/header.php');?>

<div class="container">
<h3?>Registration List</h3>
<table  border="1">
   
    <thead>

      <tr>

        <th>#Sl_No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>

      </tr>

    </thead>

    <tbody>
     
    <?php $i=1 ?>

    <?php foreach ($users as  $user) {?>

        <tr>
         <td><?= $i++ ?></td>
        <td><?php echo $user['name'] ?></td>
        <td><?php echo $user['email'] ?></td>

        <td>

        <button><a style="background:none; color:#000;" href="user_show.php?user_id=<?php echo $user['id'] ?>">Show</a></button>
        <button><a style="background:none; color:#000;" href="user_edit.php?user_id=<?php echo $user['id'] ?>">Edit</a></button>
        <button><a style="background:none; color:#000;" href="user_show.php?user_id=<?php echo $user['id'] ?>">Delete</a></button>


        </td>

    </tr>

    <?php } ?>

    

    </tbody>
</table>

</div>

<?php include ('./includes/footer.php');?>