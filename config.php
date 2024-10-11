<?php 

$hostname = 'localhost';
$username = 'u445536153_ositester';
$password = '#4lFygmvg*#F';
$dbname = 'u445536153_osimodel';

$config = mysqli_connect($hostname,$username,$password,$dbname);

if($config)
{
	echo "";
}
else
{
	echo "Database Connection Failed with Error:".mysqli_connect_error();
}


?>