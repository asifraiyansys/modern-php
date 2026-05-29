<?php
    $text = "I Love PHP Programming Language";

    // strlen()
    echo strlen($text);

    echo "\n";

    // str_word_count()
    echo str_word_count($text);

    echo "\n";

    //  str_contains()
    var_dump(str_contains($text, "Loves"));
    echo "\n";
    $isContain = str_contains($text, "I");
    print("Is Contains = $isContain");
    echo "\n";

    // strpos()
    echo strpos($text, "o");
    echo "\n";

    // str_starts_with()
    echo str_starts_with($text, "I");
    echo "\n";
    var_dump(str_starts_with($text, "I"));
    echo "\n";

    // str_ends_with()
    var_dump(str_ends_with($text, "I"));
    echo "\n";
    var_dump(str_ends_with($text, "Language"));
    echo "\n";

?>