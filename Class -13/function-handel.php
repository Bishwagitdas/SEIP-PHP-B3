<?php  

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $number_one =(int) $_POST['number_one'];
    $number_two =(int) $_POST['number_two'];

    if(is_int($number_one) && is_int($number_two)){
        $result =$number_one + $number_two;
        echo "$number_one + $number_two = $result";
    }
    else{
        echo "number not int";
    }

}
else{
    echo "error";
}


?>