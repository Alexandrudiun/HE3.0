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

    let removeWrapper = document.createElement("div");
    removeWrapper.classList.add("remove-wrapper"); // Add a class to the wrapper div

    let removeButton = document.createElement("button");
    removeButton.textContent = "Remove";
    removeButton.classList.add("remove-button"); // Add the class to the remove button

    removeButton.addEventListener("click", () => {
      removeImage(i);
    });

    removeWrapper.appendChild(removeButton); // Append the remove button to the wrapper div
    figure.appendChild(removeWrapper); // Append the wrapper div to the figure


    imageContainer.appendChild(figure);
    reader.readAsDataURL(fileInput.files[i]);
  }
}

function removeImage(index) {
  let selectedFiles = Array.from(fileInput.files);
  selectedFiles.splice(index, 1);
  fileInput.value = ''; // Clear the file input value

  // Create a new FileList object with the updated selected files
  let newFileList = new DataTransfer();
  selectedFiles.forEach((file) => newFileList.items.add(file));

  // Set the files property of the file input to the new FileList
  if ('files' in fileInput) {
    fileInput.files = newFileList.files;
  }

  preview();
}

