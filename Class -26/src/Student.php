<?php 
namespace Pondit;
use PDO;
use Pondit\DB;

class Student{

    
    public function index(){
        $sql = "SELECT * FROM students";
        $db = new DB;
        $db->connection();
        $stmt = $db->prepareSql($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  
    }


    public function store($data){

        $name = $data['name'];
        $roll = $data['roll'];
        $sql = "INSERT INTO students(name, roll) VALUES('$name', '$roll')";

        $db = new DB;
        $db->connection();
        $stmt = $db->prepareSql($sql);
        $stmt->execute();

        session_start();
        $_SESSION['msg'] = "SUCCESSFULLY INSERT";
        header('location: index.php');
    }


    public function show($id){

        $sql = "SELECT * FROM students WHERE id='$id'";
        $db = new DB;

        $db->connection();
        $stmt = $db->prepareSql($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);  
    }

    public function edit($id){

        $sql = "SELECT * FROM students WHERE id='$id'";
        $db = new DB;

        $db->connection();
        $stmt = $db->prepareSql($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);  
    }


    
    public function update($data){

        $name = $data['name'];
        $roll = $data['roll'];
        $id = $data['id'];

        $sql = "UPDATE students SET name='$name', roll='$roll'  WHERE id='$id'"
        ;

        $db = new DB;
        $db->connection();
        $stmt = $db->prepareSql($sql);
        $stmt->execute();

        session_start();
        $_SESSION['msg'] = "SUCCESSFULLY UPDATE";
        header('location: index.php');
    }

    public function delete($id){

        $sql = "DELETE from students WHERE id='$id'";
        $db = new DB;
        $db->connection();
        $stmt = $db->prepareSql($sql);
        $stmt->execute();

        session_start();
        $_SESSION['msg'] = "SUCCESSFULLY DELETE";
        header('location: index.php');
    }

}

?>
