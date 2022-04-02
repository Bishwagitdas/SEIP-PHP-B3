<?php include './db.php'?>

<?php  





?>



<?php include ('./includes/header.php');?>
        
        <div class="container">
       <form action="./function/update.php" method="POST">
       
               <fieldset>
                       <legend>User Edit Form</legend>

                       <input type="hidden" name="id" value="<?php echo $user['id'] ?>" />;
       
                   <div>
                       <label for="Name">Name</label>
                       <input type="text" name="name" id="name" value="<?php echo $user['name'] ?? '' ?>" placeholder="Enter Name">
                   </div>
                   <div>
                       <label for="Email">Email</label>
                       <input type="email" name="email" id="email" value="" placeholder="Enter Email">
                   </div>
                   <div>
                       <label for="Password">Password</label>
                       <input type="password" name="password" id="password" value="" placeholder="Enter Password">
                   </div>
                   <input type="submit" value="Register">
       
               </fieldset>
       
       
       
        </form>
        </div>
       
        <?php include ('./includes/footer.php');?>