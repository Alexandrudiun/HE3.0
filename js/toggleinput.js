  const toggleInput = document.getElementById('toggle-input');
  const toggleContainer = document.querySelector('.toggle-container');

  toggleInput.addEventListener('change', () => {
    if (toggleInput.checked) {
      toggleContainer.style.backgroundColor = '#e91e63';
    } else {
      toggleContainer.style.backgroundColor = toggleContainer.getAttribute('data-color');
    }
  });
