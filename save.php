<?php
require 'connection.php';

date_default_timezone_set('Asia/Kolkata');

$date=date('Y-m-d');


$sql = mysqli_query($conn,"SELECT MAX(id) FROM articles");

$article_id= mysqli_fetch_array($sql);

$id= ++$article_id[0];

$title		= 	mysqli_real_escape_string($conn,$_POST['title']);
$content	= 	mysqli_real_escape_string($conn,$_POST['content']);

$title		= strip_tags($title);
$content	= strip_tags($content);

$key = 'article_'.$id; // Unique ID
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
	$v=mysqli_query($conn,"INSERT INTO articles VALUES ($id, '$title', '$content', '$date')");
	while($row=mysqli_fetch_array($v))
	$demos_result[]=$row; // Results storing in array
	$memcache->set($key, $demos_result, MEMCACHE_COMPRESSED, 1200); 
	// 1200 Seconds to store in cache
}


	echo "<script>alert('Article Added....');</script>";
	header('refresh:0;url=index.php');



?>