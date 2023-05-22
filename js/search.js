// for better search performances use binary search O(logn);

const search = () => {
  const searchbox = document.getElementById("search-item").value.toUpperCase();
  const product = document.querySelectorAll(".card");

  let hiddenCount = 0; // Track the number of hidden items

  for (var i = 0; i < product.length; i++) {
    let textvalue = product[i].textContent || product[i].innerText;

    if (textvalue.toUpperCase().indexOf(searchbox) > -1) {
      product[i].classList.remove("hidden");
      product[i].style.order = ""; // Reset the order property
    } else {
      product[i].classList.add("hidden");
      product[i].style.order = hiddenCount; // Assign the order property based on the hidden count
      hiddenCount++;
    }
  }
};


