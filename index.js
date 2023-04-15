const form = document.querySelector('form');
  const passwordInput = document.querySelector('#password');
  const confirmPasswordInput = document.querySelector('#confirmPassword');
  const errorLabel = document.createElement('label');
  errorLabel.textContent = 'Parolele nu se potrivesc';
  errorLabel.style.color = 'red';
  errorLabel.style.display = 'none';
  confirmPasswordInput.parentNode.appendChild(errorLabel);

  function validateForm(event) {
    if (passwordInput.value !== confirmPasswordInput.value) {
      errorLabel.style.display = 'block';
      event.preventDefault();
    }
  }

  form.addEventListener('submit', validateForm);