<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Switch Statements</title>
</head>
<body>
  
  <form action="switchStatements.php" method="post">
    What was your grade?
    <input type="text" name="grade">
    <input type="submit">
  </form>

  <?php
    $grade = $_POST["grade"];
    switch($grade){
      case "A":
        echo "You did amazing!";
        break;
      case "B":
        echo "You did pretty good";
        break;
      case "C":
        echo "You can do better";
        break;
      case "F":
        echo "You did horrible";
        break;
      default:
        echo "Invalid Grade entered";
    }
  ?>

</body>
</html>