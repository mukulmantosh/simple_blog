<!DOCTYPE html>
<html>
<head>
	<title>Blog Post Creator</title>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<<<<<<< HEAD

	<style type="text/css">
		.body_bg {
			background-color: #ccccff;
  			padding: 2.25em 1.6875em;
  			background-image: -webkit-repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  			background-image: -moz-repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  			background-image: -o-repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  			background-image: repeating-linear-gradient(135deg, rgba(0,0,0,.3), rgba(0,0,0,.3) 1px, transparent 2px, transparent 2px, rgba(0,0,0,.3) 3px);
  			-webkit-background-size: 4px 4px;
  			-moz-background-size: 4px 4px;
  			background-size: 4px 4px;
  		}
	</style>
</head>
<body class="body_bg">
=======
</head>
<body>
>>>>>>> cad4bcf05bf58a3e0bede515cedd51e0eb0c67f4

	<center>
	<h2> Blog Post Creator </h2>
	<form action="save.php" method="post">
		<h3>Title</h3>
		<p><input type="text" class="form-control" style="width:20%;" name="title" id="title"/></p>
		<h3>Content</h3>
		<textarea name="content" class="form-control" style="width:50%;" rows="15"></textarea>
		<br>
		<p><input type="submit" class="btn btn-info" name="btn_submit" value="Save"/></p>
	</form>
	<a class="btn btn-primary" href="view.php">VIEW ARTICLES</a>
</center>

</body>
</html>