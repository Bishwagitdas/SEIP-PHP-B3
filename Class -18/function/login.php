<?php include('../db.php')?>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=="bishwagitdas" && $password=="1111"){
        echo "Login Successfully!";

        echo <<< DEMO

        <div style="border:2px solid black; padding: 20px;">
    
    
            <h2>Welcome $username</h2>
          
        
        </div>
    
    
    DEMO;
    }
    else{

        echo "Login Failed";
    }
    
}
?>