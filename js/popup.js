
function showPopup(slideIndex) {
    const popupContainer = document.getElementById('popup-container');
    popupContainer.classList.add('show');
    const popupContent = document.getElementById('popup-content');
    popupContent.src = document.getElementById('slide-' + slideIndex).src;
}

function hidePopup() {
    const popupContainer = document.getElementById('popup-container');
    popupContainer.classList.remove('show');
}

