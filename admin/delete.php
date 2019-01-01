<?php
require "init.php";
$id = $_GET['id'];
$sql = "DELETE FROM competitions WHERE id=$id";
mysqli_query($con, $sql);
header("Location: viewAllCompetition.php");
?>