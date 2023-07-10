<?php
session_start();
$user_name = $_SESSION['user_name'];

$user_id = $_SESSION['user_id'];
echo  "<h1>". $user_name."</h1>";;

echo "<h1>".$user_id ."</h1>";

?>