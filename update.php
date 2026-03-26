<?php
include 'db.php';

$id=$_POST['id'];
$name=$_POST['name'];
$job=$_POST['job'];

$conn->query("UPDATE biodata SET name='$name',job='$job' WHERE id=$id");

header("Location:view.php");
?>