<?php include ('./includes/header.php');?>

<div class="container">
<form action="./function/product.php" method="POST">

        <fieldset>
                <legend>Product Form  <button><a style="background:none; color:#000;" href="product.php">Product List</a></button></legend> 

            <div>
                <label for="Name">Name</label>
                <input type="text" name="name" id="name" value="" placeholder="Enter product Name">
            </div>
            <div>
                <label for="price">Price</label>
                <input type="price" name="price" id="price" value="" placeholder="Enter product price">
            </div>
           

            <input type="submit" value="save">

        </fieldset>



 </form>
 </div>




<?php include ('./includes/footer.php');?>