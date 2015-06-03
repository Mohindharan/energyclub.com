<?php
$error="";
session_start();
if(isset($_POST["submit"])){
	include("conx.php");
	
	if(isset($_POST["username"])){
	$user=$_POST["username"];	
	$query="SELECT * FROM user WHERE user='$user'";
	$result=mysqli_query($con,$query);
	$row =mysqli_fetch_array($result);
	if($row["password"]==$_POST["password"]){
		$_SESSION["user"]=$user;
		header("location:post.php");	
		}
	}
	else{
			$error="wrong username or password";
		}
}

?>
<!DOCTYPE html>
<html>
<head>
<title></title>

<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Welcome</h1> 
<form class="form" action="index.php" method="post">

<input id="name" name="username" placeholder="username" type="text">

<input id="password" name="password" placeholder="Password" type="password">
<input name="submit" style="cursor:pointer" type="submit" id="login-button" value=" Login ">
<?php echo $error?>
</form>
</div>

	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

</body>
</html>