<?php 
session_start();

if (isset($_POST["submit"])) {
  $_SESSION["username"] = $_POST["username"];
}
if (isset($_POST["session_clear"])) {
  unset($_SESSION);
  session_destroy();
}
?>

<html>
  <form action="<?= $_SERVER["PHP_SELF"];?>" method="POST">
    <?php if(isset($_SESSION["username"])): ?>
      <h1>Welcome back <?= $_SESSION["username"]; ?></h1>
      <input type="submit" name="session_clear" value="Reset Session">
    <?php else: ?>
      <input type="text" name="username">
      <input type="submit" name="submit">
    <?php endif;?>
  </form>
  <a href="nosession.php">View Sessions set</a>
</html>
