const toggleButton = document.querySelector('#toggle-button');
const originalStyles = {};

function invertColor(hex) {
  return '#' + hex.slice(1).split('').map(c => (15 - parseInt(c, 16)).toString(16)).join('');
}

function invertStyles() {
  const elements = document.querySelectorAll('*');
  for (let i = 0; i < elements.length; i++) {
    const styles = getComputedStyle(elements[i]);
    if (styles.backgroundColor && styles.backgroundColor !== 'rgba(0, 0, 0, 0)') {
      originalStyles[elements[i]] = originalStyles[elements[i]] || {};
      originalStyles[elements[i]].backgroundColor = styles.backgroundColor;
      elements[i].style.backgroundColor = invertColor(styles.backgroundColor);
    }
    if (styles.boxShadow) {
      originalStyles[elements[i]] = originalStyles[elements[i]] || {};
      originalStyles[elements[i]].boxShadow = styles.boxShadow;
      const boxShadowParts = styles.boxShadow.split(' ');
      const invertedColor = invertColor(boxShadowParts[boxShadowParts.length - 1]);
      boxShadowParts[boxShadowParts.length - 1] = invertedColor;
      elements[i].style.boxShadow = boxShadowParts.join(' ');
    }
    if (styles.border && styles.border !== 'none') {
      originalStyles[elements[i]] = originalStyles[elements[i]] || {};
      originalStyles[elements[i]].border = styles.border;
      const borderParts = styles.border.split(' ');
      const invertedColor = invertColor(borderParts[borderParts.length - 1]);
      borderParts[borderParts.length - 1] = invertedColor;
      elements[i].style.border = borderParts.join(' ');
    }
  }
}

function revertStyles() {
  const elements = document.querySelectorAll('*');
  for (let i = 0; i < elements.length; i++) {
    const styles = originalStyles[elements[i]];
    if (styles) {
      if (styles.backgroundColor) {
        elements[i].style.backgroundColor = styles.backgroundColor;
      }
      if (styles.boxShadow) {
        elements[i].style.boxShadow = styles.boxShadow;
      }
      if (styles.border) {
        elements[i].style.border = styles.border;
      }
    }
  }
  originalStyles = {};
}

toggleButton.addEventListener('click', () => {
  if (toggleButton.classList.contains('active')) {
    toggleButton.classList.remove('active');
    revertStyles();
  } else {
    toggleButton.classList.add('active');
    invertStyles();
  }
});
