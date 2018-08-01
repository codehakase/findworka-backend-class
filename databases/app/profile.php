<?php 
require_once 'init.php';
//session_start();
if (isset($_GET['id'])) {
	# code...
	$_SESSION['userid'] = $_GET['id'] ;
	$data = $db->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
	$data->execute([":id" => $_SESSION['userid']]);
	$userdata = $data->fetch(PDO::FETCH_OBJ);
}elseif(isset($_POST['id'])){
	$_SESSION['userid'] = $_POST['id'];
	if (isset($_POST['Save'])) {
		# code...
	$data = $db->prepare("UPDATE users SET username =:username,fullname = :fullname WHERE id = :id ");
	$data->execute( [":id"=> $_SESSION['userid'],
	":username" => $_POST['username'],
	"fullname" => $_POST['fullname']
]);

	if ($data) {
		# code...
		header("Location: login.php");
		return;
	}

	}


}else{
	header("Location:login.php");
}

/*
if (!isset($_SESSION['userid'])) {
  header('Location: signup.php');
  return;
}
*/




?>

<html>


  <head>
  	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  	<!-- jQuery first, then Popper.js and Bootstrap JS. -->
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </head>
  <body>
  <div class="row">
  	<div class="container">
  		<div class="col-md-6">
  		  	 <div class="card text-center">
  				
  				<div class="card-body">
  					<h4 class="card-title">Profile</h4>
  					
  				       
  						<?php if (isset($_POST['edit'])) { ?>
  							
  							<form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
  							<fieldset class="form-group">
  								<label for="formGroupExampleInput">Username</label>
  								<input type="text" name="username" class="form-control" id="formGroupExampleInput" placeholder="<?=$_POST['uname']?>">
  							</fieldset>
  							<fieldset class="form-group">
  								<label for="formGroupExampleInput2">Fullname</label>
  								<input type="text" class="form-control" name="fullname" id="formGroupExampleInput2" placeholder="<?=$_POST['fname']?>">
  							</fieldset>
  							<input type="hidden" name="id" value="<?php echo $_SESSION['userid'] ?>"/>
  							<fieldset class="form-group">
  								<input type="submit" class="btn btn-success" value="Save" name="Save"/>
  							</fieldset>
  							
  						</form>
				  			<?php	
  						} else{
  							?>
  							 <ul class="list-group">
  							<li class="list-group-item">
  								<span class="label label-default label-pill  "><b>Username:</b></span>
  								<?= $userdata->username;?>
  							</li>
  							<li class="list-group-item">
  								<span class="label label-default label-pill  "><b>Fullname:</b></span>
  								<?= $userdata->fullname;?>
  							</li>
  							<form action="<?= $_SERVER['PHP_SELF']?>" method="POST" >
  							<input type="hidden" name="id" value="<?php echo $_SESSION['userid'] ?>"/>
  							<input type="hidden" name="uname" value ="<?=$userdata->username;?>"/>
  							<input type="hidden" name="fname" value="<?=$userdata->fullname?>" />
  							<fieldset class="form-group">
  								<input type="submit" class="btn btn-success" value="Edit" name="edit"/>
  							</fieldset>
  							</form>
  							
  						</ul>
  						<?php
  						}
  						?>
  							
  						
  				</div>
  			</div>
  		</div>
  	</div>

  </div>
 
 
  </body>
</html>
