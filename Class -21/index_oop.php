<?php 

class Info{

    public $name;
    public $address;
    public $age;

    public function setData($name,$address,$age){
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;

        $this->printData();
    }
    public function printData(){
        echo "<p> Name : $this->name || Address: $this->address || Age: $this->age </p>";
    }

}
$info1= new Info;
$info2= new Info;
 
$info1->setData("Bishwagit","Dhaka","24");
$info1->setData("Bishwagit Das","Naogaon","24");


?>