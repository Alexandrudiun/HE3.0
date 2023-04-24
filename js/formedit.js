function previewFile() {
  const preview = document.getElementById('preview');
  const file = document.querySelector('input[type=file]').files[0];
  const reader = new FileReader();

  reader.addEventListener("load", function () {
    preview.innerHTML = `<img src="${reader.result}" alt="preview image">`;
  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}
