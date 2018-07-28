<?php 

  try {
    $db = new PDO("mysql:dbname=findworka;host=127.0.0.1", "root", "root");
  } catch(PDOException $e) {
    die("Database initialization failed: " . $e->getMessage());
  }

  // Select records
  $users = $db->query("SELECT * FROM users");

  foreach($users as $user) {
    dumpy($user["fullname"]);
  }

  
  // Insert/Create record
  // $newUser = $db->query("INSERT INTO users (fullname, email, username, password) VALUES ('Shola Money$$$', 'money@shola.com', 'money', 'money$$')");
  // if ($newUser) {
  //   dumpy($newUser);
  // }

  // Updare record
  $updateUser = $db->query("UPDATE users SET fullname = 'Shola Extra Money' WHERE id = 2;");
  
  // Delete record
  $deleteUser = $db->query("DELETE FROM users WHERE id = 2");
  function dumpy($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
  }
?>
