<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Biodata Creator</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
<h1 style="text-align:center;">Create Biodata</h1>

<form action="save.php" method="POST" enctype="multipart/form-data">

<input type="file" name="photo" required>

<div class="grid-2">
<input type="text" name="name" placeholder="Name" required>
<input type="date" name="dob" required>
<input type="time" name="tob" required>
<input type="text" name="pob" placeholder="Place of Birth" required>
<input type="text" name="height" placeholder="Height" required>
<input type="text" name="complexion" placeholder="Complexion" required>
<input type="text" name="education" placeholder="Education" required>
<input type="text" name="job" placeholder="Occupation" required>

<input type="text" name="fatherName" placeholder="Father Name" required>
<input type="text" name="fatherJob" placeholder="Father Job" required>
<input type="text" name="motherName" placeholder="Mother Name" required>
<input type="text" name="siblings" placeholder="Siblings" required>

<input type="text" name="contactNumber" placeholder="Contact" required>
<input type="text" name="mailAddress" placeholder="Email" required>
<input type="text" name="address" placeholder="Address" required>
</div>

<button class="btn">Save</button>

</form>

<br>
<a href="view.php">View All Biodata</a>
</div>

</body>
</html>