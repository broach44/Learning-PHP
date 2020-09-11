<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Resturn Statements</title>
</head>
<body>
  


  <?php 
  
    $isMale = false;
    $isTall = true;
    if ($isMale && $isTall){
      echo "Yes this person is male and tall.";
    } elseif ($isMale && !$isTall) {
      echo "You are a short male";
    } elseif (!$isMale && $isTall) {
      echo "You are a tall female";
    } else {
      echo "You are a short female";
    }

  ?>


</body>
</html>