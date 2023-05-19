let fileInput = document.getElementById("fileInput");
let imageContainer = document.getElementById("images");
let numOfFiles = document.getElementById("num-of-files");

function preview() {
  imageContainer.innerHTML = "";
  numOfFiles.textContent = `${fileInput.files.length} Imagini Selectate`;

  for (let i = 0; i < fileInput.files.length; i++) {
    let reader = new FileReader();
    let figure = document.createElement("figure");
    let figCap = document.createElement("figcaption");
    figCap.innerText = fileInput.files[i].name;
    figure.appendChild(figCap);

    reader.onload = () => {
      let img = document.createElement("img");
      img.setAttribute("src", reader.result);
      figure.insertBefore(img, figCap);
    };

    let removeButton = document.createElement("button");
    removeButton.textContent = "Remove";
    removeButton.addEventListener("click", () => {
      removeImage(i);
    });
    figure.appendChild(removeButton);

    imageContainer.appendChild(figure);
    reader.readAsDataURL(fileInput.files[i]);
  }
}

function removeImage(index) {
  let selectedFiles = Array.from(fileInput.files);
  selectedFiles.splice(index, 1);
  fileInput.files = new FileList(...selectedFiles);
  preview();
}
