<?php
$pdo = new PDO('mysql:host=localhost;dbname=road2', 'root', 'pumpkin');

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM user where username = '$username'";
$hash = $pdo->query($sql)->fetch(); 

if (empty($hash['username'])){
	echo "Invalid. Pls try again.";
}
else if (password_verify($password, $hash['password'])) {
    echo 'Valid';
} 
else {
    echo 'Invalid password';
}
?>


