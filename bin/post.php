<?php
session_start();
	if(empty($_SESSION["user"]))
	{
		
		header("location:index.php");
	}
	if(isset($_POST["submit"])){
		include("conx.php");
		$type=$_POST["type"];
		$content=$_POST["content"];
		$subject=$_POST["subject"];
		$title=$_POST["title"];
		if($type=="new")
		{
			$query="INSERT INTO post(title,subject,content,date,time)VALUES('$title','$subject','$content',NOW(),CURRENT_TIME())";
		}
		else{
			$query="UPDATE post SET content='$content',subject='$subject',date=NOW(),time=CURRENT_TIME()  WHERE title='$title'";
			}
				mysqli_query($con,$query);
	}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../css/post.css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/app.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
</head>

<body>
<a href="logout.php" class="btn btn-large btn-info">Logout</a>
<form action="post.php" method="post">
<div class="newPost">
  <h3>Add New Post</h3>
  <input type="text" name="title" placeholder="Enter title here">
  <input type="text" name="subject" placeholder="subject">  
  <select id="type" name="type">
   <option selected="selected" value="new">New</option>
   <option value="update">update</option>      
  </select>
  <div class="toolbar">
    <button type="button" data-func="bold"><i class="fa fa-bold"></i></button>
    <button type="button" data-func="italic"><i class="fa fa-italic"></i></button>
    <button type="button" data-func="underline"><i class="fa fa-underline"></i></button>
    <button type="button" data-func="justifyleft"><i class="fa fa-align-left"></i></button>
    <button type="button" data-func="justifycenter"><i class="fa fa-align-center"></i></button>
    <button type="button" data-func="justifyright"><i class="fa fa-align-right"></i></button>
    <button type="button" data-func="insertunorderedlist"><i class="fa fa-list-ul"></i></button>
    <button type="button" data-func="insertorderedlist"><i class="fa fa-list-ol"></i></button>
    
    <div class="customSelect">
      <select data-func="fontname">
        <optgroup label="Serif Fonts">
          <option value="Bree Serif">Bree Serif</option>
          <option value="Georgia">Georgia</option>
           <option value="Palatino Linotype">Palatino Linotype</option>
          <option value="Times New Roman">Times New Roman</option>
        </optgroup>
        <optgroup label="Sans Serif Fonts">
          <option value="Arial">Arial</option>
          <option value="Arial Black">Arial Black</option>
          <option value="Asap" selected>Asap</option>
          <option value="Comic Sans MS">Comic Sans MS</option>
          <option value="Impact">Impact</option>
          <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
          <option value="Tahoma">Tahoma</option>
          <option value="Trebuchet MS">Trebuchet MS</option>
          <option value="Verdana">Verdana</option>
        </optgroup>
        <optgroup label="Monospace Fonts">
          <option value="Courier New">Courier New</option>
          <option value="Lucida Console">Lucida Console</option>
        </optgroup>
      </select>
    </div>
    <div class="customSelect">
      <select data-func="formatblock">
        <option value="h1">Heading 1</option>
        <option value="h2">Heading 2</option>
        <option value="h4">Subtitle</option>
        <option value="p" selected>Paragraph</option>
      </select>
    </div>
  </div>
  <div class="editor" contenteditable="true">
  </div>
  <input type="text" class="hidden" name="content"/>
  <div class="buttons">
    
    <button data-func="save" type="button">save</button>
    <button type="submit" type="button" name="submit">Post</button>
  </div>
</div>
</form>
</body>
</html>