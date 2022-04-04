
<?php     

class Calculator{

    public $number1;
    public $number2;
    public $result;
    public $operator;


    public function sum($a,$b){
        $this->number1 = $a;
        $this->number2 = $b;

        return $this->result = $this->number1 + $this->number2;
    }
    public function sub($x,$y){
        $this->number1 = $x;
        $this->number2 = $y;

        return $this->result = $this->number1 - $this->number2;
    }

    public function multi($p,$q){
        $this->number1 = $p;
        $this->number2 = $q;

        return $this->result = $this->number1 * $this->number2;
    }

    public function div($i,$j){
        $this->number1 = $i;
        $this->number2 = $j;

        return $this->result = $this->number1 / $this->number2;
    }
    public function mod($a,$b){
        $this->number1 = $x;
        $this->number2 = $y;

        return $this->result = $this->number1 % $this->number2;
    }
}

?>