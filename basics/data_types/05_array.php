<?php
    $cities = array("Dhaka", "Chittagong", "Khulna", "Barishal", "Sylhet", "Rajshahi");
    $firstcity = $cities[0];
    echo "The first city is $firstcity.";
    echo "\n";
    $secondCity = $cities[1];
    echo "The second city is $secondCity."; 
    echo "\n";
    $thirdCity = $cities[2];
    echo "The third city is $thirdCity.";
    echo "\n";
    $fourthCity = $cities[3];
    echo "The fourth city is $fourthCity.";
    echo "\n";
    $cities = NULL;
    var_dump($cities);
?>