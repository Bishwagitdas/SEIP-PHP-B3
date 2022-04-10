<?php 

    include('./vendor/autoload.php');

    use Pondit\Student;

    $student = new Student;
    $id = $_GET['id'];
    $single_student = $student->edit($id);

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $student->update($_POST);
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
    <h1 class="text-center">Update Student</h1>

    <div class="container">

    <a class="btn btn-sm btn-primary text-white mb-3" href="index.php">Index</a> 

    <div class="card">

        <div class="card-header"> Update Student</div>
        <div class="card-body"> 
        <form action="" method="POST">

            <input type="hidden" name="id" value="<?= $single_student['id']?>"/>
            <div>
                <label>Name</label>
                <input 
                    type="text"  
                    value="<?= $single_student['name'] ?? '' ?>" name="name" 
                    class="form-control"
                />
            </div>

            <div class="mt-4">
                <label>Roll</label>
                <input 
                    type="text"  
                    value="<?= $single_student['roll'] ?? '' ?>" name="roll" 
                    class="form-control"
                />
            </div>

            <div>
                <button class="btn btn-sm btn-outline-dark mt-4" type="submit">Save</button>
            </div>
           
        </form>
        </div>
      
       
    </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>