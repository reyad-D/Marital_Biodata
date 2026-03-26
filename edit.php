<?php
include 'db.php';
$id   = $_GET['id'];
$data = $conn->query("SELECT * FROM biodata WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Biodata</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <div class="form-header">
    <h1>Edit Biodata</h1>
    <p>Update the details below and save changes.</p>
  </div>

  <form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

    <div class="section-title">Basic Info</div>
    <div class="grid-2">
      <div class="field-group">
        <label>Full Name</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($data['name']); ?>" required>
      </div>
      <div class="field-group">
        <label>Occupation</label>
        <input type="text" name="job" value="<?php echo htmlspecialchars($data['job']); ?>" required>
      </div>
    </div>

    <div class="btn-wrap">
      <button class="btn" type="submit">Update Biodata</button>
    </div>
  </form>

  <div style="margin-top:16px;">
    <a href="view.php" class="link-add">← Back to All Biodata</a>
  </div>
</div>
</body>
</html>
