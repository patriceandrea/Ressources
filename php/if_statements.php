<?php
$age = 26;

//if statement 
if ($age <= 25) {
  echo "You are not allowed to consume";
}


//if...else 
if ($age <= 25) {
  echo "You are not allowed to consume alcohol";
} else {
  echo "Enjoy the drinks";
}


//else if 

$speed = 110;

if ($speed < 60) {
  echo "Safe driving speed";
} elseif ($speed > 60 && $speed < 100) {
  echo "You are burning extra fuel";
} else {
  echo " It's dangerous";
}
