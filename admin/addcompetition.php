<?php
require "init.php";
$title = $_POST['title'];
$img = $_POST['imageLink'];
$desc = $_POST['description'];
$link = $_POST['link'];

$desc = mysqli_real_escape_string($con, $desc);
$title = mysqli_real_escape_string($con, $title);

$sql = "INSERT INTO competitions(title, link, description, image) VALUES ('$title', '$link', '$desc', '$img')";
$res = mysqli_query($con, $sql);
if($res == False){
	header("Location: administrate.php?success=false");
}else{
	header("Location: administrate.php?success=true");
}
?>