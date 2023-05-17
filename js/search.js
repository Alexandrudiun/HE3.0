const binarySearch = (arr, searchValue) => {
  let start = 0;
  let end = arr.length - 1;

  while (start <= end) {
    let mid = Math.floor((start + end) / 2);
    let textValue = arr[mid].textContent || arr[mid].innerText;

    if (textValue.toUpperCase() === searchValue) {
      return mid; // Element found at index mid
    } else if (textValue.toUpperCase() < searchValue) {
      start = mid + 1; // Search in the right half
    } else {
      end = mid - 1; // Search in the left half
    }
  }

  return -1; // Element not found
};

const search = () => {
  const searchBox = document.getElementById("search-item").value.toUpperCase();
  const product = Array.from(document.querySelectorAll(".card"));

  product.sort((a, b) => {
    const textA = a.textContent || a.innerText;
    const textB = b.textContent || b.innerText;
    return textA.localeCompare(textB);
  });

  const searchIndex = binarySearch(product, searchBox);

  if (searchIndex !== -1) {
    // Element found
    product.forEach((item, index) => {
      if (index === searchIndex) {
        item.classList.remove("hidden");
      } else {
        item.classList.add("hidden");
      }
    });
  } else {
    // Element not found
    product.forEach((item) => item.classList.add("hidden"));
  }
};

