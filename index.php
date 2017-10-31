<!DOCTYPE html>
<html>
<head>
	<title>Blog Post Creator</title>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

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

  		h2, h3 {
  			color: #ffffff;
  			text-align: center;
  			font: bold Sans-Serif;
  			color: white;
  			text-shadow: 0 1px 0 #ccc,
		                 0 2px 0 #c9c9c9,
		                 0 3px 0 #bbb,
		                 0 4px 0 #b9b9b9,
		                 0 5px 0 #aaa,
		                 0 6px 1px rgba(0,0,0,.1),
		                 0 0 5px rgba(0,0,0,.1),
		                 0 1px 3px rgba(0,0,0,.3),
		                 0 3px 5px rgba(0,0,0,.2),
		                 0 5px 10px rgba(0,0,0,.25),
		                 0 10px 10px rgba(0,0,0,.2),
		                 0 20px 20px rgba(0,0,0,.15);
  		}
	</style>
</head>

<body class="body_bg">

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