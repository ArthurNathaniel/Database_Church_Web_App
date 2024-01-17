const imageInput = document.getElementById("image-input");
const imagePreview = document.getElementById("image-preview");

imageInput.addEventListener("change", function () {
  displayImage(this);
});

function displayImage(input) {
  if (input.files && input.files[0]) {
    const reader = new FileReader();

    reader.onload = function (e) {
      imagePreview.innerHTML =
        '<img src="' + e.target.result + '" alt="Profile Image">';
    };

    reader.readAsDataURL(input.files[0]);
  }
}
