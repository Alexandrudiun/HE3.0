const search = () => {
  const searchbox = document.getElementById("search-item").value.toUpperCase();
  const cards = document.querySelectorAll(".card");
  const deleteButtons = document.querySelectorAll(".delete-btn");
  let visibleCount = 0;

  for (let i = 0; i < cards.length; i++) {
    let textValue = cards[i].textContent || cards[i].innerText;
    let deleteButton = deleteButtons[i];

    if (textValue.toUpperCase().indexOf(searchbox) > -1) {
      cards[i].classList.remove("hidden");
      deleteButton.classList.remove("hidden");
      visibleCount++;
    } else {
      cards[i].classList.add("hidden");
      deleteButton.classList.add("hidden");
    }
  }
};

