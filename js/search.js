// for better search performances use binary search O(logn);

const search = () => {
  const searchbox = document.getElementById("search-item").value.toUpperCase();
  const products = document.querySelectorAll(".card");
  let visibleCount = 0;

  for (let i = 0; i < products.length; i++) {
    let textValue = products[i].textContent || products[i].innerText;

    if (textValue.toUpperCase().indexOf(searchbox) > -1) {
      products[i].classList.remove("hidden");
      visibleCount++;
    } else {
      products[i].classList.add("hidden");
    }
  }
};



