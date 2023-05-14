const search = () => {
  const searchbox = document.getElementById("search-item").value.toUpperCase();
  const product = document.querySelectorAll(".card");

  for (var i = 0; i < product.length; i++) {
    let textvalue = product[i].textContent || product[i].innerText;

    if (textvalue.toUpperCase().indexOf(searchbox) > -1) {
      product[i].classList.remove("hidden");
    } else {
      product[i].classList.add("hidden");
    }
  }
};
