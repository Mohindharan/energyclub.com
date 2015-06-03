<?php

if(empty($_GET["p"]))
{
	header("location:blog-home.php?p=1");

}
else{
	$p=$_GET["p"];	
	}
	
include("bin/conx.php");	

		$query="SELECT * FROM post";
		$result=mysqli_query($con,$query);
		$num=mysqli_num_rows($result);
		$pow=pow(4,$p-1);
		if($pow==1)
		$pow=0;
		$numass=$num-$pow;
		$numpage=ceil($num/4);
		
if($p>$numpage)	
	header("location:blog-home.php?p=1");
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Energy club">
    <meta name="author" content="mako-man">

    <title>Blog | Energy Club</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

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
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Blog
                 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Blog</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">

                <!-- Blog Post -->
            <?php
			
			$query="SELECT * FROM post WHERE id<'$numass' OR id='$numass' ORDER BY id DESC LIMIT 4";
			$result=mysqli_query($con,$query);
			while($row=mysqli_fetch_assoc($result)){
	
				$id=$row["id"];
				$title=$row["title"];
				$content=$row["content"];
				$subject=$row["subject"];
				$date=$row["date"];
				$time=$row["time"];
				
                echo'
				<h2>
					<a href="blog-post.php?id='.$id.'">'.$title.'</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Admin</a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on '.$date.' at '.$time.'</p>
                <hr>
               
                
                <p>'.$subject.'</p>
                <a class="btn btn-primary" href="blog-post.php?id='.$id.'">Read More <i class="fa fa-angle-right"></i></a>

                <hr>

               ';
				}
			  
			  
			    ?>



                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                    <?php 
						if($p>1)
						{
						$temp=$p-1;
                        echo'<a href="blog-home.php?p='.$temp.'">&larr; Older</a>';
						}						
						?>
                    </li>
                    <li class="next">
                     <?php 
					
						if($numpage!=$p){
                       	$temp=$p+1;
                        echo'<a href="blog-home.php?p='.$temp.'">Newer &rarr;</a>';
						}
						
						?>
                        
                    </li>
                </ul>

            </div>
           
        </div>
        <!-- /.row -->

        <!-- Footer -->
   
       
            <div class="row">
           
                <div class="col-md-4">   </div>
                    
             
                     <div class="col-md-4">
                    <p>Copyright &copy; Your Website 2015</p>
               		 </div>
                <div class="col-md-4">
                    <p>Develope by <a href="https://github.com/mako-man">@mako-man</a></p>
                </div>
           	 </div>
    		</div>
   
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
