<?php

function display() {
    static $x = 10;
    echo $x;
    $x++;
}

display();
echo "\n";
display();
echo "\n";
display();

?>