<?php
$redir="";
if(isset($_POST["submit"])){	
include("bin/conx.php");
$name=$_POST["username"];
$email=$_POST["useremail"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$age=$_POST["age"];
$college=$_POST["college"];
$rollno=$_POST["rollno"];
$dept=$_POST["dept"];
$gender=$_POST["gender"];
$query="INSERT INTO member (Username,email,password,age,phone,college,rollno,dept,gender) VALUES('$name','$email','$password','$age','$phone','$college','$rollno','$dept','$gender') ";
mysqli_query($con,$query);
echo '<div class="alert alert-success"><i class=" fa fa-check"></i> register complete</div>';

$redir='<script>
		$(document).ready(function(e) {
		setTimeout(function(){	
        $(location).attr("href","index.php");
		},3000);
        });
		
</script>';

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="favicon.ico" type="image/x-icon">
	 <meta name="description" content="eco-club">
    <meta name="author" content="">

    <title>Energy Club| Eco- Club|Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/signin.css">
<link rel="stylesheet" href="css/normalize.css">
</head>
<body>
	<?php echo $redir; ?>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#FFF;" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="margin:-15px; top:0; position:fixed;" href="index.php"><img src="img/logo.jpg" width="150" height="50"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="register.php">Register</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="gallery.html">Gallery</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="blog-home.php">Blog</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 
  <form  method="post" action="register.php" id="signupform" >
  <legend>Your Profile info</legend>
  
  
            <label for="name">Userame:</label>
            <input id="username" type="text" name="username" maxlength="16" />
            <span id="unamestatus"></span>
            
            <label for="mail">Email:</label>
            <input type="email" id="email" name="useremail"  required="required" id="email" type="text" maxlength="88"/>
            
            
            <label for="password">Password:</label>
            <input type="password" id="pass" name="password" required="required"  maxlength="16" />
          <label for="age">Age:</label>
            <input type="number" id="age" name="age" required="required" min="12" />
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required="required" />
            <label for="collage">college:</label>
            <input type="text" required="required"  id="college" name="college" /> 
             <label for="dept">Department:</label>
            <input type="text" required="required"  id="dept" name="dept" /> 
            
                 
            <label for="rollno">Roll no:</label>
            <input type="text"  id="rollno" name="rollno" required="required" />      
            
            <label>Gender:</label>
            <select id="gender" name="gender">
            <option value=""></option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            </select>
   
            <br><br>
            <button name="submit" id="signupbtn" value="submit"type="submit" >Create Account</button>
            <span id="status"></span>
            
</form>

     <hr>

        <!-- Footer -->
   
           
            <div class="row">
           
                <div class="col-md-4">
                    
                </div>
                     <div class="col-md-4">
                    <p>Copyright &copy; Your Website 2015</p>
                </div>
                <div class="col-md-4">
                    <p>Develope by <a href="https://github.com/mako-man">@mako-man</a></p>
                </div>
            </div>
		
    

    </div>
    <!-- /.container -->



</body>
</html>