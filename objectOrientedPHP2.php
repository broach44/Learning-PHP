<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OO Php 2</title>
</head>
<body>
  
  <?php
    class Student{
      var $name;
      var $major;
      var $gpa;

      function __construct($name, $major, $gpa){
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
      }
    }


  ?>



</body>
</html>