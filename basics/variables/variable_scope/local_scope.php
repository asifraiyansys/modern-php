<?php
   function display() {
    $x = 5;

    echo "Variable x inside this function is: $x";
   } 
   
   display();

   // using x outside this function will not work
   echo "Variable x outside function is: $x";

?>