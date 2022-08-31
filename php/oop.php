<?php


class Person
{
  //store first name of person 
  private $fname;
  //store last name of person 
  private $lname;

  //gets name 
  function get_name()
  {
    return $this->name;
  }

  //sets lname 
  public function setLName($new_name)
  {
    $this->name = $new_name;
  }


  //sets fname 
  public function setFName($new_name)
  {
    $this->name = $new_name;
  }

  function showName()
  {
    echo "My name is: " . $this->fname . " " . $this->lname . "\n";
  }
}

//create class Person object 
$john = new Person();

//assign values to variables
$john->fname = "John";
$john->lname = "Wick";

//call Person class method 
$john->showName();


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
