<?php 

  try {
    $db = new PDO("mysql:dbname=findowrka;host=127.0.0.1", "root", "root");
  } catch(PDOException $e) {
    die('Db connection error: '. $e->getMessage());
  }
?>
