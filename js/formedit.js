function updateFileName() {
  const input = document.getElementById('image');
  const label = document.getElementById('file-label');
  const fileName = input.files[0].name;
  label.innerHTML = fileName;
}