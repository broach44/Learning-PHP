<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie PHP example</title>
</head>
<body>
  
  <?php

    class Movie {
      public $title;
      private $rating;

      function __construct($title, $rating){
        $this->title = $title;
        $this->setRating($rating);
      }

      function getRating(){
        return $this->rating;
      }

      function setRating($rating){
        switch($rating){
          case "G":
            $this->rating = $rating;
            break;
          case "PG":
            $this->rating = $rating;
            break;
          case "PG-13":
            $this->rating = $rating;
            break;
          case "R":
            $this->rating = $rating;
            break;
          case "NR":
            $this->rating = $rating;
            break;
          default:
            $this->rating = "NR";
        }
      }
    }

    $avengers = new Movie("Avengers", "PG-13");
    $avengers->setRating("G");
    echo $avengers->getRating();



  ?>



</body>
</html>