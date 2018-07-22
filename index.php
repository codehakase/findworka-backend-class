<?php
    // Indexed arrays
    // Associative array
    // Multidimensional array
    $shollasHobbies = ["Making Money", "Making more money", "Code", "Music"];
    echo "One of Sholla's Hobbies, " . $shollasHobbies[2];
    // Save sholla's data
    $user = [
        "name" => "Sholla",
        "hobbies" => $shollasHobbies,
        "pronoun" => "his",
    ];
    echo "<br> Char len of name: ". strlen($user["name"]);
    echo "<pre>";
    var_dump($user);
    echo "</pre>";
   // echo sprintf("A new user logged in, Name: %s, and one of %s hobbies, %s", $user["name"], $user["pronoun"], $user["hobbies"][1]);
?>
<html>
    <head>
        <title>PHP Examples...</title>
    </head>
    <body>
</body>
</html>
