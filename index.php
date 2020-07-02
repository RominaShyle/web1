<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title></title>
  </head>
  <body>
    <h1> Ky eshte index-i i php</h1>

<a href="leksion.php" target="_blank">Next page</a>
    <h2>
<?php $text = "Ky eshte shkrim nga php.";
$var1 = 123;
echo $text;
 ?>

  </h2>
  <br>
  <h2> Shuma e 2 numrave </h2>
  <?php

  $var1 = 12;
  $var2 = 13;
  $sum = $var1 + $var2;

  echo "$var1 + $var2 = $sum";
  echo "<br> <br>";


$cars = array("Volvo", "BMW", "Mercedez");
echo "<pre>";
var_dump($cars);
echo "</pre>";

#per te indeksuar/afishuar "BMW"
echo $cars[1];

$colors=array(
  "White" => "#fffff",
  "Black" => "#00000",
  "Red" => "#ff0000"
);
# Per te indeksuar/afishuar #ff0000
 echo $colors["Red"];

echo "<pre>";
var_dump($colors);
echo "</pre>";



//metodat e strings

# strlen(string)->gjen madhesine e stringut

$str1= "Sot eshte e premte";

$size = strlen($str1);
echo "Madhesia e stringut eshte $size";

# str_word_count(string) -> numeron fjalet ne nje string

$count = str_word_count($str1);
echo "<br>Fjalia ka $count fjale";


# strrev(string)-> e sjell mbrapsht
$reversed = strrev($str1);
echo "<br> $str1 mbrapsht behet $reversed.";

# str_replace(hiqet, vendoset, stringu) -> zevendeson fjalet

$newStr = str_replace("premte", "shtune", $str1);
echo "fjalia e re eshte: $newStr";

# strpos(stringu, fjala ) ->kthen pozicionin nese gjendet, nese nuk gjendet kthen false (bool)

$pos = strpos($str1, "sot");
echo "<br> Sot gjendet ne pozicionin $pos";
// var_dump($pos);



# abs(x) -> kthen vleren absolute te nje numri

$nr1= -34;
$nr2 = $nr1+$nr1;
$abs = abs($nr1);
echo $abs . '<br>';
echo "Vlera absolute e -34+3 eshte: abs(-34+3)";


echo "<br> $nr1 + $nr1 eshte e barabarte me $nr2";
echo "<br> emri i variablit eshte $nr1";
echo '<br>' . $nr1 . '+ ' . $nr1 . ' eshte e barabarte me ' . $nr2 . '!';


# sqrt(x) ->kthen rrenjen e numrit

$sqrt = sqrt(-21);

echo '<br>';
var_dump(is_int($newStr));
#is_int(x) -> nxjerr true nese variabla eshte integer, ne te kundert false
echo "<br> Rrenja e $abs eshte $sqrt.";


# rand() -> gjeneron nje numer rastesor

echo '<br> Nje numer rastesor eshte:' . rand();

#GJETJA E RRENJEVE NE EKUACION TE FUQISE SE PARE

# x^2 - 5x + 6 = 0;

$a = 1;
$b = -5;
$c = 10;

$d = pow($b, 2) - (4 * $a * $c);

echo "<br>" . $d;

if($d > 0){

  $x1 = (-$b + sqrt($d))/2*$a;
  $x2 = (-$b - sqrt($d))/2*$a;

  echo "<br> Rrenjet e ekuacionit jane: $x1 dhe $x2";

}
elseif($d == 0){
  $x1 = -$b/(2*$a);
  echo "<br> Ekuacioni ka nje rrenje, qe eshte: $x1";
}
else
echo "<br> ekuacioni nuk ka zgjidhje";


#swith case






   ?>

  </body>
</html>
