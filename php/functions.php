<?php
// function name: only contain alphabet, number, and underscore
// fn name cannot start w a number 
// fn nanme are not case sensitive 
// opening curly braces 

function greetings()
{
  echo "Merry Christmas and  A Verry Happy New Year";
}

echo "Hey Martha \n";
greetings();

//Defining function with argument 

function greetings_arg($festival)
{
  echo "Wish you a very Happy $festival";
}

echo "Hey Jay \n";
greetings_arg("Diwali");

//default function arguments 

function greetings_noarg($festival = "Life")
{
  echo "Wish you a very Happy $festival";
}

echo "Hey Jon \n";
greetings_noarg();


// function returning values

function add($a, $b)
{
  $sum = $a + $b;
  return $sum;
}

echo "5 + 10 =" . add(5, 10) . "";
