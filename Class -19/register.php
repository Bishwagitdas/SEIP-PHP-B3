 <?php include ('./includes/header.php');?>
        
 <div class="container">
<form action="./function/register.php" method="POST">

        <fieldset>
                <legend>Registration Form</legend>

            <div>
                <label for="Name">Full Name</label>
                <input type="text" name="name" id="name" value="" placeholder="Enter Name">
            </div>
            <div>
                <label for="Email">Email</label>
                <input type="email" name="email" id="email" value="" placeholder="Enter Email">
            </div>
            <div>
                <label for="Password">Password</label>
                <input type="password" name="password" id="password" value="" placeholder="Enter Password">
            </div>
            <!-- <div>
                <label for="gender">Gender</label>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
            </div> -->
            <input type="submit" value="Register">

        </fieldset>



 </form>
 </div>

 <?php include ('./includes/footer.php');?>