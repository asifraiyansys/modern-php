<?php
$x = 10; // Global scope
$y = 20; // Global scope

function display() {
    // using x inside this function will not work
    echo "Variable x inside this function is: $x";
}

    display();

    echo "Variable x outside function is: $x";

    echo "\n";

    function displayGlobal() {
        // global keyword is used to access global variable in function
        global $x, $y;

        $z = $x + $y;

        echo "The sum of x and y is: $z";

    }

    displayGlobal();
    echo "\n";

    // $GLOBALS is a superglobal variable in PHP which is used to access global variables from anywhere in the script.
    $GLOBALS['x']  = 100;
    $GLOBALS['y'] = 200;

    displayGlobal();

    function displayGlobalUsingGLOBALS() {
        $z = $GLOBALS['x'] + $GLOBALS['y'];
        echo "\nThe sum of x and y using GLOBALS is: $z";
        $GLOBALS['y'] = 250;
    }

    displayGlobalUsingGLOBALS();
    displayGlobalUsingGLOBALS();

    echo "\n";
    displayGlobal();
?>