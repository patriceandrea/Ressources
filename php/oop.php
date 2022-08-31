<?php


class Person
{
  //store first name of person 
  var $fname;
  //store last name of person 
  var $lname;

  //gets name 
  function get_name()
  {
    return $this->name;
  }

  //sets name 
  function set_name($new_name)
  {
    $this->name = $new_name;
  }
}

//create class Person object 
$john = new Person();

//assign values to variables
$john->fname = "John";
$john->lname = "Wick";

class Human
{
  //for male 
  function male()
  {
    echo "this human is a male";
  }

  //for female 
  function female()
  {
    echo "This Human is a female";
  }
}


// Create an Object of a Class in PHP 
class Studytonight
{
  // to store name of person
  var $url = "studytonight.com";

  // simple class method
  function desc()
  {
    echo "Studytonight helps you learn Coding.";
  }
}


$obj = new Studytonight();
//access to the class Studytonight variable 

echo $obj->url . "\n";

//call class Studytonight method
$obj->desc() . "\n";
