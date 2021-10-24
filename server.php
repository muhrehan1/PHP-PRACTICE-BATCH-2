<?php


$server = 'localhost';
$server_user = 'root';
$server_password = '';
$server_name = 'php_db';

$connection = mysqli_connect($server,$server_user,$server_password,$server_name);

echo'<pre> <br> <strong>Connected Successfully</strong> <br>';
print_r($connection);
echo'</pre>';
