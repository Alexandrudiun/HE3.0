// Select the toggle button
const toggleBtn = document.querySelector("#toggle-button");

// Add a click event listener to the toggle button
toggleBtn.addEventListener("click", function () {
  // Select all elements with a style property that contains a value with #ff9800
  const elements = document.querySelectorAll("[style*='#ff9800']");
  
  // Loop through each element and update its styles
  elements.forEach((el) => {
    const styles = window.getComputedStyle(el);
    if (styles.background === "#ff9800") {
      el.style.background = "#e91e63";
    }
    if (styles.boxShadow === "#ff9800 0px 0px 10px") {
      el.style.boxShadow = "#e91e63 0px 0px 10px";
    }
    if (styles.border === "#ff9800 solid 1px") {
      el.style.border = "#e91e63 solid 1px";
    }
  });
  
  // Toggle the class of the toggle button to change its appearance
  toggleBtn.classList.toggle("active");
});

// Add a click event listener to the page to revert to the original colors when the toggle button is pressed again
document.addEventListener("click", function (event) {
  if (event.target.classList.contains("active")) {
    const elements = document.querySelectorAll("[style*='#e91e63']");
    elements.forEach((el) => {
      const styles = window.getComputedStyle(el);
      if (styles.background === "#e91e63") {
        el.style.background = "#ff9800";
      }
      if (styles.boxShadow === "#e91e63 0px 0px 10px") {
        el.style.boxShadow = "#ff9800 0px 0px 10px";
      }
      if (styles.border === "#e91e63 solid 1px") {
        el.style.border = "#ff9800 solid 1px";
      }
    });
    
    toggleBtn.classList.remove("active");
  }
});
