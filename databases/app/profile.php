<?php 
require_once 'init.php';

if (!isset($_SESSION['userid'])) {
  header('Location: signup.php');
  return;
}


$data = $db->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
$data->execute([":id" => $_SESSION['userid']]);
$userdata = $data->fetch(PDO::FETCH_OBJ);
?>

<html>

  <body>
    <h2>Username: <?= $userdata->username;?></h2>
    <h2>Fullname: <?= $userdata->fullname;?></h2>
  </body>
</html>
