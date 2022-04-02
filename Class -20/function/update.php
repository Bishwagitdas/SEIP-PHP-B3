<?php include './db.php'?>

<?php   

try{
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name =$_POST['name'] ?? null;
        $password =$_POST['password'] ?? null;
        $id=$_POST['id'];

        $sql= "UPDATE users SET name='$name', password='$password' WHERE id='$id'";
        $statement = $pdo->prepare($sql);
        $statement -> execute();
        header('location: ../users.php');

    }else{
        throw new Exception('something is wrong');
    }

}catch(Exception $e){
    echo $e->getMessage();
}


?>