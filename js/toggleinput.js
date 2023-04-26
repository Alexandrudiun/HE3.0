function replaceColors() {
  const elements = document.getElementsByTagName('*');
  for (let i = 0; i < elements.length; i++) {
    const style = window.getComputedStyle(elements[i]);
    const background = style.getPropertyValue('background');
    const boxShadow = style.getPropertyValue('box-shadow');

    if (background === 'rgb(255, 152, 0)') {
      elements[i].style.backgroundColor = '#e91e63';
    }

    if (boxShadow.includes('rgb(255, 152, 0)')) {
      const modifiedBoxShadow = boxShadow.replace(/rgb\(255,\s*152,\s*0\)/g, '#e91e63');
      elements[i].style.boxShadow = modifiedBoxShadow;
    }
  }
}

const toggleBtn = document.getElementById('toggle-button');
toggleBtn.addEventListener('click', replaceColors);
