<?php  include('calculator.php')?>

<?php    

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $numberOne = $_POST['number1'] ?? 0 ;
    $numberTwo = $_POST['number2'] ?? 0 ;
    $operator = $_POST['operator'] ;

    $calculator = new Calculator;

    // if($operator == "plus"){
    //     $output = $calculator->sum($numberOne,$numberTwo);
    // }
    // if($operator == "minus"){
    //     $output = $calculator->sub($numberOne,$numberTwo);
    // }

    // if($operator == "multi"){
    //     $output = $calculator->multi($numberOne,$numberTwo);
    // }
    // if($operator == "div"){
    //     $output = $calculator->div($numberOne,$numberTwo);
    // }
    // if($operator == "mod"){
    //     $output = $calculator->mod($numberOne,$numberTwo);
    // }

    switch ($operator) {
        case "plus":
            $output = $calculator->sum($numberOne,$numberTwo);
            break;
        case "minus":
            $output = $calculator->minus($numberOne,$numberTwo);
            break;
        case "multi":
            $output = $calculator->multi($numberOne,$numberTwo);
            break;
        case "div":
            $output = $calculator->div($numberOne,$numberTwo);
            break;
        case "mod":
            $output = $calculator->mod($numberOne,$numberTwo);
            break;
    }

}

?>

<div style="border: 1px solid; width: 300px;height: 150px; margin:0 auto; padding:20px">

  <form action="" method="POST">

     <div style="margin-top: 10px">
         <label>Number One : </label>
         <input type="number" name="number1" placeholder="Enter Number"/>
     </div>

     <div style="margin-top: 10px">
         <label>Number Two : </label>
         <input type="number" name="number2" placeholder="Enter Number"/>
     </div>   
     <div style="margin-top: 10px">
     <label>Operator : </label>
        <select name="operator">
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="multi">*</option>
        <option value="div">/</option>
        <option value="mod">%</option>
        </select>
      </div>

     <div style="margin-top: 10px">
     <button type="submit">Calculate</button>
     </div>
    
     <h2>Result : <?php echo $output ?? ''?></h2>
      


  </div>

  </form>

</div>