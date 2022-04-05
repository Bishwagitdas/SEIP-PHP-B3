<?php include '../config/db.php'?>

<?php   

try{
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $id=$_GET['id'];

        $sql= "DELETE FROM users WHERE id='$id'";
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