const search = () => {
  const searchbox = document.getElementById("search-item").value.toUpperCase();
  const cards = document.querySelectorAll(".card");
  let visibleCount = 0;

  for (let i = 0; i < cards.length; i++) {
    let textValue = cards[i].textContent || cards[i].innerText;

    if (textValue.toUpperCase().indexOf(searchbox) > -1) {
      cards[i].classList.remove("hidden");
      visibleCount++;
    } else {
      cards[i].classList.add("hidden");
    }
  }

  const marginContent = document.querySelectorAll(".card .margin-bottom");
  marginContent.forEach(content => {
    content.style.display = "none";
  });

  const deleteButtons = document.querySelectorAll(".card .delete-btn");
  deleteButtons.forEach(button => {
    button.style.display = "none";
  });

  if (visibleCount === 1) {
    const visibleCard = document.querySelector(".card:not(.hidden)");
    visibleCard.style.width = "100%";
  } else {
    cards.forEach(card => {
      card.style.width = "calc(50% - 20px)";
    });
  }
};
