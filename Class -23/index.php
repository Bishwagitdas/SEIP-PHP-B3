<?php include './config/db.php'?>

<?php

$sql = "SELECT * FROM users";
$statement = $pdo->prepare($sql);
$statement -> execute();
$users =$statement->fetchAll(PDO::FETCH_ASSOC);


?>


<div class="container">
<h3?>Student List</h3>--------------------------------------> <button><a style="background:none; color:#000;" href="create.php">Create</a></button>
<table  border="1">
   
    <thead>

      <tr>

        <th>#Sl_No</th>
        <th>Name</th>
        <th>Class</th>
        <th>Action</th>

      </tr>

    </thead>

    <tbody>
     
    <?php $i=1 ?>

    <?php foreach ($users as  $user) {?>

        <tr>
         <td><?= $i++ ?></td>
        <td><?php echo $user['name'] ?></td>
        <td><?php echo $user['class'] ?></td>

        <td>

        <button><a style="background:none; color:#000;" href="show.php?user_id=<?php echo $user['id'] ?>">Show</a></button>
        <button><a style="background:none; color:#000;" href="edit.php?user_id=<?php echo $user['id'] ?>">Edit</a></button>
        <button><a style="background:none; color:#000;" href="./function/delete.php?user_id=<?php echo $user['id'] ?>">Delete</a></button>


        </td>

    </tr>

    <?php } ?>

    

    </tbody>
</table>

</div>