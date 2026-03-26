<?php
include 'db.php';
$id=$_GET['id'];
$data=$conn->query("SELECT * FROM biodata WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<form action="update.php" method="POST">
<input type="hidden" name="id" value="<?php echo $data['id']; ?>">

<input type="text" name="name" value="<?php echo $data['name']; ?>">
<input type="text" name="job" value="<?php echo $data['job']; ?>">

<button class="btn">Update</button>
</form>

</div>

</body>
</html>