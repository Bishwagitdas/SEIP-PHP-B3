<?php include './db.php'?>


<?php include ('./includes/header.php');?>

<div class="container">
<h3?>Product List</h3>--------------------> <button><a style="background:none; color:#000;" href="create_product.php">Create product</a></button>
<table  border="1">
   
    <thead>

      <tr>

        <th>#Sl_No</th>
        <th>Name</th>
        <th>price</th>
        <th>Action</th>

      </tr>

    </thead>

    <tbody>

    <tr>

      <td>1</td>
      <td>p1</td>
      <td>200</td>
      <td>
          <button>Show</button>
          <button>Edit</button>
          <button>Delete</button>
          
      </td>

    </tr>
     



    

    </tbody>
</table>

</div>

<?php include ('./includes/footer.php');?>