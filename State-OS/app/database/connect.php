<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'sos';

$conn = new MySQLi($host,$username,$password,$db_name);

if ($conn->connect_error)
{
    die('Database connection error:' . $conn->connect_error);
}
