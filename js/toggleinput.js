const toggleButton = document.getElementById('toggle-button');

toggleButton.addEventListener('click', function() {
  const elements = document.querySelectorAll('*');
  
  for(let i = 0; i < elements.length; i++) {
    const element = elements[i];
    const styles = getComputedStyle(element);
    const color = styles.getPropertyValue('color');

    if(color === 'rgb(255, 152, 0)') {
      element.style.color = '#e91e63';
    }
  }
});
