<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
$username = $_POST['username'];
$password = $_POST['password'];

$valid_username = 'kenneth';
$valid_password = 'barbie';

if ($username === $valid_username && $password === $valid_password) {
	echo "Welcome, $username!";
} elseif (empty($username) && empty($password)){
echo "Provide both username and password. Please Try Again.";
} else {
	echo "Invalid username or password. Please Try Again.";
}
}
?>