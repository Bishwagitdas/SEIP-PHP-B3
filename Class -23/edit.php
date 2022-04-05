<?php include './config/db.php'?>

<?php  
        $id = $_GET['user_id'];
        $sql = "SELECT * from  users WHERE id='$id'";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
?>

        
        <div class="container">
       <form action="./function/update.php" method="POST">
       
               <fieldset>
                       <legend>User Edit Form</legend>

                       <input type="hidden" name="id" value="<?php echo $user['id'] ?>" />
       
                   <div>
                       <label for="Name">Name</label>
                       <input type="text" name="name" id="name" required value="<?php echo $user['name'] ?? '' ?>" placeholder="Enter Your Name">
                   </div>
                   <div>
                       <label for="class">Class</label>
                       <input type="text" name="class" id="class" required value="<?php echo $user['class'] ?? '' ?>" placeholder="Enter Your Class">
                   </div>
                   
                   <input type="submit" value="Update">
       
               </fieldset>
       
       
       
        </form>
        </div>