<?php include '../config/db.php'?>

<?php   

try{
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name =$_POST['name'] ?? null;
        $class =$_POST['class'] ?? null;
        $id=$_POST['id'];

        $sql= "UPDATE users SET name='$name', class ='$class' WHERE id='$id'";
        $statement = $pdo->prepare($sql);
        $statement -> execute();
        header('location: ../index.php');

    }else{
        throw new Exception('something is wrong');
    }

}catch(Exception $e){
    echo $e->getMessage();
}


?>