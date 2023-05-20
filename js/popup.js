    function showImage(index) {
        var popup = document.getElementById('popup-image');
        var popupSlide = document.getElementById('slide-' + index);
        popup.style.display = 'block';
        popupSlide.style.display = 'block';
    }

    function hideImage() {
        var popup = document.getElementById('popup-image');
        popup.style.display = 'none';
    }


