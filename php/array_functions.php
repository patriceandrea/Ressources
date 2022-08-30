<?php

//sizeof($arr)
// return the size of array 

$lamborghinis = array("Urus", "Huracan", "Aventador");
echo "Size of the array is: " . sizeof($lamborghinis) . "\n";

// is_array($arr)
//check where the data is in form of an array
//Outputs true if its an array 
//outputs false if its not an array 

//using ternary operator 
echo is_array($lamborghinis) ? "Array \n" : "not an Array \n";

$mycar = "Urus";

echo is_array($mycar) ? "Array \n" : "not an Array \n";


// in_array($var, $arr)
//check if the value is present in an array 

$concept = "estoque";
echo in_array($concept, $lamborghinis) ? "Added to the lineup \n" : "Not yet! \n";


// print_r($arr)
// prints array as a whole including the keys-values pairs

print_r($lamborghinis);


//array_merge($arr1, $arr2)
// combine two arrays to turn into a single array 

$hatchbacks = array(
  "Suzuki" => "Baleno",
  "Skoda" => "Fabia",
  "Hyundai" => "i20",
  "Tata" => "Tigor"
);


$merged = array_merge($hatchbacks, $lamborghinis);

print_r($merged);


//array_values($arr)
// used if we want to take all values from array w/o keys and store in separate array 

$merged_values = array_values($merged);

//outputs the values only 
print_r($merged_values);
