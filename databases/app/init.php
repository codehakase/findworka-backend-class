<?php 
session_start();
  try {
    $db = new PDO("mysql:dbname=findworka;host=127.0.0.1", "root", "root");
  } catch(PDOException $e) {
    die('Db connection error: '. $e->getMessage());
  }
?>
