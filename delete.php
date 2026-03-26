<?php
include 'db.php';
$id=$_GET['id'];
$conn->query("DELETE FROM biodata WHERE id=$id");
header("Location:view.php");
?>