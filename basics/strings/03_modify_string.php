<?php

$text = "I Love PHP";
  // strtoupper()
  echo strtoupper("$text\n");

  // strtolower()
  echo strtolower("$text\n");

  // str_replace()
  echo str_replace("PHP", "Dart", $text);
  echo "\n";

  // strrev()
  echo strrev($text);
  echo "\n";

  // trim()
  $text1 = "       Hi, World";
  echo "$text1\n";
  echo trim($text1);
  echo "\n";

  // explode()
  print_r(explode(" ",$text));
  echo "\n";


?>