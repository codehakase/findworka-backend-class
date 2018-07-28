<?php 
  require_once 'init.php';
  $data = "fix";
if (isset($_POST['login'])) {
  // fetch account with username 
  $account = $db->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
  $account->execute([":username" => $_POST['username']]);
  if ($account) {
    // compare hash with password
    // PDO::FETCH_OBJ -> sets the fetch method, to fetch the rows as objects
    $acct = $account->fetch(PDO::FETCH_OBJ);
    if (password_verify($_POST['password'], $acct->password)) {
      // password match, redirect to dashboard.
      $_SESSION['userid'] = $acct->id;
     header('Location: profile.php'); 
    }
  } else {
    header('Location: login.php?err=true');
  }
}
?>

<!Doctype html>
<html>
  <head>
    <title>PHP/MySQL</title>
    <style>
      form, input {
        display: block;
      }
    </style>
  </head>
  <body>
    <h1>Signup New Account</h1>
    <?php if(isset($_GET['err']) && $_GET['err'] == 'true'):?>
      <h3 style="color: red"><i>An error occurred, while logging into your account</i></h3>
      <?php endif;?>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
      <label>Username</label>
      <input type="text" name="username">
      <label>Password</label>
      <input type="Password" name="password">
      <br>
      <input type="submit" name="login" value="Login Account">
    </form>
  </body>
</html>
