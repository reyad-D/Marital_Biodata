<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>View</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>All Biodata</h2>

<table border="1" width="100%">
<tr>
<th>ID</th>
<th>Name</th>
<th>Photo</th>
<th>Action</th>
</tr>

<?php
$res=$conn->query("SELECT * FROM biodata");

while($row=$res->fetch_assoc()){
echo "<tr>
<td>{$row['id']}</td>
<td>{$row['name']}</td>
<td><img src='uploads/{$row['photo']}' width='80'></td>
<td>
<a href='edit.php?id={$row['id']}'>Edit</a> |
<a href='delete.php?id={$row['id']}'>Delete</a>
</td>
</tr>";
}
?>

</table>

<br>
<a href="index.php">Add New</a>
</div>

</body>
</html>