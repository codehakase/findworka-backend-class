<?php

try {
  $db = new PDO("mysql:dbname=findworka;host=127.0.0.1", "root", "root");
} catch(PDOException $e) {
  die("Db connection error: " . $e->getMessage());
}

// Using prepared statements

$users = $db->prepare("SELECT * FROM users WHERE fullname = :name");
$users->execute([ ":name" => "Francis Sunday"]);

$user = $users->fetch(PDO::FETCH_OBJ);

echo "Welcome back " . $user->fullname;

function dumpy($var) {
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}
?>
