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


// array_keys($arr)
//return the keys from an array 

$keys = array_keys($merged);

print_r($keys);


//array_pop($arr)
//removes last element of array from the end of the array

array_pop($lamborghinis);
print_r($lamborghinis);


// array_push($arr)
// add a new element at the end of the array 
array_push($lamborghinis, "Aventador");
array_push($lamborghinis, "Estoque");

print_r($lamborghinis);


//array_shift($arr)
//used to remove the first element of the array 

array_shift($lamborghinis);
print_r($lamborghinis);

//sort($arr)
// sorts array elements in ascending order
// sorted in alphabetical order 

//sort an array
sort($lamborghinis);

print_r($lamborghinis);


//array_map(function_name, $arr)
//similar to for loop and foreach 

function addOne($val)
{
  return ($val + 1);
}

$numbers = array(10, 20, 30, 40, 50);

$numbers = array_map('addOne', $numbers);

print_r($numbers);


//array_flip($arr)
//interchange the kets and values of an associative array 

print_r(array_flip($hatchbacks));


//array_reverse($arr)
//reverse the order of elements

print_r(array_reverse($numbers));


//array_rand($arr)
//chose a random element of the array 

$colors = array("red", "black", "blue", "green", "white", "yellow");

echo "Color of the day: " . $colors[array_rand($colors)];


//array_slice($arr, $offset, $length)
//creates a subset of any array 
//$offset = start 
//$length = number of elements required in subset 

print_r(array_slice($colors, 2, 3));
