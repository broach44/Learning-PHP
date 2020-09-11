<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Better Calculator</title>
</head>
<body>

  <form action="betterCalculator.php" method="post">
    First Num: <input type="number" step="0.1" name="num1"> <br>
    OP: <input type="text" name="op"><br>
    Second Num: <input type="number" name="num2"> <br>
    <input type="submit">
  </form>

  <?php 
  
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+"){
      echo $num1 + $num2;
    } elseif($op == "-"){
      echo $num1 - $num2;
    } elseif($op == "/"){
      echo $num1 / $num2;
    } elseif($op == "*"){
      echo $num1 * $num2;
    } else {
      echo "Please enter a valid operator and try again. (+, -, /, or *)";
    }
  
  ?>
  
</body>
</html>