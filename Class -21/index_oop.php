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

?>