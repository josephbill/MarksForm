<?php
$english;
$math;
$hindi;
$sum;
$average;

$english = 10;
$hindi = 10;
$math = 10;

$sum = $english + $hindi + $math;
$average = $sum / 3;
echo  $average."%";
echo "<br>";

switch ($average) {
  case $average>=60:
    # code...
     echo "1st division";
    break;
    case $average>=50;
    echo "2nd division";
    break;

    case $average>=35:
      # code...
    echo "3rd division";
      break;

  default:
    # code...
      echo "failed";
    break;
}



?>