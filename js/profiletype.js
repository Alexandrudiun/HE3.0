const form = document.getElementById('profile-form');
  const inputs = form.elements.profile;

  form.addEventListener('submit', function(event) {
    const selectedInputs = Array.from(inputs).filter(input => input.checked);
    
    if (selectedInputs.length !== 1) {
      event.preventDefault();
      alert('Selectați exact o opțiune!');
    }
  });