<?php require 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>View Articles</title>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<?php

$key = md5('selectallarticles'); // unique only for selecting all articles
$cache_result = array();
$cache_result = $memcache->get($key); // Memcached object 

if($cache_result)
{
// Second User Request
$demos_result=$cache_result;
}
else
{
// First User Request 
$v=mysqli_query($conn,"select * from articles");
while($row=mysqli_fetch_array($v))
$demos_result[]=$row; // Results storing in array
$memcache->set($key, $demos_result, MEMCACHE_COMPRESSED, 1200); 
// 1200 Seconds data will be stored in cache
}




?>
	
	<h2> View Articles </h2>
	
	  <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Title</th>
        <th>Saved At</th>
        <th>View</th>
      </tr>
    </thead>
    <tbody>
<?php

 $i=1;
foreach($demos_result as $row)
{


?>

      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row["title"]; ?></td>
        <td><?php echo $row["saved_at"]; ?></td>
        <td><a href="show_articles.php?id=<?php echo $row["id"]; ?>">View More...</a></td>
      </tr>
<?php
$i++;
}

?>
    
    </tbody>
  </table>

</body>
</html>