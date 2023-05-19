let fileInput = document.getElementById("fileInput");
let imageContainer = document.getElementById("images");
let numOfFiles = document.getElementById("num-of-files");

function preview (){
  imageContainer.innerHTML = "";
  numOfFiles.textContent = `${fileInput.files.length}
  Imagini Selectate`;

  for ( i of fileInput.files){
    let reader = new FileReader();
    let figure = document.createElement("figure");
    let figCap = document.createElement("figCaption");
    figCap.innerText = i.name;
    figure.appendChild(figCap);
    reader.onload=()=>{
      let img = document.createElement("img");
      img.setAttribute("src", reader.result);
      figure.insertBefore(img,figCap);
    }
    imageContainer.appendChild(figure);
    reader.readAsDataURL(i);
  }
}

function remove_img(){
  document.getElementById('fileInput').remove();
}