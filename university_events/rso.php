<?php
	session_start();
	$connection =  mysqli_connect("localhost", "root","");
	$db = mysqli_select_db($connection, "unifydb");

	if(!$connection)
  {
    die("Connection Failed: " . mysqli_connect_error());
  }

	if(isset($_POST['login']))
	{
		$uname=$_POST['uname'];
		$password=$_POST['password'];

		$query="SELECT * FROM users WHERE uname='$uname' AND password= '$password'";

		$result=mysqli_query($connection,$query);

		if(mysqli_num_rows($result)==1)
		{
			$_SESSION['uname'] = $uname;
		}
		else
		{
			echo "Your Login Info Is Incorrect!";
		}
	}

	if(isset($_POST['logout']))
	{
		session_destroy();
		header('Location: login.php');
	}
	?>


<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<link rel="stylesheet" a href="loginpage.css">
	<link rel="stylesheet" a href="font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<?php
	$sql="SELECT userID,uid FROM users WHERE uname='".$_SESSION['uname']."'";
	$result = mysqli_query($connection,$sql);
	$info = mysqli_fetch_all($result, MYSQLI_ASSOC);
	foreach($info as $info)
	{
		$id = $info['userID'];
		$uid = $info['uid'];
	}?>

	<?php if(!empty($_SESSION['uname'])){?>

	<div class="container text-light">
		<a href="index.php"><img src="logo.png"/></a>

		<div class="row">

			<div class="col-md">
				<div class="d-sm-flex justify-content-start"><a style="color:white;" href="events.php"<p>Events</p></a></div>
				<div class="d-sm-flex justify-content-start"><a style="color:white;" href="rso.php"<p>RSO</p></a></div>
				<div class="d-sm-flex justify-content-start"><a style="color:white;" href="myinfo.php"<p>My Info</p></a></div>
			</div>


			<div class="col-md-2">
				<div class="d-sm-flex justify-content-end">
					<p style="color:white;">Welcome <?php echo $_SESSION['uname'];?>!</p>
				</div>
				<div class="d-sm-flex justify-content-end px-4">
					<form method="post">
						<button class="btn-sm btn-danger" name="logout">Logout</button>
				</div>
				</form>
			</div>

		</div>
	</div>

</div>
	<?php }?>


<?php if(empty($_SESSION['uname'])){?>
	<div class="container1">
	<a href="index.php"><img src="logo.png"/></a>


		<form method="POST" action="#">
			<div class="form-input">
				<input type="text" name="uname" placeholder="Username"/>
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Password"/>
			</div>
			<input type="submit" type="submit" name="login" value="LOGIN" class="btn-login"/>
		</form>
</div>
	<?php }?>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
