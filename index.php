<!DOCTYPE html>
<html>
<head>
	<title>Blog Post Creator</title>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

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