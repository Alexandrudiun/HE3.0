document.querySelectorAll('.slider img').forEach(image =>{
  image.onclick = () =>{
  document.querySelector('.popup-image').style.display = 'block';
  document.querySelector('.popup-image img').src = image.getAttribute('src');
  }
});

document.querySelector('.popup-image ion-icon').onclick = () =>{
  document.querySelector('.popup-image').style.display = 'none';
}