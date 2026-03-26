<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Biodata</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2 class="page-title">All Biodata</h2>

  <table class="view-table">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Photo</th>
      <th>Action</th>
    </tr>
    <?php
    $res = $conn->query("SELECT * FROM biodata");
    while ($row = $res->fetch_assoc()) {
      echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td><img src='uploads/{$row['photo']}' width='70' style='border-radius:4px;border:2px solid #900020;'></td>
        <td>
          <a href='edit.php?id={$row['id']}'>Edit</a> &nbsp;|&nbsp;
          <a href='delete.php?id={$row['id']}' onclick=\"return confirm('Delete this record?')\">Delete</a>
        </td>
      </tr>";
    }
    ?>
  </table>

  <a class="link-add" href="index.php">+ Add New Biodata</a>
</div>
</body>
</html>
