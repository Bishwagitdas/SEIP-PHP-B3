<?php 

    include('./vendor/autoload.php');

    use Pondit\Student;

    $student = new Student;

    $id = $_GET['id'];

    $single_student = $student->show($id);

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
    <h1 class="text-center">All Information Student</h1>

    <div class="container">

    <a class="btn btn-sm btn-primary text-white mb-3" href="index.php">Index</a> 

    <div class="card">

        <p>Name: <?= $single_student['name']?></p>
        <p>ROll: <?= $single_student['roll']?></p>
        <p>Class: <?= $single_student['class']?></p>
        <p>Locaiton: <?= $single_student['location']?></p>
        <p>GPA: <?= $single_student['gpa']?></p>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>


