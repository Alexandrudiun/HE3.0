let fileInput = document.getElementById("fileInput");
let imageContainer = document.getElementById("images");
let numOfFiles = document.getElementById("num-of-files");

function preview() {
  imageContainer.innerHTML = "";
  numOfFiles.textContent = `${fileInput.files.length} Imagini Selectate`;

  for (let i of fileInput.files) {
    let reader = new FileReader();
    let figure = document.createElement("figure");
    let figCap = document.createElement("figcaption");
    figCap.innerText = i.name;
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
    reader.readAsDataURL(i);
  }
}

function removeImage(file) {
  let selectedFiles = Array.from(fileInput.files);
  let removedIndex = selectedFiles.findIndex((f) => f.name === file.name);

  if (removedIndex !== -1) {
    selectedFiles.splice(removedIndex, 1);
    fileInput.files = new FileList(...selectedFiles);
    preview();
  }
}
