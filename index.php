<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Marriage Biodata</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- FORM VIEW -->
<div id="formView" style="display:block;">
  <div class="container">

    <div class="form-header">
      <h1>Create Marriage Biodata</h1>
      <p>Enter your details below to make a Marriage Biodata.</p>
    </div>

    <!-- Photo Upload -->
    <div class="upload-section">
      <label>Upload Profile Photo</label>
      <input type="file" id="photo" name="photo" accept="image/*">
    </div>

    <!-- Personal Details -->
    <div class="section-title">Personal Details</div>
    <div class="grid-2">
      <div class="field-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" placeholder="Enter your full name">
      </div>
      <div class="field-group">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob">
      </div>
      <div class="field-group">
        <label for="tob">Time of Birth</label>
        <input type="time" id="tob">
      </div>
      <div class="field-group">
        <label for="pob">Place of Birth</label>
        <input type="text" id="pob" placeholder="Village, City, Country">
      </div>
      <div class="field-group">
        <label for="height">Height</label>
        <input type="text" id="height" placeholder="e.g. 5'10&quot;">
      </div>
      <div class="field-group">
        <label for="complexion">Blood Group</label>
        <input type="text" id="complexion" placeholder="e.g. B+">
      </div>
      <div class="field-group">
        <label for="education">Education</label>
        <input type="text" id="education" placeholder="Degree/University">
      </div>
      <div class="field-group">
        <label for="job">Occupation</label>
        <input type="text" id="job" placeholder="Job Title &amp; Company">
      </div>
    </div>

    <!-- Family Details -->
    <div class="section-title">Family Details</div>
    <div class="grid-2">
      <div class="field-group">
        <label for="fatherName">Father's Name</label>
        <input type="text" id="fatherName" placeholder="Enter full name">
      </div>
      <div class="field-group">
        <label for="fatherJob">Father's Occupation</label>
        <input type="text" id="fatherJob" placeholder="Job Title &amp; Company">
      </div>
      <div class="field-group">
        <label for="motherName">Mother's Name</label>
        <input type="text" id="motherName" placeholder="Enter full name">
      </div>
      <div class="field-group">
        <label for="siblings">Siblings</label>
        <input type="text" id="siblings" placeholder="e.g. 1 Brother, 1 Sister">
      </div>
    </div>

    <!-- Contact Details -->
    <div class="section-title">Contact Details</div>
    <div class="grid-2">
      <div class="field-group">
        <label for="contactNumber">Contact Number</label>
        <input type="text" id="contactNumber" placeholder="Enter your contact number">
      </div>
      <div class="field-group">
        <label for="mailAddress">Mail Address</label>
        <input type="text" id="mailAddress" placeholder="Enter your mail address">
      </div>
      <div class="field-group full-width">
        <label for="address">Address</label>
        <input type="text" id="address" placeholder="Enter your address">
      </div>
    </div>

    <div class="btn-wrap">
      <button class="btn" onclick="generateBiodata()">Generate Biodata</button>
    </div>

  </div>
</div>

<!-- BIODATA VIEW -->
<div id="biodataView">
  <div class="biodata-card">

    <div class="biodata-top">
      <div class="biodata-photo">
        <img id="previewImage" src="" alt="Profile Photo">
      </div>
      <div class="biodata-name-block">
        <h2 id="dispName"></h2>
        <p id="dispJob"></p>
      </div>
    </div>

    <div class="biodata-section-title">Personal Details</div>
    <div class="biodata-grid">
      <div class="biodata-item"><label>Date of Birth</label><span id="dispDob"></span></div>
      <div class="biodata-item"><label>Time of Birth</label><span id="dispTob"></span></div>
      <div class="biodata-item"><label>Place of Birth</label><span id="dispPob"></span></div>
      <div class="biodata-item"><label>Height</label><span id="dispHeight"></span></div>
      <div class="biodata-item"><label>Blood Group</label><span id="dispComplexion"></span></div>
      <div class="biodata-item"><label>Education</label><span id="dispEducation"></span></div>
    </div>

    <div class="biodata-section-title">Family Details</div>
    <div class="biodata-grid">
      <div class="biodata-item"><label>Father's Name</label><span id="dispFather"></span></div>
      <div class="biodata-item"><label>Father's Occupation</label><span id="dispFatherJob"></span></div>
      <div class="biodata-item"><label>Mother's Name</label><span id="dispMother"></span></div>
      <div class="biodata-item"><label>Siblings</label><span id="dispSiblings"></span></div>
    </div>

    <div class="biodata-section-title">Contact Details</div>
    <div class="biodata-grid">
      <div class="biodata-item"><label>Contact Number</label><span id="dispMobile"></span></div>
      <div class="biodata-item"><label>Mail Address</label><span id="dispMail"></span></div>
      <div class="biodata-item" style="grid-column:1/-1"><label>Address</label><span id="dispAddress"></span></div>
    </div>

    <div class="btn-wrap" style="text-align:left;">
      <button class="back-btn" onclick="goBack()">← Edit Details</button>
    </div>

  </div>
</div>

<script src="script.js"></script>
</body>
</html>
