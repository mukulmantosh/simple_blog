<?php require 'connection.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$id= mysqli_real_escape_string($conn,$_GET['id']);
$id= strip_tags($id);

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
$v=mysqli_query($conn,"SELECT content FROM articles WHERE id = " . $id);
while($row=mysqli_fetch_array($v))
$demos_result[]=$row; // Results storing in array
$memcache->set($key, $demos_result, MEMCACHE_COMPRESSED, 1200); 
// 1200 Seconds to store in cache
}

// Result 
foreach($demos_result as $row)
{
echo $row["content"];
}

?>

</body>
</html>