<?php

// MYSQLI Connection localhost,root,password,database_name

$conn= mysqli_connect("localhost","root","","blog");

 
//Connecting to memcache server
$memcache = new Memcache;
$memcache->connect('localhost', 11211) or die ("Could not connect to memcache");

?>