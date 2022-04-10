<?php 
    session_start();
    include('./vendor/autoload.php');

    use Pondit\Student;

    $student = new Student;
    $all_students = $student->index();


    // delete 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        $id = $_POST['id'];
        $student->delete($id);
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="text-center">All Students</h1>

    <div class="container">

    <?php 
    
        if(isset($_SESSION['msg'])){
            $msg = $_SESSION['msg'];
            echo "<p  id='alert-msg' style='color:green'>$msg</p>";
            session_destroy();
        }

    ?>



    <a class="btn btn-sm btn-primary text-white mb-3" href="create.php">Add Student</a> 

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Ser </th>
                <th>Name</th>
                <th>Roll</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>

        <?php $i = 1 ?>
           
        <?php foreach($all_students as $student): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $student['name']?></td>
                <td><?= $student['roll']?></td>

                <td class="text-center">
                    <a  href="show.php?id=<?= $student['id'] ?>" class="btn btn-sm btn-success">Show</a>
                    <a href="edit.php?id=<?= $student['id']?>" class="btn btn-sm btn-warning">Edit</a>
                    
                    <form action="" method="POST" style="display: inline-block;">
                    <input type="hidden" name="id" value="<?= $student['id']?>"/>

                        <button class="btn btn-sm btn-danger">DELETE</button>

                    </form>


                </td>
                
            </tr>

            <?php endforeach;?>


        </tbody>
    </table>


    </div>


<script>

setTimeout(function(){
        document.getElementById('alert-msg').style.display='none';
},3000);


</script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>


