<?php
$colors = ["red", "blue", "green"];
$user = ["name" => "John Doe", "email" => "john@hakaselabs.co"];

foreach($users as $user) {
  echo "<pre>";
  var_dump($user);
  echo "</pre><br>";
}

$multiDimArray = [
    "configs" => [
        "api_key" => "xxx-xxx-xxx-xxx",
        "api_secret" => "zzz-zzz-zzz"
    ],
    "scopes" => [
        "user_scope" => [
            "has_access_to_admin" => [
                "demands" => [100,201,201]
            ]
        ]
    ]
];


$name = "Francis";
echo "<pre>";
var_dump($multiDimArray);
echo "</pre>";
$arrayObj = json_decode(json_encode($multiDimArray));
print_r($multiDimArray);
