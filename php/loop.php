<?php

// while loop 

$a = 1;

while ($a <= 10) {
  echo "$a | ";
  $a++;
}


// do while loop 

$b = 1;
do {
  echo "$b | ";
  $b++;
} while ($b <= 10);


//for loop 
for ($c = 1; $c <= 10; $c++) {
  echo "
  $c 
  <br/>";
}


//nested for loop 

for ($a = 0; $a <= 2; $a++) {
  for ($b = 0; $b <= 2; $b++) {
    echo "$b $a ";
  }
}
?>

<?php
//for each loop
$array = array("Jaguar", "Audi", "Mercedes", "BMW");

foreach ($array as $var) {
  echo "$var \n";
}

?>

<?php
//break using loops 

//i.e. we want to find the first number divisible by 13
$x = 13;
for ($i = 1762; $i < 1800; $i++) {
  if ($i % $x == 0) {
    echo " The number is $i";
    break;
  }
}

?>