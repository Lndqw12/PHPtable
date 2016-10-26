<meta charset="utf-8">
<?php
$host='localhost';
$dbname='baza3pk';
$user='root';
$password='';
	$db = new PDO("mysql:host=$host;dbname=$dbname", $email, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->exec("set names utf-8");
if (isset($_POST['email'])) { $email = $_GET['email'];}

if (isset($_POST['password'])) { $password = $_POST['password'];}
    $result2 = $db->query("INSERT INTO sec (email,password) VALUES('$email','$password')");
?>