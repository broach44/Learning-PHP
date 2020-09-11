<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Associative Arrays</title>
</head>
<body>

  <form action="associativeArrays.php" method="post">
    <input type="text" name="student">
    
    <input type="submit">
  </form>


  <?php 
  
    $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
    $grades["Jim"] = "F";
    // echo $grades["Pam"];

    echo $grades[$_POST["student"]];
  ?>
  
</body>
</html>