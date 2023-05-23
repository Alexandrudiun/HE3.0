const search = () => {
  const searchbox = document.getElementById("search-item").value.toUpperCase();
  const cards = document.querySelectorAll(".card");
  let visibleCount = 0;

  cards.forEach(card => {
    const textValue = card.textContent || card.innerText;
    const deleteBtn = card.querySelector(".delete-btn");

    if (textValue.toUpperCase().indexOf(searchbox) > -1) {
      card.style.display = "block";
      deleteBtn.style.display = "flex";
      visibleCount++;
    } else {
      card.style.display = "none";
      deleteBtn.style.display = "none";
    }
  });
};
