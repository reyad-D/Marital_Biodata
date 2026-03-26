function validateForm() {
  let isValid = true;

  // Clear previous errors
  document.querySelectorAll("#formView .input-error").forEach(el => {
    el.classList.remove("input-error");
  });
  document.querySelectorAll("#formView .error-message").forEach(el => {
    el.remove();
  });

  const inputs = document.querySelectorAll("#formView input");

  inputs.forEach(input => {
    if (input.type !== "file") {
      if (!input.value.trim()) {
        isValid = false;
        input.classList.add("input-error");

        const error = document.createElement("div");
        error.className = "error-message";
        error.innerText = "This field is required";
        input.parentNode.appendChild(error);
      }
    }
  });

  return isValid;
}

function generateBiodata() {
  if (!validateForm()) return;

  document.getElementById("dispName").innerText = document.getElementById("name").value;
  document.getElementById("dispDob").innerText = document.getElementById("dob").value;
  document.getElementById("dispTob").innerText = document.getElementById("tob").value;
  document.getElementById("dispPob").innerText = document.getElementById("pob").value;
  document.getElementById("dispHeight").innerText = document.getElementById("height").value;
  document.getElementById("dispComplexion").innerText = document.getElementById("complexion").value;
  document.getElementById("dispEducation").innerText = document.getElementById("education").value;
  document.getElementById("dispJob").innerText = document.getElementById("job").value;

  document.getElementById("dispFather").innerText = document.getElementById("fatherName").value;
  document.getElementById("dispFatherJob").innerText = document.getElementById("fatherJob").value;
  document.getElementById("dispMother").innerText = document.getElementById("motherName").value;
  document.getElementById("dispSiblings").innerText = document.getElementById("siblings").value;

  document.getElementById("dispMobile").innerText = document.getElementById("contactNumber").value;
  document.getElementById("dispMail").innerText = document.getElementById("mailAddress").value;
  document.getElementById("dispAddress").innerText = document.getElementById("address").value;

  const file = document.getElementById("photo").files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      document.getElementById("previewImage").src = e.target.result;
    };
    reader.readAsDataURL(file);
  }

  document.getElementById("formView").style.display = "none";
  document.getElementById("biodataView").style.display = "block";
  window.scrollTo(0, 0);
}

function goBack() {
  document.getElementById("formView").style.display = "block";
  document.getElementById("biodataView").style.display = "none";
}
