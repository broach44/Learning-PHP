<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Arrays</title>
</head>
<body>

  <?php 
    $friends = array("Kevin", "Karen", "Oscar", "Jim");
    $friends[4] = "Angela";
    echo $friends[4];
    echo count($friends);
  ?>

</body>
</html>