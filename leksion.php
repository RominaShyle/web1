<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </head>
  <body>

    <div class="container my-4">
    <h1 class="text-center"> LEKSIONE PHP</h1>

<?php
#switch case

$dita = "e Merkure";

switch($dita){

case "e Hene":
echo "<br> <p class= 'text-center'>Sot eshte e Hene.</p>";
break;

case "e Merkure":
echo '<br><p class= "text-center"> Sot nuk eshte e Hene.</p>';
break;

default:
echo "<p class= 'text-center'>Nuk e dime ca dite eshte</p>";

}
#KONSTANTET


define("GOOGLE_URL", "https://www.google.com");

echo 'Thank you for visiting -' . GOOGLE_URL;




 ?>


      </div>

  </body>
</html>
